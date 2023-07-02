@props([
    'rounded' => 'md',
    'position' => 'top-0 w-64 mt-10 left-0',
    'height' => ' max-h-96',
])

@php
    $roundedClass = 'rounded-' . $rounded;
@endphp

<div x-data="{
    dropdownOpen: false
}" class="relative">

    @isset($trigger)
        <div @click="dropdownOpen=true">
            {{ $trigger }}
        </div>
    @endisset

    <div x-show="dropdownOpen" @click.away="dropdownOpen=false" x-transition:enter="ease-out duration-200"
        x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
        class="absolute z-50 {{ $position }}" style="display:none">
        <div
            class="bg-white border border-neutral-200 shadow-md scrollbar-active overflow-y-auto {{ $roundedClass }} {{ $height }}">
            {{ $slot }}
        </div>
    </div>
</div>
