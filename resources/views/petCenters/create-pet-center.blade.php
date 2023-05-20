<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Veterinaria</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto h-screen">
    <main class="bg-slate-100 p-8 px-28 w-full flex flex-col justify-center">
        <h1 class="text-left mb-4 text-neutral-900 text-xl font-bold">Registra tu Veterinaria</h1>
        <em class="text-base text-red-600 font-bold">
            Recuerda, esto solo es una solicitud de registro, revisaremos tus y verificaremos tus datos,
            cuando sea aprobada tu registro se completara y tu información sera mostrada en nuestra página en la siguiente dirección:
            <a href="{{ route('petCenter.index') }}">Veterinarias</a>
        </em>
        <section class="p-4">
            <form action="{{ route('petCenter.store') }}" method="POST" class="max-w-xl mx-auto my-4 p-4 bg-slate-50 rounded-lg shadow-sm">
                @csrf
                <x-input-label for="name" class="mt-4 mb-2" :value="__('Nombre de la Veterinaria')" />
                <x-text-input id="name" class="w-full" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre de la veterinaria" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <x-input-label for="location" class="mt-4 mb-2" :value="__('Ubicación')" />
                <x-text-input id="location" class="w-full" type="text" name="location" value="{{ old('location') }}" required autofocus placeholder="Ubicación de la veterinaria" />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
                <x-input-label for="schedule" class="mt-4 mb-2" :value="__('Horario (HH:MM - HH:MM)')" />
                <x-text-input id="schedule" class="w-full mb-4" type="text" name="schedule" value="{{ old('schedule') }}" required autofocus pattern="^(?:[01]\d|2[0-3]):(?:[0-5]\d)\s-\s(?:[01]\d|2[0-3]):(?:[0-5]\d)$" title="Formato de tiempo inválido. Utilice HH:MM - HH:MM" placeholder="Horario de la veterinaria HH:MM - HH:MM" />
                <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
                <x-input-label for="email" class="mt-4 mb-2" :value="__('Correo electrónico')" />
                <x-text-input id="email" class="w-full mb-4" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="user@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <x-input-label for="phone" class="mt-4 mb-2" :value="__('Número de telefono')" />
                <x-text-input id="phone" class="w-full mb-4" type="tel" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Num. Tel." />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                <input type="checkbox" name="type" id="type" class="form-checkbox inline-block rounded-sm bg-slate-50 text-emerald-400 focus:ring-emerald-700">
                <x-input-label for="type" class="mt-4 mb-2 inline-block text-stone-800" :value="__('Aceptamos animales exóticos')" />
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
                <div class="mx-auto mt-4 pb-4 w-full flex justify-evenly">
                    <a href="/" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
                    <x-primary-button>
                        {{ __('Enviar Registro') }}
                    </x-primary-button>
                </div>
            </form>
        </section>
    </main>
    <x-footer />
</body>
</html>
