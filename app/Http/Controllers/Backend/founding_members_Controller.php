<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\FoundingMembers;
class founding_members_Controller extends Controller
{
    private $uploadPath = "public/uploads/teams/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founding_members = FoundingMembers::all();
        return view('backend.founding_members.index',compact('founding_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.founding_members.create');    }

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
  
          $founding_member = new FoundingMembers;
  
  
  
          $founding_member->image = $fileFinalName;
  
  
          $founding_member->name_tr = $request->name_tr;
  
  
       
          $founding_member->position_tr = $request->position_tr;
  
  
  
          $founding_member->text_tr = $request->text_tr;
          $founding_member->phone = $request->phone;

          $founding_member->e_mail = $request->e_mail;
          $founding_member->instagram = $request->instagram;
          $founding_member->facebook = $request->facebook;
          $founding_member->twitter = $request->twitter;
          $founding_member->linkedin = $request->linkedin;
  
  
          $founding_member->save();
  
  
  
          return redirect(route('admin.founding_members.index'))->with('message', trans('backend.created_successfully'));
  
  
  
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
        $founding_member = FoundingMembers::find($id);

        return view('backend.founding_members.edit',compact('founding_member'));
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
               $teamx = FoundingMembers::find($id);  // here to store image alone
              if ($teamx->image != "") {
                  unlink('public/uploads/teams/' . $teamx->image);
              }
               $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
               $path = $this->getUploadPath();
               $request->file($formFileName)->move($path, $fileFinalName);
               $teamx->image = $fileFinalName; // here there is  a bug when update profile image
               $teamx->save();
           }
  
  
  
           // End of Upload Files
          $founding_member = FoundingMembers::where('id',$id)->update($request->except('_token','_method','image'));
        // except image cus we handle it aboves
  
  
          return redirect(route('admin.founding_members.index'))->with('message', trans('backend.updated_successfully'));
  
  
  
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $founding_member = FoundingMembers::where('id', $id)->first();
        unlink('public/uploads/teams/' . $founding_member->image);
        $founding_member->delete();
        return redirect()->back()->with('message', trans('backend.deleted_successfully'));

    }
}
