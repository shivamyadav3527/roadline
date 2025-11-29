<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PickupRequestMail;
use Illuminate\Support\Facades\Mail;

class PickupController extends Controller
{
    public function submitRequest(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'phone'       => 'required|string|max:20',
            'email'       => 'nullable|email',
            'address'     => 'required|string',
            'waste_type'  => 'required|string',
            'description' => 'nullable|string'
        ]);

        Mail::to('allindiawastemanagement@gmail.com')->send(new PickupRequestMail($validated));

        return back()->with('success', 'Your waste pickup request has been submitted successfully. We will contact you shortly!');
    }
}
