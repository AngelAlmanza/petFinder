@extends('layouts.dashboard')
@section('title', 'Mascotas Perdidas')
@section('content')
    <h1 class="w-full text-center text-3xl font-bold mb-4">Mascotas perdidas</h1>
    <div class="flex flex-wrap w-full align-center justify-center">
        <x-card-dashboard title="Mascotas perdidas" image="" description="" chart="LFChart"/>
        <x-card-dashboard title="País que encuentra mas mascotas" image="fi fi-ru" description="Rusia" chart="none"/>
        <x-card-dashboard title="País que encuentra menos mascotas" image="fi fi-gb" description="Gran Bretaña" chart="none"/>
        <x-card-dashboard title="País que empieza a encontrar mas mascotas" image="fi fi-nz" description="Nueva Zelanda" chart="none"/>
        <x-card-dashboard title="País que empieza a encontrar menos mascotas" image="fi fi-us" description="Estados Unido" chart="none"/>
    </div>
@endsection
@section('script')
    <script>
        let Apet = 0;
        const pets = JSON.parse('{!! $pets !!}').filter(pet => pet.current_state == "Perdido");
        const Bpets = JSON.parse('{!! $pets !!}').filter(pet => pet.current_state == "Encontrado");

        const ctx = document.getElementById('LFChart');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                labels: ['Perdido', 'Encontrado'],
                datasets: [{
                    label: 'Número de Mascotas',
                    data: [pets.length, Bpets.length],
                    borderWidth: 1
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
