@props([
    'baseClass' => 'text-sm text-neutral-600 leading-5',
    'class' => 'mt-2',
])
<p {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</p>
