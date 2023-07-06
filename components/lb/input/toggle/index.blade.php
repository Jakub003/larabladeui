@props([
    'model' => 'model',
    'defer' => false,
    'baseClass' => 'flex w-full justify-between',
    'class' => 'col-span-6',
])

<div x-data="{ switchOn: @entangle($model . ($defer ? '.defer' : '')) }" {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
    <input :id="$id('checkbox-switch')" type="checkbox" name="switch" class="hidden" x-model="switchOn">
    {{ $slot }}
</div>
