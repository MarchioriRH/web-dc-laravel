<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/home', [DesktopController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/hidden/add-news', [NewsController::class, 'create'])->name('news.create');
Route::post('/hidden/add-news', [NewsController::class, 'store'])->name('news.store');
