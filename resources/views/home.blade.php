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
        <h1 class="text-left mb-4 pt-4 pl-4 text-neutral-900 text-xl font-bold">Home</h1>
        <section class="grid auto-rows-auto gap-4 place-items-center md:grid-cols-2 pb-4 md:px-4">
            @foreach($posts as $post)
                <x-post-card title="{{ $post->title }}" body="{{ $post->body }}" id="{{ $post->id }}" />
            @endforeach
        </section>
    </main>
    <x-footer />
</body>
</html>
