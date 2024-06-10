@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Posts</title>
@endsection

{{-- content --}}
@section('content')
    <div class="h-full bg-gray-100 py-4 px-20">
        <div class="mb-4">
            <h3 class="font-bold text-lg">
                Create new post
            </h3>
        </div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="title">Title</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Title..." name="title" value="{{ $post->title }}">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="content">Content</label>
                </div>
                <div class="">
                    <textarea class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="content" id=""
                        rows="5" placeholder="Content here...">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="image">Image</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Image link..." name="image" value="{{ $post->image }}">
                </div>
            </div>
            <div class="flex justify-between gap-4">
                <div class="my-4 w-full">
                    <div class="mb-2">
                        <label class="text-lg font-semibold" for="category">Tags</label>
                    </div>
                    <div>
                        <select multiple class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="tags[]"
                            id="tags">
                            @foreach ($tags as $tag)
                                <option
                                    @foreach ($post->tags as $postTag)
                                    {{ $tag->id == $postTag->id ? ' selected' : '' }} 
                                    @endforeach
                                    value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="my-4 w-full">
                    <div class="mb-2">
                        <label class="text-lg font-semibold" for="category">Category</label>
                    </div>
                    <div>
                        <select class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="category_id"
                            id="category">
                            @foreach ($categories as $category)
                                <option {{ $category->id == $post->category_id ? ' selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn">Update</button>
            </div>
        </form>
    </div>
@endsection
