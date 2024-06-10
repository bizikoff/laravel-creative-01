<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'username' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        News::create($data);

        return redirect()->route('news.index');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(News $news) {
        $data = request()->validate([
            'title' => 'string',
            'username' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        $news->update($data);

        return redirect()->route('news.show', $news->id);

    }

    public function destroy(News $news) {
        $news->delete();

        return redirect()->route('news.index');
    }
}
