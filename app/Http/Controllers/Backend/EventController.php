<?php

namespace App\Http\Controllers\Backend;

use App\Models\frontend\advert_images;
use App\Models\frontend\announcement_images;
use App\Models\frontend\event_images;
use Illuminate\Support\Facades\File;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Session;
use App\Models\backend\Event;
use App\Http\Controllers\Backend\BaseBackendController;

class EventController extends BaseBackendController
{

 protected $uploadPath;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()->sortByDesc("id");
        return view('backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'name_tr' => 'required',
            'text_tr' => 'required',
            'location_tr' => 'required'
        ]);




        $event = new Event();
         $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->name_tr = $request->name_tr;
        $event->text_tr = $request->text_tr;
        $event->location_tr = $request->location_tr;

        $event->slug =  Str::slug($request->name_tr);

        $event->save();


        // Start of Upload Files
$image_array=Session::get("gallery_images")??[];
foreach($image_array as $image) {
    $gallery_images = new event_images;
    $gallery_images->gallery_id = $event->id;
    $gallery_images->gallery_image_path = $image;
    $gallery_images->save();
}
Session::forget("gallery_images");

            return redirect('admin/events')->with('success', trans('Information has been added sucessfully'));

    }


public function image_upload(Request $request){
    $image_array= Session::get("gallery_images")??[];
    // Start of Upload Files
    if ($request->hasFile('gallery_images')) {
          $all_images = $request->file('gallery_images');
        $path = $this->getUploadPath();
         foreach ($all_images as $file) {
            $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $image_name);
            array_push($image_array,$image_name);
            Session::put("gallery_images",$image_array);
        }
    }
    return json_encode(["success"=>"true","msg"=>"Uploaded"]);

}
    public function deleteImage($id)
    {
        //For Deleting
        $images = new event_images();
        $images = event_images::find($id);
        File::delete($this->getUploadPath() . $images->event_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }

    public function getUploadPath()
    {
        return \Config::get('app.APP_URL') . 'upload_event';
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
        $event = Event::find($id);

        return view('backend.event.edit', compact('event', 'id'));

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
        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'name_tr' => 'required',

        ]);




        $event = Event::find($id);
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->name_tr = $request->name_tr;
        $event->text_tr = $request->text_tr;
        $event->location_tr = $request->location_tr;

        $event->slug =  Str::slug($request->name_en);

        $event->save();


        // Start of Upload Files
        $image_array=Session::get("gallery_images")??[];
        foreach($image_array as $image) {
            $gallery_images = new event_images;
            $gallery_images->gallery_id = $event->id;
            $gallery_images->gallery_image_path = $image;
            $gallery_images->save();
        }
        Session::forget("gallery_images");



            return redirect('admin/events')->with('success', trans('Information has been updated sucessfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // Delete a style_logo_en photo
        if ($event->image != "") {
            unlink('uploads/events/' . $event->image);
        }
        $event->delete();
        return redirect('admin/events')->with('success', trans('Information has been deleted sucessfully'));
    }





}
