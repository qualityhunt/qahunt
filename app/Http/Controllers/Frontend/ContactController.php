<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use App\Models\backend\sss;
use App\Models\frontend\post;
use Illuminate\Support\Facades\Mail;
use App\Models\backend\contact_form;

/**
 * Class ContactController.
 */
class ContactController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $posts = post::orderBy("id", "desc")->paginate(6);
        return view('frontend.contact',compact('posts'));
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {

        $contact_form  = new contact_form;
        $contact_form->name   = $request->name;
        $contact_form->subject = $request->subject;
        $contact_form->phone = $request->phone;
        $contact_form->email = $request->email;
        $contact_form->message = $request->message;
        $contact_form->save();
        Mail::send(new SendContact($request));
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }
}
