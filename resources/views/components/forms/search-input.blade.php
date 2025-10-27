@php
    $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
    
    // Size mappings for input
    $sizeClasses = [
        'xs' => 'h-6 text-xs pl-7 pr-7',
        'sm' => 'h-8 text-sm pl-8 pr-8',
        'md' => 'h-10 text-base pl-10 pr-10',
        'lg' => 'h-12 text-lg pl-12 pr-12',
        'xl' => 'h-14 text-xl pl-14 pr-14',
    ];
    
    // Icon size mappings
    $iconSizes = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-4 h-4',
        'md' => 'w-5 h-5',
        'lg' => 'w-6 h-6',
        'xl' => 'w-7 h-7',
    ];
    
    // Icon position mappings
    $iconPositions = [
        'xs' => 'left-2',
        'sm' => 'left-2.5',
        'md' => 'left-3',
        'lg' => 'left-3.5',
        'xl' => 'left-4',
    ];
    
    // Clear button position mappings
    $clearPositions = [
        'xs' => 'right-1',
        'sm' => 'right-1.5',
        'md' => 'right-2',
        'lg' => 'right-2.5',
        'xl' => 'right-3',
    ];
    
    // Variant styles
    $variantClasses = [
        'outline' => 'border border-gray-300 bg-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500',
        'filled' => 'border-0 bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-500',
        'flushed' => 'border-0 border-b-2 border-gray-300 rounded-none bg-transparent focus:border-blue-500',
    ];
    
    // Invalid state
    $invalidClasses = $invalid
        ? 'border-red-500 focus:border-red-500 focus:ring-red-500'
        : '';
    
    // Disabled state
    $disabledClasses = $disabled
        ? 'opacity-50 cursor-not-allowed'
        : '';
    
    $classes = implode(' ', array_filter([
        'w-full rounded-md transition-colors duration-200',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $variantClasses[$variant] ?? $variantClasses['outline'],
        $invalidClasses,
        $disabledClasses,
    ]));
@endphp

<div class="relative" @if($showClear) x-data="{ value: '' }" @endif>
    <!-- Search Icon -->
    <div class="absolute {{ $iconPositions[$size] ?? $iconPositions['md'] }} top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
        <svg class="{{ $iconSizes[$size] ?? $iconSizes['md'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <!-- Input -->
    <input
        type="search"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($disabled) disabled @endif
        @if($readonly) readonly @endif
        @if($required) required @endif
        @if($invalid) aria-invalid="true" @endif
        @if($showClear) x-model="value" @endif
    />

    <!-- Clear Button -->
    @if($showClear)
    <button
        type="button"
        class="absolute {{ $clearPositions[$size] ?? $clearPositions['md'] }} top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"
        x-show="value.length > 0"
        x-cloak
        @click="value = ''; $el.previousElementSibling.focus()"
        aria-label="Clear search"
    >
        <svg class="{{ $iconSizes[$size] ?? $iconSizes['md'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    @endif
</div>

