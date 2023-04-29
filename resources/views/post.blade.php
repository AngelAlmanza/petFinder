<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto min-h-screen">
    <x-header />
    <main class="bg-slate-100 p-4">
        <figure class="p-4">
            <div class="w-auto max-w-md h-44 min-h-full sm:h-48 md:h-52 text-center flex items-center justify-center bg-gray-400 rounded-md hover:cursor-pointer mx-auto"></div>
        </figure>
        <h2 class="font-bold text-xl text-neutral-900 text-start mb-4">{{ $post->title }}</h2>
        <p class="text-base font-normal text-stone-800 mb-4">{{ $post->body }}</p>
        <p class="text-xs font-normal text-stone-800 mb-4">Fecha de publicación: {{ $post->created_at->format('d/m/Y') }}</p>
        <p class="text-sm font-light text-gray-400 mb-4"><i>Autor: Filomeno Pancrasio</i></p>
        <a href="#" class="mb-4 block text-red-700 hover:cursor-pointer hover:underline focus:underline">Reportar</a>
        <div class="mx-auto flex justify-center">
            <a href="{{ route('home') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Cancelar</a>
            <form action="/chat" method="GET">
                @csrf
                <x-primary-button class="ml-4">
                    {{__('Chat')}}
                </x-primary-button>
            </form>
        </div>
    </main>
    <x-footer />
</body>
</html>
