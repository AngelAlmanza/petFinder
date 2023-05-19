@extends('layouts.dashboard')
@section('title', 'Almacenamiento')
@section('content')
    <h1>Almancenamiento</h1>
@endsection
@section('script')
    <script>
        const totalSize = JSON.parse('{!! $totalSize !!}')
        console.log(totalSize);
    </script>
@endsection
