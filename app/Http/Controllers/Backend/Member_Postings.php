<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Member_Posting;
use Illuminate\Support\Str;
use App\Models\frontend\member_post;


use App\Http\Controllers\Backend\BaseBackendController;
class Member_Postings extends Controller
{
    
    private $uploadPath = "uploads/member_postings/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member_Posting::all()->sortByDesc("id");
        return view('backend.member_postings.index',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         return view('backend.member_postings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

        // Start of Upload Files
      

        $member_postings = new Member_Posting();

        $member_postings->name_tr = $request->name_tr;
        $member_postings->text_tr = $request->text_tr;
        $member_postings->category = $request->category;

        $member_postings->location_tr = $request->location_tr;

        $member_postings->slug =  Str::slug($request->name_tr);
        $member_postings->save();

        // Start of Upload Files
        if ($request->hasFile('member_postings')) {
            $all_images = $request->file('member_postings');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new member_post;
                $gallery_images->gallery_id = $member_postings->id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
            }
        }



            return redirect('admin/member_postings')->with('success', trans('Information has been added sucessfully'));

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
    public function show(Request $request, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $member_postings = Member_Posting::find($id);

        return view('backend.member_postings.edit', compact('member_postings', 'id'));

        
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
    




        $member_postings = Member_Posting::find($id);
 
    
        $member_postings->name_tr = $request->name_tr;
        $member_postings->text_tr = $request->text_tr;
        $member_postings->location_tr = $request->location_tr;
        $member_postings->category = $request->category;
        

        $member_postings->slug =  Str::slug($request->name_en);

        $gallery = gallery::find($id);
        $gallery->title_tr = $request->title_tr;
        $gallery->type = $request->type;
        $gallery->video_url = $request->video_url;

        $gallery->save();
        // Start of Upload Files
        if ($request->hasFile('gallery_images')) {
            $all_images = $request->file('gallery_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new gallery_images;
                $gallery_images->gallery_id = $id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
        }
    }
 

 

 
            return redirect('admin/member_postings')->with('success', trans('Information has been updated sucessfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
        public function destroy($id)
        {
            Member_Posting::where('id',$id)->delete();
            return redirect()->back();
        }
     
    





}
