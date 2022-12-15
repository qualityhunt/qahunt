<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\backend\about;
use App\Models\frontend\post;

/**
 * Class AboutController.
 */
class AboutController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $about = about::find(1);
        $posts = post::orderBy("id", "desc")->paginate(6);

        return view('frontend.about',compact('about','posts'));
    }
}
