<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdviceController extends Controller
{
    public function index()
    {
        $json = File::get(resource_path('data/advice.json'));
        $advices = json_decode($json, true);
        dd($advices);
        return view('welcome', ['advices' => $advices]);
    }
}
