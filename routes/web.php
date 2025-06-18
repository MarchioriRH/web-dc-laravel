<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventsController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', [DesktopController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/descargas', [DownloadController::class, 'index'])->name('download.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UserController::class, 'profile']);
    Route::get('/usuarios', [UserController::class, 'index']);
    Route::get('/nuevo-registro', [EventsController::class, 'create'])->name('registers.create');
    
    Route::post('/nuevo_registro', [EventsController::class, 'store'])->name('registers.store');
    Route::get('/hidden/add-news', [NewsController::class, 'create'])->name('news.create');
    Route::post('/hidden/add-news', [NewsController::class, 'store'])->name('news.store');
});


// Route::get('/login')->name('auth.login');
