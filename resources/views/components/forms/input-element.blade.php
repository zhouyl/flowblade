@php
    // Size mappings for element
    $sizeClasses = [
        'xs' => 'px-2',
        'sm' => 'px-2.5',
        'md' => 'px-3',
        'lg' => 'px-4',
        'xl' => 'px-5',
    ];
    
    // Position based on placement
    $positionClasses = $placement === 'left'
        ? 'left-0'
        : 'right-0';
    
    $classes = implode(' ', array_filter([
        'absolute top-0 bottom-0',
        'flex items-center',
        'pointer-events-none',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $positionClasses,
    ]));
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>

