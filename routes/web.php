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


