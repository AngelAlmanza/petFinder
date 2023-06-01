<footer id="footer" class="w-full h-min flex items-center justify-evenly flex-col p-4 pt-8 bg-neutral-900">
    <div class="w-full flex items-center justify-evenly my-4">
        <h2 class="font-serif text-4xl font-bold text-emerald-400 drop-shadow-lg -rotate-12">PetFinder</h2>
        <h4 class="ml-4 text-slate-100">Todos los derechos reservados</h4>
    </div>
    <div class="w-full p-4">
        <h2 class="text-emerald-400">¿Tienes una veterinaria?</h2>
        <a href="{{ route('petCenter.create') }}" class="text-slate-100 hover:underline hover:text-emerald-400">Registrate y facilita que puedan encontrarte</a>
    </div>
    @role('admin')
        <a href="{{ route('dashboard.general') }}" class="font-bold text-4xl text-slate-100 mb-4 hover:text-emerald-400 hover:underline">Dashboard</a>
    @endrole
</footer>
