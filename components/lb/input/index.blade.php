@props([
    'disabled' => false,
    'rounded' => 'md',
    'class' => '',
])

@php
    $disabledClasses = $disabled ? ' cursor-not-allowed bg-neutral-100  ' : 'bg-white';
    
    $baseClass = 'border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500  shadow-sm h-10 text-neutral-500 text-sm';
    
    $classes = $baseClass . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes . ' ' . $class]) }} />
