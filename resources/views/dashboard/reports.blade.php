@extends('layouts.dashboard')
@section('title', 'Reportes')
@section('content')
    <h1 class="w-full text-center font-bold text-4xl">Reportes</h1>
    <section class="p-4">
        @forelse ($reports as $report)
            <article class="w-full h-12 my-4 bg-slate-50 shadow-md rounded-lg hover:scale-105 transition-transform flex items-center justify-between px-4">
                <p class="w-3/4">{{ $report->reason }}</p>
                <button>
                    <a href="{{ route('report.show', $report) }}" class="bg-emerald-400 rounded-lg text-center uppercase px-4 py-1 hover:bg-emerald-600">Ver más</a>
                </button>
                <a href="{{ route('report.edit', $report) }}" class="hover:bg-gray-300 h-6 w-6 p-4 flex justify-center items-center rounded-full text-base">
                    <button><i class="fa-solid fa-pen-to-square"></i></button>
                </a>
            </article>
        @empty
            <p class="text-3xl font-bold">No hay reportes pendientes</p>
        @endforelse
    </section>
@endsection
