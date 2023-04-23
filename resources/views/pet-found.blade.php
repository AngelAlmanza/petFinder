<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascota Encontrada</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto">
    <x-header></x-header>
    <main class="bg-slate-100">
        <h1 class="text-center text-neutral-900 text-xl font-bold">¿Encontraste una mascota?</h1>
        <h2 class="text-center mt-4 text-neutral-900 text-xl">Ayuda a devolverla</h2>
        <div class="p-4">
            <form action="" class="max-w-xl mx-auto my-4 p-4 bg-slate-50 rounded-lg shadow-sm">
                <x-input-image />
                <x-input-label for="name" class="mt-4 mb-2" :value="__('Nombre')" />
                <x-text-input id="name" class="w-full" type="text" name="name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <x-input-label for="breed" class="mt-4 mb-2" :value="__('Raza')" />
                <x-text-input id="breed" class="w-full" type="text" name="breed" required autofocus />
                <x-input-error :messages="$errors->get('breed')" class="mt-2" />
                <x-input-text-area />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <div class="mx-auto mt-4 w-full flex justify-evenly">
                    <x-primary-button class="bg-red-700">
                        <a href="{{ route('start') }}" class="text-slate-100">Cancelar</a>
                    </x-primary-button>
                    <x-primary-button>
                        {{ __('Publicar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </main>
    <x-footer />
</body>
</html>
