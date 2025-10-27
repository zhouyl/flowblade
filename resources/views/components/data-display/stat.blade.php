@php
    // Trend colors
    $trendColors = [
        'up' => 'text-green-600',
        'down' => 'text-red-600',
        'neutral' => 'text-gray-600',
    ];
    
    // Trend icons
    $trendIcons = [
        'up' => 'heroicons:arrow-trending-up',
        'down' => 'heroicons:arrow-trending-down',
        'neutral' => 'heroicons:minus',
    ];
    
    $trendColor = $trend ? ($trendColors[$trend] ?? $trendColors['neutral']) : '';
    $trendIcon = $trend ? ($trendIcons[$trend] ?? $trendIcons['neutral']) : '';
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-col']) }}>
    @if($label || $labelSlot ?? false)
    <div class="text-sm font-medium text-gray-600 mb-1">
        @if($label)
            {{ $label }}
        @else
            {{ $labelSlot ?? '' }}
        @endif
    </div>
    @endif
    
    <div class="flex items-center gap-3">
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$icon" 
                class="w-6 h-6 text-blue-600"
            />
        </div>
        @endif
        
        <div class="flex-1">
            @if($value || $valueSlot ?? false)
            <div class="text-3xl font-bold text-gray-900">
                @if($value)
                    {{ $value }}
                @else
                    {{ $valueSlot ?? '' }}
                @endif
            </div>
            @endif
            
            @if($slot->isNotEmpty())
            <div>
                {{ $slot }}
            </div>
            @endif
            
            @if($trend && $trendValue)
            <div class="flex items-center gap-1 mt-1">
                @php
                    $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
                @endphp
                <x-dynamic-component 
                    :component="$iconComponent" 
                    :name="$trendIcon" 
                    class="w-4 h-4 {{ $trendColor }}"
                />
                <span class="text-sm font-medium {{ $trendColor }}">{{ $trendValue }}</span>
            </div>
            @endif
            
            @if($helpText || $helpTextSlot ?? false)
            <div class="text-sm text-gray-500 mt-1">
                @if($helpText)
                    {{ $helpText }}
                @else
                    {{ $helpTextSlot ?? '' }}
                @endif
            </div>
            @endif
        </div>
    </div>
</div>

