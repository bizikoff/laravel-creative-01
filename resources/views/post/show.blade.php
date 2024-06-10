@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Posts</title>
@endsection

{{-- content --}}
@section('content')
    <div class="bg-gray-100 h-full">
        <div class="mx-4">
            <div>{{ $post->id }}. {{ $post->title }}</div>
            <div>{{ $post->content }}</div>
        </div>
        <div class="flex items-center">
            <div class="mx-4 my-4">
                <a class="btn" href="{{ route('post.edit', $post->id) }}">Edit post</a>
            </div>
            <div>
                <form action="{{ route('post.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <div class="mx-4 my-4">
                        <button
                            class="btn-dng">Delete</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mx-4 my-2">
            <a class="hover:text-gray-500" href="{{ route('post.index') }}"><-Back </a>
        </div>
    </div>
@endsection
