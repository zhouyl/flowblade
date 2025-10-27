@php
    // Size classes
    $sizeClasses = [
        'xs' => 'h-1',
        'sm' => 'h-2',
        'md' => 'h-3',
        'lg' => 'h-4',
        'xl' => 'h-6',
    ];
    
    // Color classes
    $colorClasses = [
        'primary' => 'bg-blue-600',
        'secondary' => 'bg-gray-600',
        'success' => 'bg-green-600',
        'warning' => 'bg-yellow-600',
        'danger' => 'bg-red-600',
        'info' => 'bg-cyan-600',
        'gray' => 'bg-gray-400',
    ];
    
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    $colorClass = $colorClasses[$color] ?? $colorClasses['primary'];
    $percentage = $getPercentage();
@endphp

<div {{ $attributes->merge(['class' => 'w-full']) }}>
    @if($showValue || $label)
    <div class="flex items-center justify-between mb-2">
        @if($label)
        <span class="text-sm font-medium text-gray-700">{{ $label }}</span>
        @endif
        
        @if($showValue && !$indeterminate)
        <span class="text-sm font-medium text-gray-700">{{ number_format($percentage, 0) }}%</span>
        @endif
    </div>
    @endif
    
    <div 
        class="w-full bg-gray-200 rounded-full overflow-hidden {{ $sizeClass }}"
        role="progressbar"
        aria-valuenow="{{ $indeterminate ? null : $value }}"
        aria-valuemin="0"
        aria-valuemax="{{ $max }}"
        @if($label) aria-label="{{ $label }}" @endif
    >
        @if($indeterminate)
        {{-- Indeterminate progress --}}
        <div class="h-full {{ $colorClass }} animate-pulse"></div>
        @else
        {{-- Determinate progress --}}
        <div 
            class="h-full {{ $colorClass }} transition-all duration-300 ease-out
                @if($variant === 'striped' || $variant === 'animated')
                    bg-gradient-to-r from-transparent via-white/20 to-transparent bg-[length:200%_100%]
                @endif
                @if($variant === 'animated')
                    animate-[shimmer_2s_linear_infinite]
                @endif
            "
            style="width: {{ $percentage }}%"
        ></div>
        @endif
    </div>
</div>

@if($variant === 'animated')
<style>
    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }
</style>
@endif

