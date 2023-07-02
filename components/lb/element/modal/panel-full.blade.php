@props(['modal', 'transition' => 'bottom'])

@php
    $transitions = [
        'bottom' => [
            'enter' => 'transition ease-out duration-300',
            'enter-start' => 'translate-y-full',
            'enter-end' => 'translate-y-0',
            'leave' => 'transition ease-in duration-300',
            'leave-start' => 'translate-y-0',
            'leave-end' => 'translate-y-full',
        ],
        'top' => [
            'enter' => 'transition ease-out duration-300',
            'enter-start' => '-translate-y-full',
            'enter-end' => 'translate-y-0',
            'leave' => 'transition ease-in duration-300',
            'leave-start' => 'translate-y-0',
            'leave-end' => '-translate-y-full',
        ],
        'middle' => [
            'enter' => 'ease-out duration-300',
            'enter-start' => 'opacity-0',
            'enter-end' => 'opacity-100',
            'leave' => 'ease-in duration-300',
            'leave-start' => 'opacity-100',
            'leave-end' => 'opacity-0',
        ],
    ];
@endphp

<template x-teleport="body">
    <div x-show="{{ $modal ?? 'modalOpen' }}" x-transition:enter="{{ $transitions[$transition]['enter'] }}"
        x-transition:enter-start="{{ $transitions[$transition]['enter-start'] }}"
        x-transition:enter-end="{{ $transitions[$transition]['enter-end'] }}"
        x-transition:leave="{{ $transitions[$transition]['leave'] }}"
        x-transition:leave-start="{{ $transitions[$transition]['leave-start'] }}"
        x-transition:leave-end="{{ $transitions[$transition]['leave-end'] }}"
        class="flex fixed inset-0 z-[99] w-screen h-screen bg-white" style="display:none">
        {{ $slot }}
    </div>
</template>
