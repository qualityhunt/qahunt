<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\sss;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class SssController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {

           $sss = sss::all();
           return view('backend.sss.index',compact('sss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('backend.sss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



$sss = new sss;
         $sss->title = $request->title;
        $sss->text = $request->text;

        $sss->save();


       return redirect(route('admin.sss.index'));


}

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(sss $sss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sss = sss::find($id);

        return view('backend.sss.edit', compact('sss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\sss  $sss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $sss = sss::find($id);  // here to store image alone

               $sss->title = $request->title;
              $sss->text = $request->text;

              $sss->save();



        // except image cus we handle it aboves
        return redirect(route('admin.sss.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\sss  $sss
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sss = sss::find($id);
       $sss->delete();
      return redirect()->back()->with('message','sss Deleted Sucsessfully');
    }
}
