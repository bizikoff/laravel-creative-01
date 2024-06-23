@extends('layouts.admin')

@section('title')
    <title>Admin</title>
@endsection

@section('content')
<header class="bg-white shadow rounded-lg p-4 mb-6">
    <h2 class="text-xl font-semibold">Posts</h2>
</header>
<div class="mt-4">
    <div class="pt-4 px-4 mb-2 ">
        <a class="btn" href="{{ route('post.create') }}">Add new post</a>
    </div>
    <div class="mx-4 py-4 text-md font-semibold">
        @foreach ($posts as $post)
            <a class="hover:text-gray-400" href="{{ route('post.show', $post->id) }}">
                <div class="my-1">{{ $post->id }}. {{ $post->title }}</div>
            </a>
        @endforeach
    </div>

    <div>
        {{ $posts->withQueryString()->links('pagination::tailwind') }}
    </div>
</div>

@endsection