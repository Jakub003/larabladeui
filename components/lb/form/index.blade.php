@props([
    'baseClass' => 'pt-4 px-4 pb-4 lg:pt-6 lg:px-6 grid grid-cols-6 gap-x-4 gap-y-4 lg:gap-y-6',
    'class' => '',
    'submit',
])

<form wire:submit.prevent="{{ $submit }}" {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</form>
