@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-base text-neutral-900']) }}>
    {{ $value ?? $slot }}
</label>
