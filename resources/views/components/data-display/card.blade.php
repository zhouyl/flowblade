@php
    // Size mappings for padding
    $sizes = [
        'xs' => 'p-2',
        'sm' => 'p-3',
        'md' => 'p-4',
        'lg' => 'p-6',
        'xl' => 'p-8',
    ];
    
    // Variant styles
    $variants = [
        'elevated' => 'bg-white shadow-md border border-gray-200',
        'outline' => 'bg-white border border-gray-300',
        'filled' => 'bg-gray-50 border border-gray-200',
        'ghost' => 'bg-transparent',
    ];
    
    $cardClass = implode(' ', array_filter([
        'rounded-lg overflow-hidden',
        $variants[$variant] ?? $variants['elevated'],
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => $cardClass]) }}
    x-data="{
        size: '{{ $size }}',
        variant: '{{ $variant }}'
    }"
>
    {{ $slot }}
</div>

