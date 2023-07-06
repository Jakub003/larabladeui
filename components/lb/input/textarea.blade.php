@props([
    'disabled' => false,
    'rounded' => 'md',
    'class' => 'max-h-48 min-h-[100px]',
])

@php
    $disabledClasses = $disabled ? ' cursor-not-allowed bg-neutral-100  ' : 'bg-white';
    
    $baseClass = 'border border-neutral-200 focus:border-indigo-500 focus:ring-indigo-500  shadow-sm text-neutral-500 text-sm placeholder:text-gray-400  overflow-y-auto scrollbar-active ';
    $classes = $baseClass . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<textarea {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $classes . ' ' . $class]) }}></textarea>
