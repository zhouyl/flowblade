@php
    // Size classes
    $sizeClasses = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];
    
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    
    // Get first tab value if no default provided
    $initialValue = $defaultValue ?? 'tab-1';
@endphp

<div 
    {{ $attributes->merge(['class' => $sizeClass]) }}
    x-data="{ 
        activeTab: '{{ $initialValue }}',
        variant: '{{ $variant }}'
    }"
    @tab-change.window="activeTab = $event.detail.value"
>
    {{ $slot }}
</div>

