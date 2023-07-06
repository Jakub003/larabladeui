@props([
    'baseClass' => 'text-sm text-red-600 leading-5',
    'class' => 'mt-1',
    'for',
])

@error($for)
    <p {{ $attributes->merge(['class' => $baseClass . ' ' . $class]) }}>
        {{ $message }}
    </p>
@enderror

<div class="leading">

</div>
