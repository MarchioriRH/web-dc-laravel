<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // O puedes usar paginate para paginación
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }
}
