<div {{ $attributes->merge(['class' => 'w-72 h-80 flex flex-col items-center justify-center rounded bg-slate-50 shadow-md']) }}>
    <span class="text-5xl inline-block mb-4"><i class="fa-solid fa-chart-pie"></i></span>
    <h2 class="text-stone-800 text-4xl font-bold mb-4">{{ $title }}</h2>
    {{ $slot }}
</div>
