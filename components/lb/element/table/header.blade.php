@props([
    'title' => 'table title',
    'description',
])
<div class="grid grid-cols-2 gap-10">
    <div>
        <h4 class="text-lg font-bold text-neutral-800 leading-7"> {{ $title }} </h4>
        @isset($description)
            <span class="text-sm font-medium text-neutral-500">{{ $description }}</span>
        @endisset
    </div>

    <div class="flex justify-end space-x-2">
        {{ $slot }}
    </div>
</div>
