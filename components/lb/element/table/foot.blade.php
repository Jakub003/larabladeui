@props([
    'baseClass' => 'whitespace-no-wrap text-sm leading-5 text-neutral-900 font-medium flex items-center p-2 bg-neutral-500',
    'extraClass' => ' ',
])

@php
    $classes = $baseClass . ' ' . $extraClass;
@endphp

<th scope="col" {{ $attributes->merge(['class']) }}>
    <div class="{{ $classes }}">
        {{ $slot }}
    </div>
</th>
