@extends('layouts.plantilla')
@section('title', $petCenter->name)
@section('content')
    <section class="w-full flex flex-col bg-slate-100 rounded-lg shadow-md p-4">
        <h2 class="text-2xl md:text-5xl font-normal text-neutral-900 mb-8 md:mb-16">{{ $petCenter->name }}</h2>
        <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4"><b>Ubicación:</b> {{ $petCenter->location }}</p>
        <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4"><b>Horario:</b> {{ $petCenter->schedule }}</p>
        <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4"><b>Correo electrónico:</b> {{ $petCenter->email }}</p>
        <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4"><b>Número de teléfono:</b> {{ $petCenter->phone }}</p>
        @if ($petCenter->type)
            <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4">Acepta animales exóticos</p>
        @else
            <p class="text-xl md:text-4xl font-normal text-stone-800 mb-4">No acepta animales exóticos</p>
        @endif
        <form action="{{ route('petCenter.index') }}" method="GET" class="mx-auto my-4">
            @csrf
            <x-primary-button>
                {{__('Volver')}}
            </x-primary-button>
        </form>
    </section>
@endsection
