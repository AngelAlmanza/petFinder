<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascota Encontrada</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono bg-slate-100 mx-auto">
    <x-header></x-header>
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const menu = document.getElementById('menu');
        const menuIconOpen = document.getElementById('icon-menu-open');
        const menuIconClose = document.getElementById('icon-menu-close');
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('hidden');
            menuIconOpen.classList.toggle('hidden');
            menuIconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>
