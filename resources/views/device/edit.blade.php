@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Edit: {{ $device->brand }} {{ $device->model }}</title>
@endsection

{{-- content --}}
@section('content')
    <div class="h-full bg-gray-100 py-4 px-20">
        <div class="mb-4">
            <h3 class="font-bold text-lg">
                Change something
            </h3>
        </div>
        <form action="{{ route('device.update', $device->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="type">Type</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Type (laptop, phone, ect...)" name="type" value="{{ $device->type }}">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="brand">Brand</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Brand (Nokia, Motorolla, ect...)" name="brand" value="{{ $device->brand }}">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="model">Model</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Model..." name="model" value="{{ $device->model }}">
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="description">Description</label>
                </div>
                <div class="">
                    <textarea class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " name="description" rows="3" placeholder="Description here...">{{ $device->description }}</textarea>
                </div>
            </div>
            <div class="my-2">
                <div class="mb-2">
                    <label class="text-lg font-semibold" for="image">Image</label>
                </div>
                <div class="">
                    <input class="w-full rounded outline-gray-300 outline-1 shadow px-4 py-2 " type="text"
                        placeholder="Image link..." name="image" value="{{ $device->image }}">
                </div>
            </div>

            <div class="my-4">
                <button class="btn">Save changes</button>
            </div>
        </form>
        <div class="my-4">
            <a class="btn" href="{{ route('device.show', $device->id) }}">Cancel</a>
        </div>
    </div>
@endsection
