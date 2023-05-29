<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto">
    <x-header id="header" />
        <main id="main" class="bg-slate-100 pt-4">
            @yield('content')
        </main>
    <x-footer />
</body>
</html>
