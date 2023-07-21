<?php

namespace Aminurdev\Contact\Http\Controllers;

use Aminurdev\Contact\Mail\ContactMail;
use Aminurdev\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message, $request->name));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
