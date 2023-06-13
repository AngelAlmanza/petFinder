@extends('layouts.plantilla')
@if ($action == 'lost-pet')
@section('title', 'Perdi mi mascota')
@elseif ($action == 'give-up-for-adoption')
@section('title', 'Dar en adopción')
@elseif($action == 'pet-found')
@section('title', 'Mascota encontrada')
@else
@section('title', 'Adoptar mascota')
@endif
@section('content')
    <h1 class="text-center text-neutral-900 text-xl font-bold">{{ $h1 }}</h1>
    <h2 class="text-center mt-4 text-neutral-900 text-xl">{{ $h2 }}</h2>
    <div class="p-4">
        <form id="form-post" action="{{ route('post.store') }}" class="max-w-xl mx-auto my-4 p-4 bg-slate-50 rounded-lg shadow-sm" method="POST" enctype="multipart/form-data">
            @csrf
            <x-input-image />
            <span class="text-xs text-stone-700">La imágen no debe tener un peso superior a 2 Mb</span>
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <x-text-input id="url" class="w-full hidden" type="text" name="url" />
            @if ($action == 'give-up-for-adoption')
                <x-input-label for="title" class="mt-4 mb-2" :value="__('Título de publicación')" />
                <x-text-input id="title" class="w-full" type="text" name="title" value="{{ old('title') }}" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            @elseif ($action == 'lost-pet')
                    <x-input-label for="animal" class="mt-4 mb-2" :value="__('Animal')" />
                    <x-text-input id="animal" class="w-full" type="text" name="animal" value="{{ old('animal') }}" required autofocus />
                    <x-input-error :messages="$errors->get('animal')" class="mt-2" />
            @else
                <x-input-label for="name" class="mt-4 mb-2" :value="__('Título de la publicación')" />
                <x-text-input id="name" class="w-full" type="text" name="name" value="{{ old('name') }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            @endif
            <x-input-label for="breed" class="mt-4 mb-2" :value="__('Raza')" />
            <x-text-input id="breed" class="w-full" type="text" name="breed" value="{{ old('breed') }}" required autofocus />
            <x-input-error :messages="$errors->get('breed')" class="mt-2" />
            @if ($action == 'lost-pet')
                <x-input-label for="petName" class="mt-4 mb-2" :value="__('Nombre de la mascota')" />
                <x-text-input id="petName" class="w-full" type="text" name="petName" value="{{ old('petName') }}" required autofocus />
                <x-input-error :messages="$errors->get('petName')" class="mt-2" />
                <x-input-label for="placeLost" class="mt-4 mb-2" :value="__('Lugar donde se perdió')" />
                <x-text-input id="placeLost" class="w-full" type="text" name="placeLost" value="{{ old('placeLost') }}" required autofocus />
                <x-input-error :messages="$errors->get('placeLost')" class="mt-2" />
            @elseif ($action == 'give-up-for-adoption')
                <x-input-label for="placeAdopt" class="mt-4 mb-2" :value="__('Ubicación actual')" />
                <x-text-input id="placeAdopt" class="w-full" type="text" name="placeAdopt" value="{{ old('placeAdopt') }}" required autofocus />
                <x-input-error :messages="$errors->get('placeAdopt')" class="mt-2" />
            @endif
            <x-input-text-area />
            <span class="text-xs text-stone-700">La descripción debe contener al menos 50 carácteres</span>
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
