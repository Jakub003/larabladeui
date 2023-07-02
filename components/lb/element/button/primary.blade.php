@props([
    'disabled' => false,
    'size' => 'md',
    'rounded' => 'lg',
])

@php
    $sizes = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm leading-4',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-4 py-3 text-base',
        'xl' => 'px-6 py-3 text-lg',
    ];
    
    $disabledClasses = $disabled ? ' cursor-not-allowed bg-primary-300' : ' bg-primary-500 hover:bg-primary-400';
    
    $default = 'flex flex-none flex-col justify-center items-center text-center font-semibold  text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500 transition ease-in-out duration-150 ';
    
    $classes = $default . ' ' . $sizes[$size] . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes, 'disabled' => $disabled]) }}>
    {{ $slot }}
</button>
