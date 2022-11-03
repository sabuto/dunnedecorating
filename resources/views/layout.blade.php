<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Dunne Decorating - @yield('title')</title>
</head>
<body class="dark:bg-gray-800">
<main class="font-mono">
    @include('Layouts.header')
    <div class="flex relative z-20 items-center">
        @yield('content')
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@yield('scripts')
</body>
</html>
