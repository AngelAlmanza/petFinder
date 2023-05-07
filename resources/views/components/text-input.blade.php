@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-300 focus:ring-yellow-300 rounded-md shadow-sm']) !!}>
