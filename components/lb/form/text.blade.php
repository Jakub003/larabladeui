@props([
    'class' => 'mt-1',
    'baseClass' => 'text-sm text-neutral-600 leading-5',
])
<p {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</p>
