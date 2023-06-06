<div class="select-box w-full rounded-lg shadow-sm bg-white border border-gray-300 mt-1">
    <div class="select w-full flex justify-between items-center p-4 rounded-lg transition-all hover:cursor-pointer hover:shadow-xl">
        <div class="contenido-select w-full h-full" id="select">
            <p class="descripcion text-base font-medium text-neutral-900">Selecciona tu país</p>
        </div>
        <i class="fas fa-angle-down text-xl"></i>
    </div>
    <div class="opcion h-40 hidden overflow-auto" id="options">
        @foreach ($countries as $country)
            <div class="opcion px-4 py-2 transition-all hover:bg-slate-100 hover:cursor-pointer hover:shadow-md">
                <p class="country text-base font-normal text-neutral-900">{{ $country }}</p>
            </div>
        @endforeach
    </div>
    <input type="hidden" name="location" id="ubicacion" value="">
</div>
