<article class="w-11/12 max-w-xl h-full mx-auto p-4 flex items-end flex-col justify-around shadow-md rounded-lg">
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <div class="flex justify-between w-full">
        <div class="flex">
            <span class="mr-4">
                <i class="fa-solid fa-user"></i>
            </span>
            <p>{{ $title }}</p>
        </div>
        <span>
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </span>
    </div>
    <div class="w-full">
        <p class="text-base font-normal my-4 text-stone-800">{{ $body }}</p>
    </div>
    <a href="{{ route('post.show', $id) }}" class="items-center w-26 text-center flex justify-center px-4 py-2 bg-emerald-400 border border-transparent rounded-md font-bold text-base text-neutral-900 uppercase tracking-widest hover:bg-green-600 focus:bg-green-600 active:bg-emerald-950 focus:outline-none focus:ring-2 focus:ring-teal-700 focus:ring-offset-2 transition ease-in-out duration-150">Ver más</a>
</article>
