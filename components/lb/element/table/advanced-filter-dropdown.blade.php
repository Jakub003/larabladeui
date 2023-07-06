<x-lb.element.popover position="top-0 w-64 mt-10 right-0">
    <x-slot name="trigger">
        <x-lb.element.button.primary>
            Filters
        </x-lb.element.button.primary>
    </x-slot>

    <input wire:model.defer="searchQuery" type="text" />
</x-lb.element.popover>
