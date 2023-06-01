@extends('layouts.dashboard')
@section('title', 'Mascotas Perdidas')
@section('content')
    <h1 class="w-full text-center font-bold">Mascotas perdidas</h1>
    <div class="flex flex-wrap w-full h-3/4 align-center justify-center">
        <x-card-dashboard title="Testing Card" image="" description="Testing" chart="LFChart"/>
        <x-card-dashboard title="Pais que encuentra mas" image="fi fi-ru" description="Rusia" chart="none"/>
        <x-card-dashboard title="Pais que encuentra menos" image="fi fi-gb" description="Gran Bretaña" chart="none"/>
        <x-card-dashboard title="Pais que empieza a encontrar mas" image="fi fi-nz" description="Nueva Zelanda" chart="none"/>
        <x-card-dashboard title="Pais que empieza a encontrar menos" image="fi fi-us" description="Estados Unido" chart="none"/>
        <x-card-dashboard title="Pais que come mas perros" image="fi fi-cn" description="China" chart="none"/>
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
                    label: '# de Mascotas',
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