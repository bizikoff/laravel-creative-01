@extends('layouts.head')

@section('title')
    <title>Fresh News</title>
@endsection

@section('content')
    <div class="h-full bg-gray-100 p-4">
        <div>
            @foreach ($news as $n)
                <div class="w-full bg-white rounded shadow py-2 px-4 mb-4 flex justify-between items-center">
                    <h3 class="text-gray-700 font-semibold text-lg">
                        <a class="p-1 hover:text-gray-500" href="{{ route('news.show', $n->id) }}">
                            {{ $n->id }}. {{ $n->title }}
                        </a>
                    </h3>
                    <p class="text-sm text-gray-600 font-medium font-mono">
                        created by: {{ $n->username }}
                    </p>
                </div>
            @endforeach
        </div>
        <div>
            <a class="btn my-4" href="{{ route('news.create') }}">Add news</a>
        </div>
    </div>
@endsection
