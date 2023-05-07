<article {{ $attributes->merge(['class' => 'w-72 h-32 mb-4 bg-slate-50 rounded-lg shadow-md md:w-5/12']) }}>
    <a href="{{ route('post.show', $postId) }}" class="w-full h-full px-2 py-4 flex">
        <div class="w-32 h-24 bg-gray-400"></div>
        <div class="w-24 ml-4 flex flex-col overflow-hidden md:w-36 lg:w-64 xl:w-2/3">
            <h3 class="text-base font-normal text-neutral-900">{{ $title }}</h3>
            <p class="text-xs font-normal text-stone-800">{{ $description }}</p>
        </div>
    </a>
</article>
