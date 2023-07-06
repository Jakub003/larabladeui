@props([
    'model' => 'model',
    'defer' => false,
    'baseClass' => 'grid grid-cols-2 gap-4',
    'class' => '',
])

<div x-data="{ radioGroupSelectedValue: @entangle($model . ($defer ? '.defer' : '')) }" {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</div>
