<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\backend\ShoppingModel;

class ShoppingController extends Controller
{


    public function index()
    {

        $shopping = ShoppingModel::all();

        return view('backend.shopping.index', compact('shopping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shopping.create');
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
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            try {
                $path = $request->file('image')->move('uploads/shopping', $fileNameToStore);
            } catch (\Exception $e) {
                dd($e);
            }
        } else {
            $fileNameToStore = 'f_image.jpg';
        }
        $shopping = new ShoppingModel;
        $shopping->image = $fileNameToStore;
        $shopping->name = $request->name;
        $shopping->link = $request->link;
        $shopping->description = $request->description;
        $shopping->slug =  Str::slug($request->name);
        $shopping->save();
        return redirect(route('admin.shopping.index'));
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
        $shopping = ShoppingModel::where('id', $id)->first();
        return view('backend.shopping.edit', compact('shopping'));
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

        if ($request->hasFile('image')) {
            $postx = ShoppingModel::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            // if ($postx->image != "") {
            //     unlink('public/uploads/shopping/' . $postx->image);
            // }

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('image')->move('public/uploads/shopping', $fileNameToStore);

            $postx->image = $fileNameToStore;
            $postx->save();
        }
        $shopping = ShoppingModel::find($id);
        $shopping->name = $request->name;
        $shopping->link = $request->link;
        $shopping->description = $request->description;
        $shopping->slug =  Str::slug($request->name);
        $shopping->save();

        return redirect(route('admin.shopping.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ShoppingModel::find($id)->delete();
        return redirect(route('admin.shopping.index'));
    }
}
