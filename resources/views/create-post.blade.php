@extends('layouts.plantilla')
@if ($action == 'lost-pet')
    @section('title', 'Perdi mi mascota')
@elseif ($action == 'give-up-for-adoption')
    @section('title', 'Dar en adopción')
@else
    @section('title', 'Adoptar mascota')
@endif
@section('content')
    <h1 class="text-center text-neutral-900 text-xl font-bold">{{ $h1 }}</h1>
    <h2 class="text-center mt-4 text-neutral-900 text-xl">{{ $h2 }}</h2>
    <div class="p-4">
        <form action="{{ route('post.store') }}" class="max-w-xl mx-auto my-4 p-4 bg-slate-50 rounded-lg shadow-sm" method="POST">
            @csrf
            <x-input-image />
            @if ($action == 'give-up-for-adoption')
                <x-input-label for="title" class="mt-4 mb-2" :value="__('Titulo de publicación')" />
                <x-text-input id="title" class="w-full" type="text" name="title" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            @elseif ($action == 'lost-pet')
                    <x-input-label for="animal" class="mt-4 mb-2" :value="__('Animal')" />
                    <x-text-input id="animal" class="w-full" type="text" name="animal" required autofocus />
                    <x-input-error :messages="$errors->get('animal')" class="mt-2" />
            @else
                <x-input-label for="name" class="mt-4 mb-2" :value="__('Nombre')" />
                <x-text-input id="name" class="w-full" type="text" name="name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            @endif
            <x-input-label for="breed" class="mt-4 mb-2" :value="__('Raza')" />
            <x-text-input id="breed" class="w-full" type="text" name="breed" required autofocus />
            <x-input-error :messages="$errors->get('breed')" class="mt-2" />
            @if ($action == 'lost-pet')
                <x-input-label for="petName" class="mt-4 mb-2" :value="__('Nombre de la mascota')" />
                <x-text-input id="petName" class="w-full" type="text" name="petName" required autofocus />
                <x-input-error :messages="$errors->get('petName')" class="mt-2" />
                <x-input-label for="placeLost" class="mt-4 mb-2" :value="__('Lugar donde se perdio')" />
                <x-text-input id="placeLost" class="w-full" type="text" name="placeLost" required autofocus />
                <x-input-error :messages="$errors->get('placeLost')" class="mt-2" />
            @elseif ($action == 'give-up-for-adoption')
                <x-input-label for="placeAdopt" class="mt-4 mb-2" :value="__('Lugar donde se encuentra')" />
                <x-text-input id="placeAdopt" class="w-full" type="text" name="placeAdopt" required autofocus />
                <x-input-error :messages="$errors->get('placeAdopt')" class="mt-2" />
                <x-input-label for="count" class="mt-4 mb-2" :value="__('Cantidad de mascotas')" />
                <x-text-input id="count" class="w-full" type="number" name="count" required autofocus />
                <x-input-error :messages="$errors->get('count')" class="mt-2" />
            @endif
            <x-input-text-area />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <div class="mx-auto mt-4 w-full flex justify-evenly">
                <x-primary-button class="bg-red-700">
                    <a href="{{ route('post.index') }}" class="text-slate-100">Cancelar</a>
                </x-primary-button>
                <x-primary-button>
                    {{ __('Publicar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
