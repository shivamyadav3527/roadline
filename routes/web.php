<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Mail\ContactFormMail;

Route::get('/', [PageController::class, 'home']);
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact-submit', [PageController::class, 'contactSubmit']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/permits', [PageController::class, 'permits']);

// Route::post('/contact-submit', function (\Illuminate\Http\Request $request) {
//     $data = $request->all();

//     // Send email
//     Mail::to('shivamyadav3527@gmail.com')->send(new ContactFormMail($data));

//     // Redirect back with success message
//     return back()->with('success', 'Thank you! Your message has been sent successfully.');
// });

