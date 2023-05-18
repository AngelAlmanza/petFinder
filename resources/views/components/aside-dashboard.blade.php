<aside class="w-1/4 h-screen bg-slate-50">
    <nav class="flex justify-between flex-col text-center h-full p-2">
        <ul class="flex flex-col">
            <li>
                <form action="{{ route('dashboard.general') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Vista general
                    </button>
                </form>
            </li>
            <li>
                <form action="{{ route('dashboard.storage') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Almacenamiento
                    </button>
                </form>
            </li>
            <li>
                <form action="{{ route('dashboard.lostPets') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Mascotas perdidas
                    </button>
                </form>
            </li>
            <li>
                <form action="{{ route('dashboard.adoptedPets') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Mascotas adoptadas
                    </button>
                </form>
            </li>
            <li>
                <form action="{{ route('dashboard.petsFounded') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Mascotas encontradas
                    </button>
                </form>
            </li>
            <li>
                <form action="{{ route('dashboard.petsFounded') }}" method="GET">
                    @csrf
                    <button type="submit" class="rounded-md p-4 m-1 w-full text-neutral-900 font-bold shadow-md hover:bg-emerald-400 hover:text-slate-50">
                        Reportes
                    </button>
                </form>
            </li>
        </ul>
        <x-danger-button class="flex justify-center">
            {{__('Cerrar sesion')}}
        </x-danger-button>
    </nav>
</aside>
<!-- 34D399 / Emerald 400-->
