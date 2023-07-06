@props([
    'activeClass' => ' bg-primary-500 ',
    'inactiveClass' => ' bg-neutral-200 ',
    'initialize' => '',
])

@php
    if ($initialize !== '') {
        $initialBackgroundClass = $initialize ? $activeClass : $inactiveClass;
        $initialSpanTranslateClass = $initialize ? 'translate-x-6' : 'translate-x-1';
    } else {
        $initialBackgroundClass = '';
        $initialSpanTranslateClass = '';
    }
@endphp

<div x-data="{
    activeClass: '{{ $activeClass }}',
    inactiveClass: '{{ $inactiveClass }}',
    initialBackgroundClass: '{{ $initialBackgroundClass }}',
    initialSpanTranslateClass: '{{ $initialSpanTranslateClass }}'
}" x-ref="switchButton" type="button" role="switch" @click="switchOn = ! switchOn"
    x-init="function() {
        $refs.switchButton.classList.remove(initialBackgroundClass);
        $refs.switchButton.firstChild.classList.remove(initialSpanTranslateClass);
    }" :aria-checked="switchOn.toString()"
    :class="{
        [activeClass]: switchOn, [inactiveClass]: !switchOn
    }"
    class="relative inline-flex ml-3  py-1 h-7 focus:outline-none rounded-full w-12 transition-colors flex-none {{ $initialBackgroundClass }}">
    <span :class="{ 'translate-x-6': switchOn, 'translate-x-1': !switchOn }"
        class="flex items-center justify-center w-5 h-5  bg-white rounded-full shadow-md transition-transform {{ $initialSpanTranslateClass }}">

        <div class="h-4 w-4 text-neutral-500 transition-transform duration-200 ease-in-out" x-show="!switchOn"
            style="{{ $initialize ? 'display: none;' : '' }}">
            {{ $inactiveIcon }}
        </div>

        <div class="h-4 w-4 text-neutral-500 transition-transform duration-200 ease-in-out" x-show="switchOn"
            style="{{ $initialize ? '' : 'display: none;' }}">
            {{ $activeIcon }}
        </div>
    </span>
</div>
