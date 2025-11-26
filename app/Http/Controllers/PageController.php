<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }

    public function permits()
    {
        return view('permits');
    }


    public function contactSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

            Mail::to('allindiawastemangement@gmail.com')->send(new ContactFormMail($data));


        return back()->with('success', 'Your message has been sent! We will contact you soon.');
    }

    public function submit(Request $request)
    {
        // save to DB or send email
        return back()->with('success', 'Pickup request submitted successfully!');
    }

}
