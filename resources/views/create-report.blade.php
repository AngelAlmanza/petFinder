@extends('layouts.plantilla')
@section('title', 'Reportar')
@section('content')
    <section class="w-11/12 max-w-3xl mx-auto px-4">
        <h1 class="text-left mb-4 text-neutral-900 text-xl font-bold">Reportar</h1>
        <h2 class="font-bold text-xl text-neutral-900 text-start mb-4">Publicación que deseas reportar: {{ $post->title }}</h2>
        <p class="text-sm font-bold text-gray-400 mb-4">Autor: <i>{{ $post->user->name }}</i></p>
        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="postID" class="hidden" value="{{ $post->id }}">
            <x-input-label for="reason" class="mt-4 mb-2" :value="__('Motivo del reporte')" />
            <x-text-input id="reason" class="w-full" type="text" name="reason" value="{{ old('reason') }}" required autofocus />
            <x-input-error :messages="$errors->get('reason')" class="mt-2" />
            <x-input-text-area />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <p class="text-base font-normal text-neutral-900 mb-4">La foto es opcional pero por favor si tienes una prueba para enviarnos seria de mucha ayuda</p>
            <x-input-image />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <div class="mx-auto mt-4 pb-4 w-full flex justify-evenly">
                <a href="{{ route('post.index') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
                <x-primary-button>
                    {{ __('Enviar reporte') }}
                </x-primary-button>
            </div>
        </form>
    </section>
@endsection
