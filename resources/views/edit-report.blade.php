@extends('layouts.plantilla')
@section('title', 'Editar Post')
@section('content')
    <h1 class="text-center text-neutral-900 text-xl font-bold">Editar reporte</h1>
    <div class="p-4">
        <form action="{{ route('report.update', $report) }}" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto mt-4 p-4 bg-slate-50 rounded-lg shadow-sm">
            @csrf
            @method('put')
            <x-input-label for="reason" class="mt-4 mb-2" :value="__('Motivo del reporte')" />
            <x-text-input id="reason" class="w-full" type="text" name="reason" value="{{ old('reason', $report->reason) }}" required autofocus />
            <x-input-error :messages="$errors->get('reason')" class="mt-2" />
            <div>
                <x-input-label for="description" class="mt-4 mb-4" :value="__('Descripcion')"/>
                <textarea name="description" id="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" required>{{ old('description', $report->body) }}</textarea>
            </div>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <p class="text-base font-normal text-neutral-900 mb-4">La foto es opcional pero porfavor si tienes una prueba para enviarnos seria de mucha ayuda</p>
            <x-input-image />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <div class="mx-auto mt-4 pb-4 w-full flex justify-evenly">
                <a href="{{ route('post.index') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
                <x-primary-button>
                    {{ __('Actualizar reporte') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
