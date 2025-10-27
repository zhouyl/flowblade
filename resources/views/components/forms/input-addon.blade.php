@php
    // Size mappings for addon
    $sizeClasses = [
        'xs' => 'px-2 py-1 text-xs',
        'sm' => 'px-2.5 py-1.5 text-sm',
        'md' => 'px-3 py-2 text-sm',
        'lg' => 'px-4 py-2.5 text-base',
        'xl' => 'px-5 py-3 text-base',
    ];
    
    // Border radius based on placement
    $radiusClasses = $placement === 'left'
        ? 'rounded-l-md'
        : 'rounded-r-md';
    
    $classes = implode(' ', array_filter([
        'inline-flex items-center',
        'bg-gray-50 border border-gray-300',
        'text-gray-500',
        'whitespace-nowrap',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $radiusClasses,
    ]));
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>

