@props([
    'activeClass' => ' bg-emerald-500 ',
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
            <svg fill="none" viewBox="0 0 12 12">
                <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div class="h-4 w-4 text-neutral-500 transition-transform duration-200 ease-in-out" x-show="switchOn"
            style="{{ $initialize ? '' : 'display: none;' }}">
            <svg fill="currentColor" viewBox="0 0 12 12">
                <path
                    d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z" />
            </svg>
        </div>
    </span>
</div>
