<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite ('resources/css/app.css')
    @yield('title')

</head>

<body class="h-screen">
    <header class="bg-gradient-to-t from-gray-200 to-white py-4 drop-shadow">
        <div class="w-2/3 m-auto">
            <nav class="flex justify-center gap-5 font-sans text-gray-600 font-semibold text-md">
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('welcome.index') }}">Home</a>
                </ul>
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('about.index') }}">About</a>
                </ul>
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('post.index') }}">Blog</a>
                </ul>
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('contact.index') }}">Contacts</a>
                </ul>
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('device.index') }}">Devices</a>
                </ul>
                <ul class="">
                    <a class="transition-all ease-in delay-150 hover:text-gray-700"
                        href="{{ route('news.index') }}">News</a>
                </ul>
            </nav>
        </div>
    </header>

    <div class="w-2/3 h-full m-auto">
        @yield('content')
    </div>
</body>

</html>
