@props([
    'baseClass' => 'grid grid-cols-6 gap-x-4 gap-y-4 lg:gap-y-6',
    'class' => 'col-span-6 md:col-span-3',
    'hasBorder' => false,
    'borderClass' => 'border rounded-md border-neutral-200 pt-4 px-4 pb-4 md:pb-7  md:px-7 md:pt-7',
])

@php
    $borderClasses = $hasBorder ? $borderClass : '';
@endphp

<div {{ $attributes->merge(['class' => $baseClass . ' ' . $class . ' ' . $borderClasses]) }}>
    {{ $slot }}
</div>
