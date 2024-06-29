<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|string|min:3|max:50',
            'message' => 'required|string|min:10|max:100',
        ]);

        Mail::to('mohamedwaged1@gmail.com')->send(new ContactMail($validated));

        toastr()->closeButton()->addsuccess('Thank You For your Message!');
        return redirect()->route('contact');
        // return redirect()->route('contact')->with('success', 'Thank You For your Message!');
    }

}
