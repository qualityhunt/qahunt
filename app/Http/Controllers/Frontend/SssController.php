<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\backend\about;
 use App\Models\backend\sss;

/**
 * Class AboutController.
 */
class SssController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sss = sss::all();

        return view('frontend.sss',compact('sss'));
    }
}
