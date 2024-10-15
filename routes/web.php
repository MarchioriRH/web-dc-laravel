<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdviceController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/home', [AdviceController::class, 'index']);
