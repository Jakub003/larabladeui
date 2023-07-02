@php
    $classes = 'absolute top-4 right-4 group cursor-pointer  rounded-lg p-2  text-neutral-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2 hover:bg-neutral-100 hover:text-primary-500 transition-all';
@endphp

<div class="absolute top-4 right-4 group">
    <div @click="$dispatch('close-modal')" {{ $attributes->merge(['class' => $classes]) }}>
        <span class="sr-only">Close modal</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4  group-hover:scale-150" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </div>
</div>
