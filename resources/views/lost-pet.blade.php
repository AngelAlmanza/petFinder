<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perdí mi mascota</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto">
    <x-header />
    <main class="bg-slate-100 pb-4">
        <h1 class="text-center pt-4 text-neutral-900 text-xl font-bold">¿Perdiste tu mascota?</h1>
        <h2 class="text-center mt-4 text-neutral-900 text-xl">Pide ayuda</h2>
        <div class="p-4">
            <form action="" class="max-w-xl mx-auto mt-4 p-4 bg-slate-50 rounded-lg shadow-sm" method="POST">
                @csrf
                <x-input-image />
                <x-input-label for="name" class="mt-4 mb-2" :value="__('Nombre')" />
                <x-text-input id="name" class="w-full" type="text" name="name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <x-input-label for="breed" class="mt-4 mb-2" :value="__('Raza')" />
                <x-text-input id="breed" class="w-full" type="text" name="breed" required autofocus />
                <x-input-error :messages="$errors->get('breed')" class="mt-2" />
                <x-input-label for="petName" class="mt-4 mb-2" :value="__('Nombre de la mascota')" />
                <x-text-input id="petName" class="w-full" type="text" name="petName" required autofocus />
                <x-input-error :messages="$errors->get('petName')" class="mt-2" />
                <x-input-label for="placeLost" class="mt-4 mb-2" :value="__('Lugar donde se perdio')" />
                <x-text-input id="placeLost" class="w-full" type="text" name="placeLost" required autofocus />
                <x-input-error :messages="$errors->get('placeLost')" class="mt-2" />
                <x-input-text-area />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <div class="mx-auto mt-4 w-full flex justify-evenly">
                    <a href="{{ route('home') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Cancelar</a>
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
