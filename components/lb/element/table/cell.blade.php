@props([
    'baseClass' => 'whitespace-no-wrap text-sm leading-5 text-neutral-900 font-medium flex items-center p-2',
    'extraClass' => ' ',
])

@php
    $classes = $baseClass . ' ' . $extraClass;
@endphp

<td {{ $attributes->merge(['class']) }}>
    <div class="{{ $classes }}">
        {{ $slot }}
    </div>
</td>
