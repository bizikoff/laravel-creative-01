@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>{{ $device->brand }} {{ $device->model }}</title>
@endsection

{{-- content --}}
@section('content')
    <div class="h-full m-auto bg-gray-100">
        <div class="flex flex-col items-center gap-4">
            <h3 class="text-lg font-medium py-4">
                {{ $device->type }} <span class="text-gray-700">{{ $device->brand }}</span> <span
                    class="text-gray-600 underline">{{ $device->model }}</span>
            </h3>
            <div class="shadow rounded-sm">
                <img class="h-60 block m-auto" src="{{ $device->image }}"
                    alt="photo of {{ $device->brand }} {{ $device->model }}">
            </div>
        </div>
        <div class="m-4">
            <h4 class="text-lg font-semibold text-gray-700">
                Description
            </h4>
            <p> * {{ $device->description }}</p>
            <div class="my-4">
                <a class="btn" href="{{ route('device.edit', $device->id) }}">Change</a>
            </div>
            {{-- delete item form --}}
            <form action="{{ route('device.destroy', $device->id) }}" method="POST">
                @csrf
                @method('delete')
                <div class="my-4">
                    <button class="btn-dng">Delete</button>
                </div>
            </form>
            {{-- end delete form --}}
            <div class="my-4">
                <a class="btn" href="{{ route('device.index') }}">Back to all</a>
            </div>
        </div>
    </div>
@endsection
