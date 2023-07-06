@props([
    'baseClass' => 'text-sm text-neutral-500 leading-5 font-semibold',
    'class' => 'mt-2',
])
<h3 {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</h3>
