<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-mono mx-auto flex w-full h-screen">
    @role('admin')
        <x-aside-dashboard></x-aside-dashboard>
        <main class="bg-slate-100 py-4 w-8/12 overflow-auto">
            @yield('content')
        </main>
        @yield('script')
    @else
        <p class="text-red-900 text-5xl font-bold">QUE PUTAS VRGS HACES AQUI</p>
    @endrole
</body>
</html>
