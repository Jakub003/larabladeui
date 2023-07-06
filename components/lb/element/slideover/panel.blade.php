@props([
    'width' => 'max-w-lg',
    'height' => 'h-full',
    'rounded' => 'lg',
    'custom' => '',
    'data' => 'slideoverOpen',
    'direction' => 'right',
])

@php
    $roundedClass = ' sm:rounded-' . $rounded;
    
    $directions = [
        'right' => [
            'enter' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'enter-start' => 'translate-x-full',
            'enter-end' => 'translate-x-0',
            'leave' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'leave-start' => 'translate-x-0',
            'leave-end' => 'translate-x-full',
            'side' => 'right-0 inset-y-0',
        ],
        'left' => [
            'enter' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'enter-start' => '-translate-x-full',
            'enter-end' => 'translate-x-0',
            'leave' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'leave-start' => 'translate-x-0',
            'leave-end' => '-translate-x-full',
            'side' => 'left-0 inset-y-0',
        ],
        'bottom' => [
            'enter' => 'transition ease-out duration-500 sm:duration-700',
            'enter-start' => 'translate-y-full',
            'enter-end' => 'translate-y-0',
            'leave' => 'transition ease-in duration-500 sm:duration-700',
            'leave-start' => 'translate-y-0',
            'leave-end' => 'translate-y-full',
            'side' => 'bottom-0 ',
        ],
        'top' => [
            'enter' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'enter-start' => '-translate-y-full',
            'enter-end' => 'translate-y-0',
            'leave' => 'transform transition ease-in-out duration-500 sm:duration-700',
            'leave-start' => 'translate-y-0',
            'leave-end' => '-translate-y-full',
            'side' => 'top-0 inset-y-0',
        ],
    ];
    
    $classes = $roundedClass . ' ' . $custom . ' ' . $width . ' ' . $height . ' ' . $directions[$direction]['side'];
    
@endphp

<template x-teleport="body">
    <div x-show="{{ $data }}" @keydown.window.escape="$dispatch('close-slideover-panel')" class="relative z-[99]"
        x-trap.noscroll.inert="{{ $data }}" style="display:none">
        <div x-show="{{ $data }}" x-transition.opacity.duration.600ms @click="$dispatch('close-slideover-panel')"
            class="fixed inset-0 bg-black bg-opacity-10"></div>
        <div class="fixed inset-0">
            <div class="absolute inset-0">
                <div class="fixed flex max-w-full {{ $classes }}">
                    <div x-show="{{ $data }}" @click.away="$dispatch('close-slideover-panel')"
                        x-transition:enter="{{ $directions[$direction]['enter'] }}"
                        x-transition:enter-start="{{ $directions[$direction]['enter-start'] }}"
                        x-transition:enter-end="{{ $directions[$direction]['enter-end'] }}"
                        x-transition:leave="{{ $directions[$direction]['leave'] }}"
                        x-transition:leave-start="{{ $directions[$direction]['leave-start'] }}"
                        x-transition:leave-end="{{ $directions[$direction]['leave-end'] }}" class="w-screen">
                        <div
                            class="flex flex-col h-full  l bg-white border-l shadow-lg border-neutral-100/70 scrollbar-design">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
