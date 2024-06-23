<div class="bg-gray-800 h-screen w-64">
    <div class="text-white text-center py-4 text-xl">Admin Panel</div>
    <nav class="mt-4">
        <a href="{{ route('welcome.index') }}" class="block py-2.5 px-4 text-white hover:bg-gray-700 uppercase">Home Page</a>
        <a href="{{ route('admin.post.index') }}" class="block py-2.5 px-4 text-white hover:bg-gray-700 uppercase">
            Posts
            <span class="shrink-0 rounded-full bg-blue-500 px-3 font-mono text-md font-medium tracking-tight text-white">{{ $posts->total() }}</span>
        </a>
    </nav>
</div>