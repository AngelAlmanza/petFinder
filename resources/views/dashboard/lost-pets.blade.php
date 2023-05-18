@extends('layouts.dashboard')
@section('title', 'Mascotas Perdidas')
@section('content')
    <h1>Mascotas perdidas</h1>
@endsection
@section('script')
    <script>
        const pets = JSON.parse('{!! $pets !!}')
        console.log(pets);
    </script>
@endsection
