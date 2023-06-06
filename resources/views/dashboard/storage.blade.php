@extends('layouts.dashboard')
@section('title', 'Almacenamiento')
@section('content')
    <h1 class="w-full text-center text-3xl font-bold mb-4">Almacenamiento</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
        <x-card-dashboard title="Data" image="none" description="100GB" chart="myChart"/>
    </div>
@endsection
@section('script')
    <script>
        const serverTOTALSIZE = 10;
        const totalSize = 5000/* JSON.parse('{!! $totalSize !!}') */
        console.log(totalSize);

        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
                type: 'doughnut',
                data: {
                labels: ['Libre', 'En Uso'],
                datasets: [{
                    label: 'Espacio',
                    data: [serverTOTALSIZE - (totalSize/1024), totalSize/1024],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(205, 205, 205)',
                        'rgb(51 , 124, 235)'
                    ]
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
