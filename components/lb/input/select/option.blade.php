@props([
    'disabled' => false,
    'rounded' => 'md',
    'class' => '',
])

@php
    $disabledClasses = $disabled ? ' cursor-not-allowed bg-neutral-100  ' : 'bg-white';
    
    $baseClass = 'text-neutral-500 text-sm';
    
    $classes = $baseClass . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<option {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes . ' ' . $class]) }}>
    {{ $slot }}
</option>
