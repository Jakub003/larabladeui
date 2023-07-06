@props([
    'baseClass' => 'flex items-center justify-end px-4 py-3 bg-neutral-50 text-right sm:px-6  sm:rounded-bl-md sm:rounded-br-md col-span-6 ',
    'class' => '-mx-4 -mb-4 md:-mb-7 md:-mx-7',
])
<div {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</div>
