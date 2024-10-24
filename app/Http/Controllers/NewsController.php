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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'image' => 'required|max:255',
            'content' => 'required',
        ]);


        News::create($validatedData);

        return redirect()->route('news.create')
            ->with('success', 'News created successfully.');
    }
}
