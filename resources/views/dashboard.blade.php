<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-base mx-auto flex">
    <aside class="w-1/4 h-screen bg-slate-50">
        <nav class="flex flex-col justify-between h-full pb-4">
            <ul id="dashMenu">
                <x-dashboard-section color="bg-emerald-400">
                    {{__('Almacenamiento')}}
                </x-dashboard-section>
                <x-dashboard-section>
                    {{ __('Vista general') }}
                </x-dashboard-section>
                <x-dashboard-section>
                    {{ __('Mascotas perdidas') }}
                </x-dashboard-section>
                <x-dashboard-section>
                    {{ __('Mascotas adoptadas') }}
                </x-dashboard-section>
                <x-dashboard-section>
                    {{ __('Reportes') }}
                </x-dashboard-section>
            </ul>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-slate-100 w-64 mx-auto inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md font-bold text-base uppercase tracking-widest hover:bg-red-400 focus:bg-red-400 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-700">Salir</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden"">
                @csrf
            </form>
        </nav>
    </aside>
    <main class="bg-slate-100 w-3/4 h-screen">
        <section>
            <x-card-dashboard title="50GB / 100GB">
                <article>
                    <div class="flex items-center">
                        <span class="text-3xl"><i class="fa-solid fa-folder"></i></span>
                        <p class="ml-4">Data</p>
                        <p class="ml-4">5GB</p>
                    </div>
                    <div class="flex">
                        <span class="text-3xl"><i class="fa-regular fa-images"></i></span>
                        <p class="ml-4">Imágenes</p>
                        <p class="ml-4">35GB</p>
                    </div>
                </article>
            </x-card-dashboard>
        </section>
    </main>
    <script>
        // Aqui no importa meter el JS aqui porque solo lo vera el admin
        const dashMenu = document.getElementById('dashMenu');
        const dashMenuItems = document.querySelectorAll('#dashMenu li p');
        dashMenu.addEventListener('click', (e) => {
            dashMenuItems.forEach(element => element.classList.remove('bg-emerald-400'));
            if (Array.from(dashMenuItems).includes(e.target)) {
                e.target.classList.add('bg-emerald-400');
            }
        });
    </script>
</body>
</html>
