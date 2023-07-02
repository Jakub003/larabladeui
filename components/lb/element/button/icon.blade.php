@props([
    'class' => 'rounded-md h-10 w-10',
])

<button {{ $attributes->merge(['type' => 'button']) }}
    class="flex flex-col justify-center items-center text-center flex-shrink-0  bg-neutral-800  text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 {{ $class }}">
    {{ $slot }}
</button>
