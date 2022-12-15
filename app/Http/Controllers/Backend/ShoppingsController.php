<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Shoppings;
use App\Models\backend\Shoppings as BackendShoppings;
use App\Models\frontend\shoppings_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShoppingsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppings = BackendShoppings::query()->join('users', 'users.id', '=', 'shoppings.user_id')->select(
            'shoppings.*',
            'users.full_name_tr'
        )->get();
        return view('backend.shoppings.index', compact('shoppings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.shoppings.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendShoppings::query()->select(DB::raw('total + ' . $request->shoppings . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('public/uploads/shoppings', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $shoppings = new BackendShoppings();
        $shoppings->date = $request->date;
        //$shoppings->total = $total->total ?? $request->shoppings;
        $shoppings->user_id = $request->user;
        $shoppings->description = $request->description;
        $shoppings->f_image =  $fileNameToStore;

        $shoppings->save();
        // Start of Upload Files
        if ($request->hasFile('shoppings_images')) {
            $all_images = $request->file('shoppings_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $shoppings_images = new shoppings_images;
                $shoppings_images->shoppings_id = $shoppings->id;
                $shoppings_images->shoppings_image_path = $image_name;
                $shoppings_images->save();
            }
        }

        return redirect(route('admin.shoppings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendShoppings $shoppings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $shoppings = BackendShoppings::find($id);
        //dd(compact('shoppings', 'users'));
        return view('backend.shoppings.edit', compact('shoppings', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\shoppings $shoppings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $shoppings = Shoppings::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = Shoppings::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/shoppings/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/shoppings', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $shoppings = BackendShoppings::find($id);
        $shoppings->date = $request->date;
        //$total = BackendShoppings::query()->select(DB::raw('SUM(shoppings) + ' . $request->shoppings . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$shoppings->total = $total->total ?? $request->shoppings;
        $shoppings->user_id = $request->user;
        $shoppings->description = $request->description;
        $shoppings->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $shoppings_images = new shoppings_images;
                $shoppings_images->shoppings_id = $id;
                $shoppings_images->shoppings_image_path = $image_name;
                $shoppings_images->save();
            }
        }
        return redirect(route('admin.shoppings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\shoppings $shoppings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shoppings = BackendShoppings::find($id);
        $shoppings->delete();
        return redirect()->back()->with('message', 'shoppings Deleted Successfully');
    }
}
