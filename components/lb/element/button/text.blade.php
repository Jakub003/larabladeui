@props([
    'disabled' => false,
    'size' => 'md',
    'rounded' => 'lg',
])

@php
    $sizes = [
        'xs' => 'px-2.5 h-6 text-xs',
        'sm' => 'px-3 h-8  text-sm leading-4',
        'md' => 'px-4 h-10  text-sm',
        'lg' => 'px-4 h-12 text-base',
        'xl' => 'px-6 h-16 text-lg',
    ];
    
    $disabledClasses = $disabled ? ' cursor-not-allowed text-neutral-300' : 'text-netural-800  hover:text-primary-500';
    
    $default = 'flex flex-none flex-col justify-center items-center text-center font-semibold  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500 transition ease-in-out duration-150 ';
    
    $classes = $default . ' ' . $sizes[$size] . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes, 'disabled' => $disabled]) }}>
    {{ $slot }}
</button>
