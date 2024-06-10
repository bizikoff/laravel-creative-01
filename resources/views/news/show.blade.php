@extends('layouts.head')

@section('title')
    <title>News: {{ $news->title }}</title>
@endsection

@section('content')
    <div class="h-full bg-gray-100 p-4">
        <div>
            <h3 class="font-semibold text-center text-xl text-gray-700 mb-4">
                {{ $news->title }}
            </h3>
            <p class="mb-4">
                {{ $news->content }}
            </p>
            <div class="flex justify-between">
                <p class="font-medium font-mono">
                    {{ $news->created_at }}
                </p>
                <p class="font-medium font-mono">
                    Created by: {{ $news->username }}
                </p>
            </div>
        </div>
        <div class="my-4 flex justify-around items-center">
            <div class="my-4">
                <a class="btn" href="{{ route('news.index') }}">Back to all news</a>
            </div>
            <div class="my-4">
                <a class="btn" href="{{ route('news.edit', $news->id) }}">Edit post</a>
            </div>
            <div class="my-4">
                <form action="{{ route('news.destroy', $news->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn-dng">Delete</button>
                </form>
            </div>

        </div>
    </div>
@endsection
