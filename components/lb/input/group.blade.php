@props([
    'baseClass' => 'flex flex-col space-y-1',
    'class' => 'col-span-6',
    'label',
    'for',
])
<div {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    <x-lb.form.label :label="$label" :for="$for" />
    {{ $slot }}
    <x-lb.input.error :for="$for" />
</div>
