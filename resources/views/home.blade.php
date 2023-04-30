@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1 class="text-left mb-4 pl-4 text-neutral-900 text-xl font-bold">Home</h1>
    <section class="grid auto-rows-auto gap-4 place-items-center md:grid-cols-2 pb-4 md:px-4">
        @forelse($posts as $post)
            <x-post-card title="{{ $post->title }}" body="{{ $post->body }}" id="{{ $post->id }}" />
        @empty
            <p>No hay posts</p>
        @endforelse
    </section>
@endsection
