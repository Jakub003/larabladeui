@props([
    'full' => false,
    'data' => 'modalOpen',
])

<div x-data="{ '{{ $data }}': false }" @keydown.escape.window="$dispatch('close-modal')"
    x-on:close-modal.window="{{ $data }} = false" x-init="if ('{{ $full }}') {
        $watch('modalOpen', function(value) {
            if (value === true) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        })
    }">

    @isset($trigger)
        <div @click="modalOpen=true">
            {{ $trigger }}
        </div>
    @endisset

    {{ $slot }}
</div>
