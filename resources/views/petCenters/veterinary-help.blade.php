@extends('layouts.plantilla')
@section('title', 'Ayuda Veterinaria')
@section('content')
    <h1 class="font-bold text-xl text-neutral-900 m-8">Ayuda Veterinaria</h1>
    <section class="grid place-items-center sm:grid-cols-2 lg:grid-cols-3 w-full p-4 gap-4 mx-auto">
        @forelse ($petCenters as $petCenter)
            <x-veterinary-card name="{{ $petCenter->name }}" location="{{ $petCenter->location }}" schedule="{{ $petCenter->schedule }}" type="{{ $petCenter->type }}" id="{{ $petCenter->id }}" />
        @empty
            <p class="text-xs font-normal text-stone-800 mb-4">No hay veterinarias registradas cerca de ti</p>
        @endforelse
    </section>
@endsection
