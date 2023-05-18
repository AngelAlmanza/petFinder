@extends('layouts.dashboard')
@section('title', 'Reportes')
@section('content')
    <h1>Reportes</h1>
@endsection
@section('script')
    <script>
        const reports = JSON.parse('{!! $reports !!}')
        console.log(reports);
    </script>
@endsection
