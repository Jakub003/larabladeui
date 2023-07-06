@props([
    'disabled' => false,
    'size' => 'md',
    'rounded' => 'lg',
])

@php
    $sizes = [
        'xs' => 'button-size-xs',
        'sm' => 'button-size-sm',
        'md' => 'button-size-md',
        'lg' => 'button-size-lg',
        'xl' => 'button-size-xl',
    ];
    
    $disabledClasses = $disabled ? 'button-primary-isDisabled' : ' button-primary-notDisabled';
    
    $baseClass = 'button-primary-base ';
    
    $classes = $baseClass . ' ' . $sizes[$size] . ' ' . $disabledClasses . ' ' . 'rounded-' . $rounded;
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes, 'disabled' => $disabled]) }}>
    {{ $slot }}
</button>
