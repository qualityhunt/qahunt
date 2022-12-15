<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Models\frontend\tag;
use Illuminate\Http\Request;
use App\Models\frontend\announcement;
use App\Models\frontend\category;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\unit_type;
use App\Models\frontend\announcement_images;
use Illuminate\Support\Facades\File;


class AnnouncementController extends BaseBackendController
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $announcements = announcement::all();
      return view('backend.blog.announcement.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title_tr'=>'required',


        ]);


        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/announcements', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }


        $announcement = new announcement;
        $announcement->f_image = $fileNameToStore;
         $announcement->title_tr = $request->title_tr;
         $announcement->text_tr = $request->text_tr;
        $announcement->slug =  Str::slug($request->title_tr);
        $announcement->date = $request->date;
        $announcement->save();
        // Start of Upload Files
        if ($request->hasFile('announcement_images')) {
            $all_images = $request->file('announcement_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $announcement_images = new announcement_images;
                $announcement_images->announcement_id = $announcement->id;
                $announcement_images->announcement_image_path = $image_name;
                $announcement_images->save();
            }
        }







        return redirect(route('admin.announcement.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $announcement = announcement::where('id', $id)->first();



        return view('backend.blog.announcement.edit',compact('announcement'));


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
        'title_tr'=>'required',

        // 'image'=>'required',
      ]);




         // End of Upload Files
      $announcement = announcement::find($id);
        //   $announcement->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $announcementx = announcement::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($announcementx->f_image != "") {
                unlink('public/uploads/announcement/' . $announcementx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/announcement', $fileNameToStore);

            $announcementx->f_image = $fileNameToStore;
            $announcementx->save();
        }

         $announcement->title_tr = $request->title_tr;

         $announcement->text_tr = $request->text_tr;



        $announcement->slug =  Str::slug($request->title_tr);
        $announcement->date = $request->date;




      $announcement->save();

        // Start of Upload Files
        if ($request->hasFile('announcement_images')) {
            $all_images = $request->file('announcement_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $announcement_images = new announcement_images;
                $announcement_images->announcement_id = $id;
                $announcement_images->announcement_image_path = $image_name;
                $announcement_images->save();
            }
        }




      return redirect(route('admin.announcement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $announcement = announcement::find($id);
      $announcement_images = announcement_images::where('announcement_id', $id)->get();
      foreach ($announcement_images as $image) {
          unlink('uploads/announcements/' . $image->announcement_image_path);

      }
      unlink('uploads/announcements/' . $announcement->f_image);
      $announcement->delete();
      return redirect()->back();

    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new announcement_images();
        $images = announcement_images::find($id);
        File::delete($this->getUploadPath() . $images->announcement_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}
