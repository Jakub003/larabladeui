@props([
    'activeClass' => ' bg-indigo-500 ',
    'inactiveClass' => ' bg-neutral-200 ',
    'initialize' => '',
])


@php
    if ($initialize !== '') {
        $initialBackgroundClass = $initialize ? $activeClass : $inactiveClass;
        $initialSpanTranslateClass = $initialize ? 'translate-x-5' : 'translate-x-0';
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
}" x-ref="switchButton" @click="switchOn = ! switchOn" x-init="function() {
    $refs.switchButton.firstChild.classList.remove(initialBackgroundClass);
    $refs.switchButton.lastChild.classList.remove(initialSpanTranslateClass);
}" role="switch"
    class="relative inline-flex h-5 w-10 flex-shrink-0 items-center flex-none">
    <span aria-hidden="true" :class="{
        [activeClass]: switchOn, [inactiveClass]: !switchOn }"
        class="absolute mx-auto h-4 w-9 rounded-full transition-colors ease-in-out duration-200 {{ $initialBackgroundClass }}"></span>
    <span :class="{ 'translate-x-5': switchOn, 'translate-x-0': !switchOn }" aria-hidden="true"
        class="absolute left-0 inline-block h-5 w-5 transform rounded-full border border-neutral-200 bg-white shadow transition-transform duration-200 ease-in-out {{ $initialSpanTranslateClass }}"></span>
</div>
