<!doctype html>
<html lang="{{ \App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body>
<main>
    <div class="w-full h-screen main-background bg-cover bg-center fixed">
        <div class="w-full h-full flex flex-col justify-center items-center backdrop-blur-lg"></div>
    </div>
    @yield('content')
</main>
@vite('resources/js/app.js')
</body>
</html>
