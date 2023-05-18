@extends('layouts.dashboard')
@section('title', 'Mascotas Encontradas')
@section('content')
    <h1>Mascotas encontradas</h1>
@endsection
@section('script')
    <script>
        const pets = JSON.parse('{!! $pets !!}')
        console.log(pets);
    </script>
@endsection
