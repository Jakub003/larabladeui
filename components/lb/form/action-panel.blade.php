@props([
    'baseClass' => 'flex items-center justify-end text-right space-x-2 w-full col-span-6',
    'class' => '',
    'type' => '',
])
<div {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>

    @switch($type)
        @case('update')
            <x-lb.element.button.text wire:click="cancelChanges">
                Cancel
            </x-lb.element.button.text>
            <x-lb.element.button.primary type="submit">
                Update
            </x-lb.element.button.primary>
        @break

        @case('create')
            <x-lb.element.button.text wire:click="cancelChanges">
                Cancel
            </x-lb.element.button.text>
            <x-lb.element.button.primary type="submit">
                Create
            </x-lb.element.button.primary>
        @break

        @case('delete')
            <x-lb.element.button.text wire:click="cancelChanges">
                Cancel
            </x-lb.element.button.text>
            <x-lb.element.button.primary type="submit">
                Delete
            </x-lb.element.button.primary>
        @break

        {{ $slot }}

        @default
    @endswitch



</div>
