<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }

    public function sendEmail(Request $request) {
        $mailData = $request->all();

        $mail = new ContactUs($mailData);

        Mail::to('akaunteto@gmail.com')->send($mail);
        return redirect()->back()->with('email was send');
    }
}
