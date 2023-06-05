<div class="w-72 bg-slate-50 rounded-lg shadow-md p-4 md:w-80">
    <h2 class="text-base font-normal text-neutral-900 mb-4">{{ $name }}</h2>
    <p class="text-xs font-normal text-stone-800 mb-4"><b>Ubicación:</b> {{ $location }}</p>
    <p class="text-xs font-normal text-stone-800 mb-4"><b>Horario:</b> {{ $schedule }}</p>
    @if ($type)
        <p class="text-xs font-normal text-stone-800 mb-4">Acepta animales exóticos</p>
    @else
        <p class="text-xs font-normal text-stone-800 mb-4">No acepta animales exóticos</p>
    @endif
    <a href="{{ route('petCenter.show', $id) }}" class="items-center w-26 text-center flex justify-center px-4 py-2 bg-emerald-400 border border-transparent rounded-md font-bold text-base text-neutral-900 uppercase tracking-widest hover:bg-green-600 focus:bg-green-600 active:bg-emerald-950 focus:outline-none focus:ring-2 focus:ring-teal-700 focus:ring-offset-2 transition ease-in-out duration-150">Ver más</a>
</div>
