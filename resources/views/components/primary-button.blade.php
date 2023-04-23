<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-emerald-400 border border-transparent rounded-md font-bold text-base text-neutral-900 uppercase tracking-widest hover:bg-green-600 focus:bg-green-600 active:bg-emerald-950 focus:outline-none focus:ring-2 focus:ring-teal-700 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
