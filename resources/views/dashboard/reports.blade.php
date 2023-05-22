@extends('layouts.dashboard')
@section('title', 'Reportes')
@section('content')
    <h1 class="w-full text-center font-bold">Reportes</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
    </div>
@endsection
@section('script')
    <script>
        const reports = JSON.parse('{!! $reports !!}')
        console.log(reports);
    </script>
@endsection
