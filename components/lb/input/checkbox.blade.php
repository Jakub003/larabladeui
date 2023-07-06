@props([
    'baseClass' => 'rounded border-neutral-200 text-primary-500 shadow-sm focus:ring-primary-500',
    'class' => '',
])

<input type="checkbox" {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
