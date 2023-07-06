@props([
    'activeClass' => ' bg-indigo-500 ',
    'inactiveClass' => ' bg-neutral-200 ',
    'initialize' => '',
])

@php
    if ($initialize !== '') {
        $initialBackgroundClass = $initialize ? $activeClass : $inactiveClass;
        $initialSpanTranslateClass = $initialize ? 'translate-x-[18px]' : 'translate-x-0.5';
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
}" x-ref="switchButton" type="button" @click="switchOn = ! switchOn" x-init="function() {
    $refs.switchButton.classList.remove(initialBackgroundClass);
    $refs.switchButton.firstChild.classList.remove(initialSpanTranslateClass);
}"
    :class="{
        [activeClass]: switchOn, [inactiveClass]: !switchOn
    }" role="switch"
    class="relative inline-flex h-6 py-0.5 ml-4 focus:outline-none rounded-full w-10 transition-colors ease-in-out duration-200 flex-none {{ $initialBackgroundClass }}">
    <span :class="{ 'translate-x-[18px]': switchOn, 'translate-x-0.5': !switchOn }"
        class="w-5 h-5 bg-white rounded-full shadow-md transition-transform duration-200 ease-in-out {{ $initialSpanTranslateClass }}"></span>
</div>
