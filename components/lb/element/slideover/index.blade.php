@props([
    'data' => 'slideoverOpen',
])

<div x-data="{ '{{ $data }}': false }" @keydown.escape.window="$dispatch('close-slideover-panel')"
    x-on:close-slideover-panel.window="{{ $data }} = false">

    @isset($trigger)
        <div @click="slideoverOpen=true">
            {{ $trigger }}
        </div>
    @endisset

    {{ $slot }}
</div>
