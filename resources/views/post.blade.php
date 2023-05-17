@extends('layouts.plantilla')
@section('title', "$post->title")
@section('content')
    <figure class="p-4">
        <img src="{{ $post->url_image }}" alt="Foto de la mascota" class="md:w-auto w-72 md:max-w-md h-44 min-h-full sm:h-48 md:h-52 rounded-md mx-auto">
    </figure>
    <div class="w-4/5 mx-auto">
        <h2 class="font-bold text-xl text-neutral-900 text-start mb-4">{{ $post->title }}</h2>
        <p class="text-base font-normal text-stone-800 mb-4">
            {{ $post->body }}
            <br>
            @if ($post->type_publication == 'Mascota perdida')
                <em>Perdido en:</em> {{ $pet->location }}
            @endif
        </p>
        @if ($pet != null && $pet->name != null)
            <p class="text-base font-normal text-stone-800 mb-4">Nombre: {{ $pet->name }}</p>
        @endif
        @if ($pet != null && $pet->species != null)
            <p class="text-base font-normal text-stone-800 mb-4">{{ $pet->species }}: {{ $pet->race }}</p>
        @endif
        @if ($pet != null && $pet->race != null && $pet->species == null)
            <p class="text-base font-normal text-stone-800 mb-4">Raza: {{ $pet->race }}</p>
        @endif
        <p class="text-xs font-normal text-stone-800 mb-4">Fecha de publicación: {{ $post->created_at->format('d/m/Y') }}</p>
        <p class="text-base font-bold text-stone-800 mb-4">Categoria: {{ $post->type_publication }}</p>
        <p class="text-sm font-light text-gray-400 mb-4"><i>Autor: {{ $post->user->name }}</i></p>
        <a href="{{ route('report.create', $post->id) }}" class="mb-4 block text-red-700 hover:cursor-pointer hover:underline focus:underline">Reportar</a>
        <div class="mx-auto pb-4 flex justify-center">
            <a href="{{ route('post.index') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
            <form action="{{ route('post.edit', $post) }}" method="GET">
                @csrf
                <x-primary-button class="ml-4">
                    {{__('Editar')}}
                </x-primary-button>
            </form>
        </div>
    </div>
@endsection
