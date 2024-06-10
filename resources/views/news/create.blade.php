@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Add news</title>
@endsection

{{-- content --}}
@section('content')
    <div class="h-full bg-gray-100 py-4 px-20">
        <div class="mb-4">
            <h3 class="font-bold text-lg">
                Add news
            </h3>
        </div>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="title">Title</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Title..." name="title">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="username">Username</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Username..." name="username">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="content">Content</label>
                </div>
                <div class="">
                    <textarea class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="content" id=""
                        rows="5" placeholder="Content here..."></textarea>
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="image">Image</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Image link..." name="image">
                </div>
            </div>

            <div>
                <button class="btn">Create</button>
            </div>
        </form>
    </div>
@endsection
