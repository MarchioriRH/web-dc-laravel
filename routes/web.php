<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\ContactController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/home', [DesktopController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
