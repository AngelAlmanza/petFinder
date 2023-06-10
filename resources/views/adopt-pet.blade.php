@extends('layouts.plantilla')
@section('title', 'Adoptar mascota')
@section('content')
    <h1 class="font-bold text-xl text-neutral-900 mb-4 ml-4">Animalitos que necesitan un hogar</h1>
    <section class="w-full flex justify-center items-center flex-col sm:flex-row sm:flex-wrap sm:gap-4">
        @forelse ($pets as $pet)
            @php
                $matchingPost = $posts->firstWhere('pet_id', $pet->id);
                $postId = $matchingPost ? $matchingPost->id : 'null';
            @endphp
            @if (isset($matchingPost->type_publication) && $matchingPost->type_publication == 'Adopción')
                <x-pet-adoption-post-card title="{{ $matchingPost->title }}" description="{{ $pet->description }}" petId="{{ $pet->id }}" postId="{{ $postId }}" />
            @endif
        @empty
            <p>No hay mascotas</p>
        @endforelse
    </section>
@endsection
