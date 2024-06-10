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
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="title">Title</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Title..." name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <p class="my-2 text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="content">Content</label>
                </div>
                <div class="">
                    <textarea class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="content" id=""
                        rows="5" placeholder="Content here...">{{ old('content') }}</textarea>
                </div>
                @error('content')
                    <p class="my-2 text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="image">Image</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Image link..." name="image" value="{{ old('image') }}">
                </div>
                @error('image')
                    <p class="my-2 text-red-500">{{ $message }}</p>
                @enderror
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
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
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
                            id="category_id">
                            @foreach ($categories as $category)
                                <option
                                {{ old('category_id') == $category->id ? ' selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
            </div>

            <div>
                <button class="btn">Create</button>
            </div>
        </form>
    </div>
@endsection
