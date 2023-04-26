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
        <nav>
            <ul>
                <li>Almacenamiento</li>
                <li>Vista general</li>
                <li>Mascotas perdidas</li>
                <li>Mascotas adoptadas</li>
                <li>Reportes</li>
            </ul>
            <x-secondary-button>
                {{__('Cerrar sesion')}}
            </x-secondary-button>
        </nav>
    </aside>
    <main class="bg-slate-100 w-3/4 h-screen">
        <h1>Dashboard</h1>
    </main>
</body>
</html>
