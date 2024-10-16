<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesktopController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/home', [DesktopController::class, 'index']);
