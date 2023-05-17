@extends('layouts.plantilla')
@section('title', 'Editar Publicacion')
@section('content')
    <section>
        <h1 class="text-center text-neutral-900 text-xl font-bold">{{ $post->title }}</h1>
        <div class="p-4">
            <form action="{{ route('post.update', $post) }}" method="POST" class="max-w-xl mx-auto my-4 p-4 bg-slate-50 rounded-lg shadow-sm">
                @csrf
                @method('PUT')
                @if ($post->type_publication == 'Adopción')
                    <x-input-label for="title" class="mt-4 mb-2" :value="__('Titulo de publicación')" />
                    <x-text-input id="title" class="w-full" type="text" name="title" value="{{ old('title', $post->title) }}" required autofocus />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <x-input-label for="placeAdopt" class="mt-4 mb-2" :value="__('Lugar donde se encuentra')" />
                    <x-text-input id="placeAdopt" class="w-full" type="text" name="placeAdopt" value="{{ old('placeAdopt', $pet->location) }}" required autofocus />
                    <x-input-error :messages="$errors->get('placeAdopt')" class="mt-2" />
                @elseif ($post->type_publication == 'Mascota perdida')
                    <x-input-label for="animal" class="mt-4 mb-2" :value="__('Animal')" />
                    <x-text-input id="animal" class="w-full" type="text" name="animal" value="{{ old('animal', $pet->species) }}" required autofocus />
                    <x-input-error :messages="$errors->get('animal')" class="mt-2" />
                    <x-input-label for="petName" class="mt-4 mb-2" :value="__('Nombre de la mascota')" />
                    <x-text-input id="petName" class="w-full" type="text" name="petName" value="{{ old('petName', $pet->name) }}" required autofocus />
                    <x-input-error :messages="$errors->get('petName')" class="mt-2" />
                    <x-input-label for="placeLost" class="mt-4 mb-2" :value="__('Lugar donde se perdio')" />
                    <x-text-input id="placeLost" class="w-full" type="text" name="placeLost" value="{{ old('placeLost', $pet->location) }}" required autofocus />
                    <x-input-error :messages="$errors->get('placeLost')" class="mt-2" />
                @else
                    <x-input-label for="name" class="mt-4 mb-2" :value="__('Titulo de la publicacion')" />
                    <x-text-input id="name" class="w-full" type="text" name="name" value="{{ old('name', $post->title) }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                @endif
                <x-input-label for="breed" class="mt-4 mb-2" :value="__('Raza')" />
                <x-text-input id="breed" class="w-full" type="text" name="breed" value="{{ old('breed', $pet->race) }}" required autofocus />
                <x-input-error :messages="$errors->get('breed')" class="mt-2" />
                <div>
                    <x-input-label for="description" class="mt-4 mb-4" :value="__('Descripcion')"/>
                    <textarea name="description" id="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" required>{{ old('description', $post->body) }}</textarea>
                </div>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <div class="mx-auto my-4 flex justify-around">
                    <a href="{{ route('post.index') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
                    <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                </div>
            </form>
        </div>
    </section>
@endsection
