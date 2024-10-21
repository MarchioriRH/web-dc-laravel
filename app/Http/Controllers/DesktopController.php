<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\News;

class DesktopController extends Controller
{
    public function index()
    {
        $news = News::all(); // O puedes usar paginate para paginación
        //return view('news.index', compact('news'));
        $adviceJson = File::get(resource_path('data/advice.json'));
        $advices = json_decode($adviceJson, true);
        $adviceCarouselJson = File::get(resource_path('data/adviceCarousel.json'));
        $carouselImages = json_decode($adviceCarouselJson, true);
        //dd($notices);
        return view('desktop', [
            'notices' => $news,
            'advices' => $advices,
            'carouselImages' => $carouselImages
        ]);
    }
}
