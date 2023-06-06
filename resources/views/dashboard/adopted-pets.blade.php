@extends('layouts.dashboard')
@section('title', 'Mascotas Adoptadas')
@section('content')
    <h1 class="w-full text-center text-3xl font-bold mb-4">Mascotas adoptadas</h1>
    <div class="flex flex-wrap w-full align-center justify-center">
        <x-card-dashboard title="Mascotas Adoptadas" image="none" description="Mayo 2023" chart="AdoptionChart"/>
        <x-card-dashboard title="País que adopta mas mascotas" image="fi fi-ar" description="Argentina" chart="none"/>
        <x-card-dashboard title="País que adopta menos mascotas" image="fi fi-kr" description="Corea" chart="none"/>
        <x-card-dashboard title="Mascotas Adoptadas" image="none" description="2023" chart="AdoptionChart2"/>
        <x-card-dashboard title="País que empieza a adoptar mas mascotas" image="fi fi-de" description="Alemania" chart="none"/>
        <x-card-dashboard title="País que empieza a adoptar menos mascotas" image="fi fi-mx" description="Mexico" chart="none"/>
    </div>
@endsection
@section('script')
    <script>
        let Apet = 0;
        const pets = JSON.parse('{!! $pets !!}')
        pets.map(pet => Apet += pet.state != pet.current_state?1:0);
            const ctx = document.getElementById('AdoptionChart');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                labels: ['Adoptado', 'No Adoptado'],
                datasets: [{
                    label: 'Número de Mascotas',
                    data: [pets.length - Apet, Apet],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(230, 57, 70)',
                        'rgb(69, 123, 157)'
                    ]
                }]
                },
            });

            const ctx2 = document.getElementById('AdoptionChart2');
            new Chart(ctx2, {
                type: 'doughnut',
                data: {
                labels: ['Adoptado', 'No Adoptado'],
                datasets: [{
                    label: '# de Mascotas',
                    data: [(pets.length - Apet) * 24.5, Apet * 12.6],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(205, 180, 219)',
                        'rgb(162, 210, 255)'
                    ]
                }]
                },
            });

            ctx.canvas.parentNode.style.height = '150px';
            ctx.canvas.parentNode.style.width = '150px';
            ctx.canvas.height = 150;
            ctx.canvas.width = 150;
            ctx.update();
    </script>
@endsection
