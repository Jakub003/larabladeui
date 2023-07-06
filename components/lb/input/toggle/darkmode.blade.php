@props([
    'initialize' => '',
])

@php
    if ($initialize !== '') {
        $initialBackgroundClass = $initialize ? 'bg-neutral-700' : 'bg-neutral-200';
        $initialSpanTranslateClass = $initialize ? 'translate-x-8 bg-neutral-600' : 'translate-x-0 bg-white';
    } else {
        $initialSpanTranslateClass = '';
        $initialBackgroundClass = '';
    }
@endphp

<div x-data="{
    initialBackgroundClass: '{{ $initialBackgroundClass }}',
    initialSpanTranslateClass: '{{ $initialSpanTranslateClass }}',
}" x-ref="switchButton" type="button" role="switch" @click="switchOn = ! switchOn"
    x-init="function() {
        if (switchOn) {
            $refs.switchButton.classList.remove('bg-neutral-200');
            $refs.switchSpan.classList.remove('translate-x-0');
        } else {
            $refs.switchButton.classList.remove('bg-neutral-700');
            $refs.switchSpan.classList.remove('translate-x-8');
        }
    }" :aria-checked="switchOn.toString()"
    :class="{
        'bg-neutral-700': switchOn,
        'bg-neutral-200': !switchOn
    }" x-ref="switchButton"
    type="button" role="switch" @click="switchOn = ! switchOn" :aria-checked="switchOn.toString()"
    class="relative inline-flex  p-1.5 h-10 focus:outline-none rounded-full duration-200 ease-in-out transition-colors w-[72px] flex-none {{ $initialBackgroundClass }}">
    <span x-ref="switchSpan" :class="switchOn ? 'translate-x-8 bg-neutral-600' : 'translate-x-0 bg-white'"
        class="flex items-center justify-center p-1  rounded-full shadow-md transition-transform {{ $initialSpanTranslateClass }}">

        <div class="h-5 w-5 duration-200 ease-in-out transition-colors text-neutral-400" x-show="!switchOn"
            style="{{ $initialize ? 'display: none;' : '' }}">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                    d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z">
                </path>
            </svg>
        </div>

        <div class="h-5 w-5 duration-200 ease-in-out transition-colors text-primary-500" x-show="switchOn"
            style="{{ $initialize ? '' : 'display: none;' }}">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M7.455 2.004a.75.75 0 01.26.77 7 7 0 009.958 7.967.75.75 0 011.067.853A8.5 8.5 0 116.647 1.921a.75.75 0 01.808.083z">
                </path>
            </svg>
        </div>
    </span>
</div>
