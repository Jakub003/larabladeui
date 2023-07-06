@props([
    'baseClass' => 'col-span-6',
    'class' => '',
    'title' => 'title',
    'description' => '',
])

<div {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    <x-lb.form.title>
        {{ $title }}
    </x-lb.form.title>
    @isset($description)
        <x-lb.form.text>
            {{ $description }}
        </x-lb.form.text>
    @endisset
</div>
