@props([
    'baseClass' => 'text-sm text-neutral-500 leading-5 font-semibold',
    'class' => '',
    'label' => 'label',
    'for' => null,
])

<label for="{{ $for ?? $label }}" {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}
    aria-label="{{ $label }}">
    {{ $label }}
</label>
