@extends('layouts.dashboard')
@section('title', 'Vista General')
@section('content')
    <h1 class="w-full text-center font-bold">Vista general</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    <x-card-dashboard title="Testing" image="fa-solid fa-shield-dog" description="Testing2"/>
    </div>
@endsection