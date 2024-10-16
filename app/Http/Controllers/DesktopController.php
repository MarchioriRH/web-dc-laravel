<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DesktopController extends Controller
{
    public function index()
    {
        $noticeJson = File::get(resource_path('data/notice.json'));
        $notices = json_decode($noticeJson, true);
        $adviceJson = File::get(resource_path('data/advice.json'));
        $advices = json_decode($adviceJson, true);
        $adviceCarouselJson = File::get(resource_path('data/adviceCarousel.json'));
        $carouselImages = json_decode($adviceCarouselJson, true);
        //dd($notices);
        return view('desktop', [
            'notices' => $notices,
            'advices' => $advices,
            'carouselImages' => $carouselImages
        ]);
    }
}
