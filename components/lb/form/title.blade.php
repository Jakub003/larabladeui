@props([
    'class' => '',
    'baseClass' => 'text-base text-neutral-900 leading-6 font-semibold',
])
<h4 {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</h4>
