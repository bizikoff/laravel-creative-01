@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Posts</title>
@endsection

{{-- content --}}
@section('content')
    <div class="bg-gray-100 h-full">
        <div class="pt-4 px-4 mb-2 ">
            <a class="btn" href="{{ route('post.create') }}">Add new post</a>
        </div>
        <div class="mx-4 py-4 text-md font-semibold">
            @foreach ($posts as $post)
                <a class="hover:text-gray-400" href="{{ route('post.show', $post->id) }}">
                    <div>{{ $post->id }}. {{ $post->title }}</div>
                </a>
            @endforeach
        </div>

        <div>
            {{ $posts->withQueryString()->links('pagination::tailwind') }}
        </div>


    </div>
@endsection
