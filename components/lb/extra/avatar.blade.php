@props([
    'name' => 'name',
    'color' => 'blue',
    'src' => '',
    'size' => 'md',
])

@php
    $colors = [
        'clouds' => [
            'bg' => 'bg-[#ecf0f1]',
            'text' => 'text-[#34495e]',
        ],
        'concrete' => [
            'bg' => 'bg-[#95a5a6]',
            'text' => 'text-[#ecf0f1]',
        ],
        'asphalt' => [
            'bg' => 'bg-[#34495e]',
            'text' => 'text-[#ecf0f1]',
        ],
    
        'sunflower' => [
            'bg' => 'bg-[#f1c40f]',
            'text' => 'text-[#ecf0f1]',
        ],
        'carrot' => [
            'bg' => 'bg-[#e67e22]',
            'text' => 'text-[#ecf0f1]',
        ],
        'cherry' => [
            'bg' => 'bg-[#e74c3c]',
            'text' => 'text-[#ecf0f1]',
        ],
        'emerald' => [
            'bg' => 'bg-[#10b981]',
            'text' => 'text-[#ecf0f1]',
        ],
        'river' => [
            'bg' => 'bg-[#3b82f6]',
            'text' => 'text-[#ecf0f1]',
        ],
        'indigo' => [
            'bg' => 'bg-[#8b5cf6]',
            'text' => 'text-[#ecf0f1]',
        ],
    ];
    
    $defaultColor = [
        'bg' => 'bg-[#10b981]', // Update these values as per your color definition
        'text' => 'text-[#ecf0f1]', // Update these values as per your color definition
    ];
    
    $colorData = $colors[$color] ?? $defaultColor;
    
    $sizes = [
        'xs' => 'h-6 w-6 text-xs',
        'sm' => 'h-8 w-8 text-xs',
        'md' => 'h-10 w-10 text-base',
        'lg' => 'h-12 w-12 text-lg',
        'xl' => 'h-14 w-14 text-xl',
    ];
    
    $style = $colorData['bg'] . ' ' . $colorData['text'] . ' ' . $sizes[$size];
@endphp

<div>
    @if ($src)
        <img src="{{ $src }}" alt="{{ $name . ' avatar' }}"
            class="{{ $sizes[$size] }} rounded-full flex flex-none" alt="{{ $name . ' avatar' }}">
    @else
        <div class="flex flex-none items-center justify-center leading-6 font-semibold rounded-full {{ $style }}">
            <span class="capitalize">
                {{ substr($name, 0, 1) }}
            </span>
        </div>
    @endif
</div>
