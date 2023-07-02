@props([
    'data' => 'slideoverOpen',
])

<div x-data="{ '{{ $data }}': false }" @keydown.escape.window="$dispatch('close-slideover-panel')"
    x-on:close-slideover-panel.window="{{ $data }} = false" x-init="if ('{{ $data }}') {
        $watch('slideoverOpen', function(value) {
            if (value === true) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        })
    }">

    @isset($trigger)
        <div @click="slideoverOpen=true">
            {{ $trigger }}
        </div>
    @endisset

    {{ $slot }}
</div>
