<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Blog Web | {{ $page }}</title>
</head>
<body>
    <div class="w-screen h-fit p-3 bg-red-700 flex text-white justify-start items-center">
        <h1 class="text-lg">Laravel Blogs</h1>
        <ul class="flex gap-x-4 list-none ml-9">
            <li class="{{ $page === "Home" ? "font-normal" : "font-light" }}"><a href="/">Home</a></li>
            <li class="{{ $page === "About" ? "font-normal" : "font-light" }}"><a href="/about">About</a></li>
            <li class="{{ $page === "Blog" ? "font-normal" : "font-light" }}"><a href="/blog">Posts</a></li>
        </ul>
    </div>
    <div class="m-7">
        @yield('content')
    </div>
</body>
</html>