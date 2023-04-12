<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono bg-slate-100 mx-auto">
    <main>
        <section class="flex place-items-center flex-col h-screen bg-right bg-no-repeat bg-auto relative overflow-hidden md:place-items-start xl:pt-44 back-image">
            <h1 class="font-serif text-6xl font-bold text-emerald-400 drop-shadow-lg -rotate-12 mt-28 md:mt-48 md:ml-4 md:pl-8 xl:pl-16">PetFinder</h1>
            <div class="mt-12 flex place-items-center flex-col md:flex-row md:justify-evenly md:pl-8 xl:pl-16">
                <button class="bg-emerald-400 text-base font-bold text-stone-800 w-40 h-12 rounded-lg mt-4 md:mr-4">Iniciar Sesión</button>
                <button class="bg-red-700 text-base font-bold text-slate-100 w-40 h-12 rounded-lg mt-4 md:mr-4">Crear Cuenta</button>
            </div>
            <div class="rounded-full bg-slate-100 absolute bottom-0 p-14 text-center translate-y-1/2 sm:translate-y-3/4 md:-mb-9 xl:-mb-24 circle-pharase">
                <p class="mt-4">"El amor es una palabra de cuatro patas"</p>
            </div>
        </section>
        <hr class="bg-gray-400 drop-shadow w-4/5 h-px mx-auto my-4">
        <section class="flex flex-wrap justify-center my-8 xl:justify-evenly">
            <div class="w-5/6 mb-4 md:w-4/5 xl:w-2/5">
                <h2 class="text-stone-800 font-bold text-xl text-center mb-4">Encuentra a tus mascotas perdidas</h2>
                <div class="md:flex flex-row-reverse place-items-center">
                    <img src="{{ asset('images/abrazo.png') }}" class="w-32 my-4 mx-auto md:w-44" alt="Encuentra tu mascota">
                    <p class="text-stone-800 text-base font-normal mb-4">
                        Con <strong class="text-emerald-400">PetFinder</strong> podrás perdir ayuda para encontrar a tus mascotas, también podrás ayudar a otros a encontrarlas.
                    </p>
                </div>
            </div>
            <div class="w-5/6 mb-4 md:w-4/5 xl:w-2/5">
                <h2 class="text-stone-800 font-bold text-xl text-center mb-4">Adopta una mascota</h2>
                <div class="md:flex flex-row-reverse place-items-center">
                    <img src="{{ asset('images/adoptar.png') }}" class="w-32 my-4 mx-auto md:w-44" alt="Adopta una mascota">
                    <p class="text-stone-800 text-base font-normal mb-4">
                        Con <strong class="text-emerald-400">PetFinder</strong> podrás darle hogar a aquellos animalitos que lo necesiten, encuentra al nuevo miembro de tu familia.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-full h-36 flex items-center justify-evenly p-4 bg-neutral-900">
        <h2 class="font-serif text-4xl font-bold text-emerald-400 drop-shadow-lg -rotate-12">PetFinder</h2>
        <h4 class="ml-4 text-slate-100">Todos los derechos reservados</h4>
    </footer>
</body>
</html>
