<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-mono mx-auto relative">
    <x-header />
    <main class="bg-slate-100 px-4">
        <section id="messagesContainer" class="messages-container overflow-scroll overflow-x-hidden">
            <x-message />
            <x-message class="flex-row-reverse" />
            <x-message />
            <x-message class="flex-row-reverse" />
            <x-message />
            <x-message class="flex-row-reverse" />
            <x-message />
            <x-message class="flex-row-reverse" />
            <x-message />
            <x-message class="flex-row-reverse" />
        </section>
    </main>
    <section id="messagesInput" class="w-full h-14 flex justify-center items-center bg-slate-100">
        <form action="" method="POST" class="w-full flex justify-center items-center">
            @csrf
            <label for="messageInput" class="block w-6 h-6 mr-2 rounded-full bg-slate-50">
                <i class="fa-solid fa-user"></i>
            </label>
            <input id="messageInput" class="block w-4/5 border-none rounded-lg focus:ring-0 bg-slate-50 text-neutral-900 text-sm font-light shadow-md" type="text" placeholder="Escribe un mensaje">
        </form>
    </section>
</body>
</html>
