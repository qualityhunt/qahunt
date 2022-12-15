<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\backend\about;
use App\Models\backend\Document;
use App\Models\backend\DocumentCategory;
use App\Models\backend\teknik_dokumanlar;
use App\Models\frontend\post;

/**
 * Class AboutController.
 */
class TeknikDokumanlarController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


        $document = Document::orderBy("id", "desc")->get();

        $categories = DocumentCategory::orderBy("id", "desc")->get();

        $posts= post::all();
        return view('frontend.teknik-dokumanlar',compact('posts','document','categories') );
    }
}
