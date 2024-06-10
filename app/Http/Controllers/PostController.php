<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Validation\Rules\Can;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => [],
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);

        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $someArr = [
            'content' => 'very new content from create controller',
            'image' => 'image12',
            'likes' => 111,
            'is_published' => 1
        ];

        $post = Post::firstOrCreate([
            'title' => 'very new foreach title'
        ], $someArr);
        dump($post->content);
    }

    public function updateOrCreate()
    {
        $someArr = [
            'content' => 'new content from update or create',
            'image' => 'image228',
            'likes' => 228,
            'is_published' => 1
        ];

        $post = Post::updateOrCreate([
            'title' => 'update or create'
        ], $someArr);

        dump($post->content);
    }
}
