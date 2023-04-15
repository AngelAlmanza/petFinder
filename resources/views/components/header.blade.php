<header {{ $attributes->merge(['class' => 'bg-slate-50 shadow-md']) }}>
    <nav class="flex items-center justify-between p-4 flex-row-reverse lg:flex-row relative">
        <div class="mr-4">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-emerald-400 drop-shadow-lg">PetFinder</a>
        </div>
        <div class="flex items-center lg:hidden">
            <button id="menuToggle" class="text-neutral-900 focus:outline-none">
                <div id="icon-menu-open">
                    <i class="fa-solid fa-bars text-xl"></i>
                </div>
                <div id="icon-menu-close" class="hidden">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </div>
            </button>
        </div>
        <div id="menu" class="w-full hidden lg:block absolute lg:relative top-full lg:top-auto left-0 lg:left-auto bg-slate-100 lg:bg-transparent lg:mt-0">
            <ul class="w-full flex flex-col lg:flex-row items-start lg:items-center justify-center lg:justify-end pl-4 py-4 space-y-4 lg:space-y-0 lg:space-x-4 text-xl lg:text-base">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li class="hidden lg:block relative">
                    <a href="#">Mascotas</a>
                    <i class="fa-solid fa-caret-down hidden lg:inline-block"></i>
                    <ul class="submenu w-max hidden absolute top-full left-0 bg-slate-50">
                        <li class="mt-2 hover:bg-gray-400 p-2"><a href="{{ route('lost-pet') }}">Perdí mi mascota</a></li>
                        <li class="mt-2 hover:bg-gray-400 p-2"><a href="{{ route('pet-found') }}">Encontré una mascota</a></li>
                        <li class="mt-2 hover:bg-gray-400 p-2"><a href="{{ route('adopt-pet') }}">Adoptar mascota</a></li>
                        <li class="mt-2 hover:bg-gray-400 p-2"><a href="{{ route('give-pet') }}">Dar en adopcion</a></li>
                    </ul>
                </li>
                <li><a href="#">Ayuda veterinaria</a></li>
                <li class="lg:hidden"><a href="{{ route('lost-pet') }}">Perdí mi mascota</a></li>
                <li class="lg:hidden"><a href="{{ route('pet-found') }}">Encontré una mascota</a></li>
                <li class="lg:hidden"><a href="{{ route('adopt-pet') }}">Adoptar mascota</a></li>
                <li class="lg:hidden"><a href="{{ route('give-pet') }}">Dar en adopcion</a></li>
                <li><a href="{{ route('profile.edit') }}">Mi perfil</a></li>
                <li class="lg:hidden">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden"">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
