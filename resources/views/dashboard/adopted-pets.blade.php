@extends('layouts.dashboard')
@section('title', 'Mascotas Adoptadas')
@section('content')
    <h1>Mascotas adoptadas</h1>
@endsection
@section('script')
    <script>
        const pets = JSON.parse('{!! $pets !!}')
        console.log(pets);
    </script>
@endsection
