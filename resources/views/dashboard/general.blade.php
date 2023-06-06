@extends('layouts.dashboard')
@section('title', 'Vista General')
@section('content')
    <h1 class="w-full text-center text-3xl font-bold mb-4">Vista general</h1>
    <div class="flex flex-wrap w-full align-center justify-center">
        <x-card-dashboard title="Total de reportes" image="fa-solid fa-circle-exclamation" description="{{ $totalReports }}" chart="none"/>
        <x-card-dashboard title="Total mascotas perdidas" image="fa-solid fa-paw" description="{{ $totalPetsLost }}" chart="none"/>
        <x-card-dashboard title="Total mascotas en adopción" image="fa-solid fa-dog" description="{{ $totalPetsWithoutAdopted }}" chart="none"/>
        <x-card-dashboard title="Total mascotas adoptadas" image="fa-solid fa-shield-dog" description="{{ $totalPetsAdopted }}" chart="none"/>
    </div>
@endsection
@section('script')
@endsection
