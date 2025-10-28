@php
    // Size classes
    $sizeClasses = [
        'xs' => ['size' => 40, 'text' => 'text-xs'],
        'sm' => ['size' => 56, 'text' => 'text-sm'],
        'md' => ['size' => 80, 'text' => 'text-base'],
        'lg' => ['size' => 112, 'text' => 'text-lg'],
        'xl' => ['size' => 144, 'text' => 'text-xl'],
    ];
    
    // Color classes
    $colorClasses = [
        'primary' => ['stroke' => 'stroke-blue-600', 'text' => 'text-blue-600'],
        'secondary' => ['stroke' => 'stroke-gray-600', 'text' => 'text-gray-600'],
        'success' => ['stroke' => 'stroke-green-600', 'text' => 'text-green-600'],
        'warning' => ['stroke' => 'stroke-yellow-600', 'text' => 'text-yellow-600'],
        'danger' => ['stroke' => 'stroke-red-600', 'text' => 'text-red-600'],
        'info' => ['stroke' => 'stroke-cyan-600', 'text' => 'text-cyan-600'],
        'gray' => ['stroke' => 'stroke-gray-400', 'text' => 'text-gray-400'],
    ];
    
    $sizeConfig = $sizeClasses[$size] ?? $sizeClasses['md'];
    $colorConfig = $colorClasses[$color] ?? $colorClasses['primary'];
    $percentage = $getPercentage();
    
    // SVG circle calculations
    $svgSize = $sizeConfig['size'];
    $center = $svgSize / 2;
    $radius = ($svgSize - $thickness * 2) / 2;
    $circumference = 2 * pi() * $radius;
    $offset = $circumference - ($percentage / 100) * $circumference;
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex flex-col items-center gap-2']) }}>
    <div 
        class="relative"
        style="width: {{ $svgSize }}px; height: {{ $svgSize }}px"
        role="progressbar"
        aria-valuenow="{{ $indeterminate ? null : $value }}"
        aria-valuemin="0"
        aria-valuemax="{{ $max }}"
        @if($label) aria-label="{{ $label }}" @endif
    >
        <svg 
            class="transform -rotate-90"
            width="{{ $svgSize }}" 
            height="{{ $svgSize }}"
            viewBox="0 0 {{ $svgSize }} {{ $svgSize }}"
        >
            {{-- Background circle --}}
            <circle
                cx="{{ $center }}"
                cy="{{ $center }}"
                r="{{ $radius }}"
                stroke-width="{{ $thickness }}"
                class="stroke-gray-200 fill-none"
            />
            
            @if($indeterminate)
            {{-- Indeterminate circle --}}
            <circle
                cx="{{ $center }}"
                cy="{{ $center }}"
                r="{{ $radius }}"
                stroke-width="{{ $thickness }}"
                class="{{ $colorConfig['stroke'] }} fill-none"
                stroke-dasharray="{{ $circumference }}"
                stroke-dashoffset="{{ $circumference * 0.75 }}"
                stroke-linecap="round"
                style="animation: progress-circle-spin 1.5s ease-in-out infinite"
            />
            @else
            {{-- Progress circle --}}
            <circle
                cx="{{ $center }}"
                cy="{{ $center }}"
                r="{{ $radius }}"
                stroke-width="{{ $thickness }}"
                class="{{ $colorConfig['stroke'] }} fill-none transition-all duration-300 ease-out"
                stroke-dasharray="{{ $circumference }}"
                stroke-dashoffset="{{ $offset }}"
                stroke-linecap="round"
            />
            @endif
        </svg>
        
        @if($showValue && !$indeterminate)
        {{-- Center value display --}}
        <div class="absolute inset-0 flex items-center justify-center">
            <span class="font-semibold {{ $sizeConfig['text'] }} {{ $colorConfig['text'] }}">
                {{ number_format($percentage, 0) }}%
            </span>
        </div>
        @endif
    </div>
    
    @if($label)
    <span class="text-sm font-medium text-gray-700 text-center">{{ $label }}</span>
    @endif
</div>

@if($indeterminate)
<style>
    @keyframes progress-circle-spin {
        0% {
            stroke-dashoffset: {{ $circumference * 0.75 }};
            transform: rotate(0deg);
        }
        50% {
            stroke-dashoffset: {{ $circumference * 0.25 }};
            transform: rotate(180deg);
        }
        100% {
            stroke-dashoffset: {{ $circumference * 0.75 }};
            transform: rotate(360deg);
        }
    }
</style>
@endif

