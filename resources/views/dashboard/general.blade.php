@extends('layouts.dashboard')
@section('title', 'Vista General')
@section('content')
    <h1 class="w-full text-center font-bold">Vista general</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
        <x-card-dashboard title="Testing Card" image="fa-solid fa-shield-dog" description="Testing" chart="none"/>
    </div>
@endsection

@section('script')
<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ['Red', 'Blue'],
        datasets: [{
            label: '# of Votes',
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