<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\SupervisoryBoard;

class Supervisory_Board_Controller extends Controller
{
    private $uploadPath = "public/uploads/teams/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisoryboard = SupervisoryBoard::all();
        return view('backend.supervisoryboard.index',compact('supervisoryboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.supervisoryboard.create');    }

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
        $formFileName = "image";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(1111,
                    9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->getUploadPath();
            $request->file($formFileName)->move($path, $fileFinalName);
        }
  
  
  
        // End of Upload Files
  
          $supervisoryboard = new SupervisoryBoard;
          $supervisoryboard->image = $fileFinalName; 
          $supervisoryboard->name_tr = $request->name_tr;
          $supervisoryboard->position_tr = $request->position_tr;  
          $supervisoryboard->text_tr = $request->text_tr;
           $supervisoryboard->e_mail = $request->e_mail;
          $supervisoryboard->instagram = $request->instagram;
          $supervisoryboard->facebook = $request->facebook;
          $supervisoryboard->twitter = $request->twitter;
          $supervisoryboard->linkedin = $request->linkedin;
          $supervisoryboard->save();
          return redirect(route('admin.supervisoryboard.index'))->with('message', trans('backend.created_successfully'));
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
        $supervisoryboard = SupervisoryBoard::find($id);

        return view('backend.supervisoryboard.edit',compact('supervisoryboard'));
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
               $teamx = SupervisoryBoard::find($id);  // here to store image alone
             /* if ($teamx->image != "") {
                  unlink('public/uploads/teams/' . $teamx->image);
              }*/
               $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
               $path = $this->getUploadPath();
               $request->file($formFileName)->move($path, $fileFinalName);
               $teamx->image = $fileFinalName; // here there is  a bug when update profile image
               $teamx->save();
           }
  
  
  
           // End of Upload Files
          $supervisoryboard = SupervisoryBoard::where('id',$id)->update($request->except('_token','_method','image'));
        // except image cus we handle it aboves
  
  
          return redirect(route('admin.supervisoryboard.index'))->with('message', trans('backend.updated_successfully'));
  
  
  
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisoryboard = SupervisoryBoard::where('id', $id)->first();
        unlink('public/uploads/teams/' . $supervisoryboard->image);
        $supervisoryboard->delete();
        return redirect()->back()->with('message', trans('backend.deleted_successfully'));

    }
}
