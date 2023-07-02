@props([
    'class' => 'text-sm font-normal bg-white border border-neutral-200 divide-y divide-neutral-200 rounded-md',
])

<div x-data="{
    activeAccordion: '',
    setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
}" class="relative w-full mx-auto overflow-hidden {{ $class }}">
    {{ $slot }}
</div>
