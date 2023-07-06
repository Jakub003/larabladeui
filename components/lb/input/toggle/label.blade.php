@props([
    'baseClass' => 'text-sm text-neutral-500 leading-5 font-semibold',
    'class' => '',
    'label' => 'label',
    'for' => null,
    'description' => null,
])

<div @click="$refs.switchButton.click(); $refs.switchButton.focus()" class="w-full">
    <label :id="$id('switch')" for="{{ $for ?? $label }}"
        {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }} aria-label="{{ $label }}">
        {{ $label }}
    </label>

    @isset($description)
        <x-lb.form.text class="mt-0 w-4/5">
            {{ $description }}
        </x-lb.form.text>
    @endisset
</div>
