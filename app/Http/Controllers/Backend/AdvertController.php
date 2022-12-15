<?php



namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\Advert;
use App\Models\frontend\advert_images;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdvertController extends BaseBackendController
{

    private $uploadPath = "public/uploads/galleries/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advert = Advert::all();
        return view('backend.advert.index', compact('advert'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.advert.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_tr' => 'required',
        ]);


        $gallery = new Advert;
        $gallery->title_tr = $request->title_tr;
        $gallery->text_tr = $request->text_tr;
        $gallery->location_tr = $request->location_tr;
        $gallery->category = $request->category;

        $gallery->save();



        // Start of Upload Files
        if ($request->hasFile('gallery_images')) {
            $all_images = $request->file('gallery_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new advert_images;
                $gallery_images->gallery_id = $gallery->id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
            }
        }


        return redirect(route('admin.advert.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(advert $advert)
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

        $advert = Advert::where('id', $id)->with('gallery_images')->first();
        return view('backend.advert.edit', compact('advert'));
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
        $this->validate($request, [
            'title_tr' => 'required',


        ]);





    
        $gallery = Advert::find($id);
        $gallery->title_tr = $request->title_tr;
        $gallery->text_tr = $request->text_tr;
        $gallery->location_tr = $request->location_tr;
        $gallery->category = $request->category;
        

        $gallery->save();
        // Start of Upload Files
        if ($request->hasFile('gallery_images')) {
            $all_images = $request->file('gallery_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new advert_images;
                $gallery_images->gallery_id = $gallery->id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
            }
        }


        return redirect(route('admin.advert.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gallery_images = advert_images::where('gallery_id', $id)->get();
        foreach ($gallery_images as $image) {
            unlink('public/uploads/galleries/' . $image->gallery_image_path);
        }
        Advert::where('id', $id)->delete();
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
        $images = new advert_images();
        $images = advert_images::find($id);
        File::delete($this->getUploadPath() . $images->gallery_image_path);
        $images->delete($id);

        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }

}
