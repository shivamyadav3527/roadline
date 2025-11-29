<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Mail\ContactFormMail;

Route::get('/', [PageController::class, 'home']);
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [PageController::class, 'contactSubmit']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/permits', [PageController::class, 'permits']);
Route::post('/pickup-submit', [PageController::class, 'submit'])->name('pickup.submit');

Route::post('/pickup-submit', [App\Http\Controllers\PickupController::class, 'submitRequest'])
    ->name('pickup.submit');
    
Route::get('/waste-management', function () {
    return view('pages.waste-management');
})->name('waste.management');

Route::get('/hazardous-waste', function () {
    return view('pages.hazardous');
})->name('hazardous.waste');

Route::get('/non-hazardous-waste', function () {
    return view('pages.nonhazardous');
})->name('nonhazardous.waste');