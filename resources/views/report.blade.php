@extends('layouts.plantilla')
@section('title', 'Reportar')
@section('content')
    <section class="w-full p-4">
        <h1 class="font-bold text-xl text-neutral-900 text-start mb-4">Motivo del reporte: {{ $report->reason }}</h1>
        <figure>
            @if ($report->url_image != '')
                <h2 class="font-bold text-xl text-neutral-900 text-start mb-4">Evidencia del reporte</h2>
                <img src="{{ $report->url_image }}" alt="{{ $report->reason }}" class="md:w-auto w-72 md:max-w-md h-44 min-h-full sm:h-48 md:h-52 rounded-md mx-auto">
            @else
                <p class="text-base font-normal text-stone-800 mb-4">El usuario no ha insertado ninguna foto o evidencia</p>
            @endif
        </figure>
        <h3 class="font-bold text-3xl text-neutral-900 text-start my-4">Reporte:</h3>
        <p class="text-base font-normal text-stone-800 mb-4">{{ $report->body }}</p>
        <br>
        <p class="text-base font-normal text-stone-800 mb-4">Reporte realizado por: <i class="text-sm font-light text-gray-400">{{ $report->user->name }}</i></p>
        <form action="{{ route('report.destroy', $report) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="text-base font-normal text-red-800 mb-4">Eliminar reporte</button>
        </form>
        <div class="mx-auto pb-4 flex justify-center">
            <a href="{{ route('post.index') }}" class="text-slate-100 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Volver</a>
            <form action="{{ route('report.edit', $report) }}" method="GET">
                @csrf
                <x-primary-button class="ml-4">
                    {{__('Editar')}}
                </x-primary-button>
            </form>
        </div>
    </section>
@endsection
