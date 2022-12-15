<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\AdvisoryBoard;
class Advisory_Board extends Controller
{
    private $uploadPath = "uploads/advisory/";
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisory = AdvisoryBoard::all();
        return view('backend.advisory.index',compact('advisory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.advisory.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_tr' => ['required', 'string', 'max:255'],
  
            // 'image'=> ['required'],
        ]);
  
  
  
     // Start of Upload Files
   if ($request->hasFile('image')) {
    $fileNameWithExt = $request->file('image')->getClientOriginalName();
    // get file name
    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    // get extension
    $extension = $request->file('image')->getClientOriginalExtension();

    $fileNameToStore =  time() . '.' . $extension;
    // upload
    $path = $request->file('image')->move('public/uploads/advisory', $fileNameToStore);
} else {
    $fileNameToStore = 'image.jpg';
}
  
        // End of Upload Files
  
          $advisory = new AdvisoryBoard;
          $advisory->image = $fileNameToStore; 
          $advisory->name_tr = $request->name_tr;
          $advisory->position_tr = $request->position_tr;  
          $advisory->text_tr = $request->text_tr;
          $advisory->e_mail = $request->e_mail;
           $advisory->instagram = $request->instagram;
          $advisory->facebook = $request->facebook;
          $advisory->twitter = $request->twitter;
          $advisory->linkedin = $request->linkedin;
          $advisory->save();
          return redirect(route('admin.advisory.index'))->with('message', trans('backend.created_successfully'));
      }
  
      public function getUploadPath()
      {
          return $this->uploadPath;
      }
  
      public function setUploadPath($uploadPath)
      {
          $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
      }
  
  
  
      
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advisory = AdvisoryBoard::find($id);

        return view('backend.advisory.edit',compact('advisory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name_tr' => ['required', 'string', 'max:255'],
            // 'image'=>'required',
        ]);
  
         // Start of Upload Files
           $formFileName = "image";
           $fileFinalName = "";
  
           if ($request->$formFileName != "") {
               $teamx = AdvisoryBoard::find($id);  // here to store image alone
             /* if ($teamx->image != "") {
                  unlink('public/uploads/advisory/' . $teamx->image);
              }*/
               $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
               $path = $this->getUploadPath();
               $request->file($formFileName)->move($path, $fileFinalName);
               $teamx->image = $fileFinalName; // here there is  a bug when update profile image
               $teamx->save();
           }
  
  
  
           // End of Upload Files
          $advisory = AdvisoryBoard::where('id',$id)->update($request->except('_token','_method','image'));
        // except image cus we handle it aboves
  
  
          return redirect(route('admin.advisory.index'))->with('message', trans('backend.updated_successfully'));
  
  
  
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisory = AdvisoryBoard::where('id', $id)->first();
        unlink('public/uploads/advisory/' . $advisory->image);
        $advisory->delete();
        return redirect()->back()->with('message', trans('backend.deleted_successfully'));

    }
}
