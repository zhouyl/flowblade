@php
    // Size mappings for input group
    $sizeClasses = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];
    
    $classes = implode(' ', array_filter([
        'flex items-stretch w-full',
        $sizeClasses[$size] ?? $sizeClasses['md'],
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} data-input-group data-size="{{ $size }}">
    {{ $slot }}
</div>

