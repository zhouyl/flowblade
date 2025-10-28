@php
// Get icon component name from config
$iconComponent = config('flowblade.prefix') 
    ? config('flowblade.prefix').'.icon' 
    : 'icon';

// Determine if we have content (text, icon, or slot)
$hasContent = $text || $icon || !empty(trim($slot));

// Border style classes
$borderStyles = match($variant) {
    'dashed' => 'border-dashed',
    'dotted' => 'border-dotted',
    default => 'border-solid',
};

// Orientation classes
if ($orientation === 'vertical') {
    $containerClasses = 'inline-flex h-full';
    $lineClasses = 'border-l '.$borderStyles.' border-gray-300 dark:border-gray-600';
} else {
    // Horizontal
    if ($hasContent) {
        $containerClasses = 'flex items-center';
        $lineClasses = 'flex-1 border-t '.$borderStyles.' border-gray-300 dark:border-gray-600';
        
        // Alignment classes for content
        $contentWrapperClasses = match($align) {
            'left' => 'flex items-center w-full',
            'right' => 'flex items-center w-full',
            default => 'flex items-center w-full',
        };
    } else {
        $containerClasses = 'w-full';
        $lineClasses = 'border-t '.$borderStyles.' border-gray-300 dark:border-gray-600';
    }
}
@endphp

@if($orientation === 'vertical')
    <div {{ $attributes->merge(['class' => $containerClasses]) }}>
        <div class="{{ $lineClasses }}"></div>
    </div>
@else
    @if($hasContent)
        <div {{ $attributes->merge(['class' => $containerClasses]) }}>
            @if($align === 'left' || $align === 'center')
                <div class="{{ $lineClasses }}"></div>
            @endif
            
            <div class="px-3 text-sm font-medium text-gray-500 dark:text-gray-400 whitespace-nowrap">
                @if($icon)
                    <x-dynamic-component 
                        :component="$iconComponent" 
                        :name="$icon" 
                        class="w-4 h-4" 
                    />
                @endif
                
                @if($text)
                    {{ $text }}
                @endif
                
                @if(!$text && !$icon)
                    {{ $slot }}
                @endif
            </div>
            
            @if($align === 'right' || $align === 'center')
                <div class="{{ $lineClasses }}"></div>
            @endif
        </div>
    @else
        <div {{ $attributes->merge(['class' => $containerClasses]) }}>
            <div class="{{ $lineClasses }}"></div>
        </div>
    @endif
@endif

