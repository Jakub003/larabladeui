@props([
    'label' => 'Accordion Label',
])

<div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
    <button @click="setActiveAccordion(id)"
        class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
        <span>{{ $label }}</span>

        <div class="duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }">
            <x-lb.heroicon.o-chevron-down class="w-4 h-4 " />
        </div>
    </button>

    <div x-show="activeAccordion==id" x-collapse style="display:none">
        <div class="p-4 pt-0 text-neutral-500">
            {{ $slot }}
        </div>
    </div>

</div>
