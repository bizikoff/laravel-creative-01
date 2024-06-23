@extends('layouts.head')


{{-- page name --}}
@section('title')
    <title>Devices</title>
@endsection

{{-- content --}}
@section('content')
    <div class="bg-gray-100 h-full">
        <h3 class="text-2xl font-semibold text-gray-700 py-4 ml-4">List of your devices</h3>
        <div class="mx-4 py-4 text-md font-semibold">
            <div class="grid grid-cols-4 gap-8">
                @foreach ($devices as $device)
                    <div class="col-span-1 flex-col bg-white rounded shadow-md hover:shadow-lg overflow-hidden">
                        <div class="">
                            <img class="h-36 object-cover block m-auto"
                                src="{{ $device->image }}"
                                alt="Photo of {{ $device->brand }} {{ $device->model }}">
                        </div>
                        <div class="text-center my-4">
                            <a class="py-1" href="{{ route('device.show', $device->id) }}">
                                <span class="text-gray-700 font-bold">
                                    {{ $device->brand }}
                                </span>
                                <span class="text-gray-500 font-semibold">
                                    {{ $device->model }}
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="m-4 ">
            <a class="btn" href="{{ route('device.create') }}">Add new device</a>
        </div>
    </div>
@endsection
