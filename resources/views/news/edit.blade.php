@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Edit news: {{ $news->title }}</title>
@endsection

{{-- content --}}
@section('content')
    <div class="h-full bg-gray-100 py-4 px-20">
        <div class="mb-4">
            <h3 class="font-bold text-lg">
                Edit news
            </h3>
        </div>
        <form action="{{ route('news.update', $news->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="title">Title</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Title..." name="title" value="{{ $news->title }}">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="content">Content</label>
                </div>
                <div class="">
                    <textarea class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="content" id=""
                        rows="5" placeholder="Content here...">{{ $news->content }}</textarea>
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="image">Image</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Image link..." name="image" value="{{ $news->image }}">
                </div>
            </div>

            <div class="flex justify-between items-center">
                <div>
                    <button class="btn">Update</button>
                </div>
                <div class="my-4">
                    <a class="btn" href="{{ route('news.show', $news->id) }}">Cancel</a>
                </div>

            </div>
        </form>
    </div>
@endsection
