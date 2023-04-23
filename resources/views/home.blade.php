<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto">
    <x-header />
    <main class="bg-slate-100">
        <h1 class="text-left pt-4 pl-4 text-neutral-900 text-xl font-bold">Home</h1>
        <form class="w-full h-full p-4 max-w-xl mx-auto" action="" method="POST">
            @csrf
            <label for="post" class="w-full h-30 bg-slate-50 shadow-sm rounded-lg flex items-end flex-col p-4">
                <input id="post" class="block w-full bg-slate-50 outline-none border-none placehoder:text-sm placeholder:font-ligth placeholder:text-gray-400" type="text" placeholder="¿Qué pasa?">
                <x-primary-button class="w-24 mt-4 text-center flex justify-center">
                    {{ __('Publicar') }}
                </x-primary-button>
            </label>
        </form>
        <section class="grid auto-rows-auto gap-4 place-items-center md:grid-cols-2 pb-4 md:px-4">
            <x-post-card />
            <x-post-card />
            <x-post-card />
            <x-post-card />
            <x-post-card />
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </section>
    </main>
    <x-footer />
</body>
</html>
