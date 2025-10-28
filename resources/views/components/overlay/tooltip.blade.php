@php
    // Generate unique ID for tooltip
    $tooltipId = 'tooltip-' . uniqid();
    
    // Style configurations
    $styleConfig = [
        'dark' => 'bg-gray-900 text-white dark:bg-gray-700',
        'light' => 'bg-white text-gray-900 border border-gray-200',
    ];
    
    $tooltipStyle = $styleConfig[$style] ?? $styleConfig['dark'];
    
    // Animation class
    $animationClass = $animation ? "transition-opacity duration-{$animation}" : '';
@endphp

{{-- Trigger element (slot content) --}}
<span 
    data-tooltip-target="{{ $tooltipId }}"
    data-tooltip-placement="{{ $placement }}"
    data-tooltip-trigger="{{ $trigger }}"
    @if($style === 'light')
    data-tooltip-style="light"
    @endif
    {{ $attributes->merge(['class' => 'inline-block']) }}
>
    {{ $slot }}
</span>

{{-- Tooltip content --}}
<div 
    id="{{ $tooltipId }}" 
    role="tooltip" 
    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium rounded-lg shadow-xs opacity-0 tooltip {{ $tooltipStyle }} {{ $animationClass }}"
>
    {{ $content }}
    
    @if($arrow)
    <div class="tooltip-arrow" data-popper-arrow></div>
    @endif
</div>

