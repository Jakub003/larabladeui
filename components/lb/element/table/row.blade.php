@props([
    'baseClass' => 'bg-white group hover:bg-neutral-100',
    'extraClass' => ' ',
])

@php
    $classes = $baseClass . ' ' . $extraClass;
@endphp

<tr {{ $attributes->merge(['class']) }} wire:loading.class.delay="opacity-25">
    <div class="{{ $classes }}">
        {{ $slot }}
    </div>
</tr>
