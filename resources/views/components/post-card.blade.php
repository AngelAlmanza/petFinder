<article class="w-11/12 max-w-xl mx-auto p-4 flex items-end flex-col shadow-md rounded-lg">
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <div class="flex justify-between w-full">
        <div class="flex">
            <span class="mr-4">
                <i class="fa-solid fa-user"></i>
            </span>
            <p>Filomeno Pancrasio</p>
        </div>
        <span>
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </span>
    </div>
    <div class="w-full">
        <p class="text-base font-normal my-4 text-stone-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, veritatis praesentium assumenda nemo omnis eum pariatur vel dolor labore recusandae soluta cumque dignissimos aperiam consequatur quae. Culpa et numquam vero!</p>
    </div>
    <form action="/post" method="GET">
        @csrf
        <x-primary-button class="w-26 text-center flex justify-center">
            {{ __('Ver más') }}
        </x-primary-button>
    </form>
</article>
