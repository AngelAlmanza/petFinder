@extends('layouts.dashboard')
@section('title', 'Mascotas Encontradas')
@section('content')
    <h1 class="w-full text-center font-bold">Mascotas encontradas</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
    </div>
@endsection
@section('script')
    <script>
        const pets = JSON.parse('{!! $pets !!}')
        console.log(pets);

        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
                type: 'doughnut',
                data: {
                labels: ['Enconntrado', 'No Enconntrado'],
                datasets: [{
                    label: '# de Mascotas',
                    data: [12, 19],
                    borderWidth: 1
                }]
                },
            });

            myChart.canvas.parentNode.style.height = '150px';
            myChart.canvas.parentNode.style.width = '150px';

            myChart.canvas.height = 150;
            myChart.canvas.width = 150;

            myChart.update();
    </script>
@endsection
