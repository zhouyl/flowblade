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
    
    // Default separator
    $defaultSeparator = $separator ?? '/';
@endphp

<nav {{ $attributes->merge(['class' => 'flex items-center ' . $sizeClass, 'aria-label' => 'Breadcrumb']) }}>
    <ol class="flex items-center gap-2" x-data="{ separator: '{{ $defaultSeparator }}' }">
        {{ $slot }}
    </ol>
</nav>

