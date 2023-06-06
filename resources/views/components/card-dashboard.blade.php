<div class="flex flex-col text-center shadow-lg m-2 p-16 w-2/5 h-80 bg-slate-50 justify-around rounded-lg">
    <div class="flex flex-col justify-center align-center">
        <h1 class="font-bold text-xl text-stone-900">{{ $title }}</h1>
        <p class="text-base text-stone-900">{{ $description }}</p>
    </div>
    <div>
        <i class="{{ $image }} text-7xl"></i>
        @if ($chart !== 'none')
            <div class="p-4 flex justify-center align-center">
                <canvas id="{{ $chart }}" height="150" width="150" ></canvas>
            </div>
        @endif
    </div>
</div>
