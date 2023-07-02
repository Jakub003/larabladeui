@props(['color' => 'gray', 'label' => 'Badge'])

@php
    $colors = [
        'concrete' => 'bg-gray-400/10 text-gray-400  ring-gray-400/20',
        'cherry' => 'bg-red-400/10 text-red-400  ring-red-400/20',
        'sunflower' => 'bg-yellow-400/10 text-yellow-500  ring-yellow-400/20',
        'carrot' => 'bg-orange-400/10 text-orange-500  ring-orange-400/20',
        'emerald' => 'bg-green-500/10 text-green-400  ring-green-500/20',
        'river' => 'bg-blue-400/10 text-blue-400  ring-blue-400/30',
        'indigo' => 'bg-indigo-400/10 text-indigo-400  ring-indigo-400/30',
        'clouds' => 'bg-purple-400/10 text-purple-400  ring-purple-400/30',
        'asphalt' => 'bg-pink-400/10 text-pink-400  ring-pink-400/20',
    ];
@endphp

<span
    class="inline-flex space-x-1 items-center rounded-md px-2 h-6 text-xs font-medium ring-1 ring-inset first:ml-0 ml-1 mr-1 my-1 {{ $colors[$color] ?? $colors['gray'] }}">
    {{ $slot }}
    <p>{{ $label }}</p>
</span>
