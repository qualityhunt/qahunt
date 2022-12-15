<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\DocumentCategory;
use App\Models\frontend\category;
use Illuminate\Http\Request;

class DocumentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DocumentCategory::with('childrenCategories')->get();

          return view('backend.document.category.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = DocumentCategory::whereNull('category_id')->with('childrenCategories')->get();

        return view('backend.document.category.create',compact('categories'));

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
            'category_name' => 'required',
            'category_slug' => 'required',

        ]);
        $category = new DocumentCategory();

        $category->category_id = $request['category_id'];
        $category->category_name = $request->category_name;
         $category->category_slug = $request->category_slug;
        $category->save();
        return redirect(route('admin.document-category.index'));
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
    {    $categories = DocumentCategory::all();
        $category = DocumentCategory::where('id', $id)->first();
        return view('backend.document.category.edit', compact('category','categories'));
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
            'category_name' => 'required',
            'category_slug' => 'required',

        ]);
        $category =  DocumentCategory::findorfail($id);

        $category->category_id = $request->category_id;
        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->save();
        return redirect(route('admin.document-category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DocumentCategory::where('id',$id)->delete();
        return redirect()->back();
    }
}
