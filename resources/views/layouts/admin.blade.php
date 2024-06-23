<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite ('resources/css/app.css')
    @yield('title')

</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white p-4">
            <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('admin.post.index') }}" class="p-2 hover:bg-gray-700 rounded flex items-center justify-between">
                            <span>Posts</span>
                            <span class="bg-teal-700 font-bold text-white text-center py-1 px-2 text-xs rounded">
                                {{ $posts->total() }}
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block p-2 hover:bg-gray-700 rounded">Users</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">

            @yield('content')

        </main>
    </div>
</body>

</html>
