@php
    // Size classes
    $sizeClasses = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-4 h-4',
        'md' => 'w-6 h-6',
        'lg' => 'w-8 h-8',
        'xl' => 'w-12 h-12',
    ];
    
    // Color classes
    $colorClasses = [
        'primary' => 'text-blue-600',
        'secondary' => 'text-gray-600',
        'success' => 'text-green-600',
        'warning' => 'text-yellow-600',
        'danger' => 'text-red-600',
        'info' => 'text-cyan-600',
        'gray' => 'text-gray-400',
        'white' => 'text-white',
    ];
    
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    $colorClass = $colorClasses[$color] ?? $colorClasses['primary'];
@endphp

@if($variant === 'spinner')
{{-- Default Spinner --}}
<div 
    {{ $attributes->merge(['class' => 'inline-block ' . $sizeClass . ' ' . $colorClass]) }}
    role="status"
    aria-label="{{ $label }}"
>
    <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    <span class="sr-only">{{ $label }}</span>
</div>

@elseif($variant === 'dots')
{{-- Dots Spinner --}}
<div 
    {{ $attributes->merge(['class' => 'inline-flex items-center gap-1']) }}
    role="status"
    aria-label="{{ $label }}"
>
    @php
        $dotSizeClasses = [
            'xs' => 'w-1 h-1',
            'sm' => 'w-1.5 h-1.5',
            'md' => 'w-2 h-2',
            'lg' => 'w-3 h-3',
            'xl' => 'w-4 h-4',
        ];
        $dotSize = $dotSizeClasses[$size] ?? $dotSizeClasses['md'];
    @endphp
    
    <div class="{{ $dotSize }} {{ $colorClass }} bg-current rounded-full animate-bounce" style="animation-delay: 0ms"></div>
    <div class="{{ $dotSize }} {{ $colorClass }} bg-current rounded-full animate-bounce" style="animation-delay: 150ms"></div>
    <div class="{{ $dotSize }} {{ $colorClass }} bg-current rounded-full animate-bounce" style="animation-delay: 300ms"></div>
    <span class="sr-only">{{ $label }}</span>
</div>

@elseif($variant === 'pulse')
{{-- Pulse Spinner --}}
<div 
    {{ $attributes->merge(['class' => 'inline-block ' . $sizeClass . ' ' . $colorClass]) }}
    role="status"
    aria-label="{{ $label }}"
>
    <div class="w-full h-full bg-current rounded-full animate-pulse"></div>
    <span class="sr-only">{{ $label }}</span>
</div>

@elseif($variant === 'ring')
{{-- Ring Spinner --}}
<div 
    {{ $attributes->merge(['class' => 'inline-block ' . $sizeClass]) }}
    role="status"
    aria-label="{{ $label }}"
>
    <div class="w-full h-full border-4 border-gray-200 border-t-current {{ $colorClass }} rounded-full animate-spin"></div>
    <span class="sr-only">{{ $label }}</span>
</div>

@endif

