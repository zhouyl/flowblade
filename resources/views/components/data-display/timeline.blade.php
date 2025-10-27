@php
    // Size mappings
    $sizes = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];
    
    $containerClass = implode(' ', array_filter([
        'relative',
        $sizes[$size] ?? $sizes['md'],
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => $containerClass]) }}
    x-data="{
        size: '{{ $size }}',
        color: '{{ $color }}',
        variant: '{{ $variant }}'
    }"
>
    {{ $slot }}
</div>

