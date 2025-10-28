@php
    // Status color mapping
    $statusColors = [
        'online' => ['bg' => 'bg-green-500', 'text' => 'text-green-700', 'bgLight' => 'bg-green-100', 'border' => 'border-green-200'],
        'offline' => ['bg' => 'bg-gray-500', 'text' => 'text-gray-700', 'bgLight' => 'bg-gray-100', 'border' => 'border-gray-200'],
        'away' => ['bg' => 'bg-yellow-500', 'text' => 'text-yellow-700', 'bgLight' => 'bg-yellow-100', 'border' => 'border-yellow-200'],
        'busy' => ['bg' => 'bg-red-500', 'text' => 'text-red-700', 'bgLight' => 'bg-red-100', 'border' => 'border-red-200'],
        'success' => ['bg' => 'bg-green-500', 'text' => 'text-green-700', 'bgLight' => 'bg-green-100', 'border' => 'border-green-200'],
        'warning' => ['bg' => 'bg-yellow-500', 'text' => 'text-yellow-700', 'bgLight' => 'bg-yellow-100', 'border' => 'border-yellow-200'],
        'danger' => ['bg' => 'bg-red-500', 'text' => 'text-red-700', 'bgLight' => 'bg-red-100', 'border' => 'border-red-200'],
        'info' => ['bg' => 'bg-blue-500', 'text' => 'text-blue-700', 'bgLight' => 'bg-blue-100', 'border' => 'border-blue-200'],
    ];
    
    // Size classes for dot variant
    $dotSizes = [
        'xs' => 'w-1.5 h-1.5',
        'sm' => 'w-2 h-2',
        'md' => 'w-2.5 h-2.5',
        'lg' => 'w-3 h-3',
    ];
    
    // Text size classes
    $textSizes = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-sm',
        'lg' => 'text-base',
    ];
    
    // Padding classes for badge/pill variants
    $paddingSizes = [
        'xs' => 'px-2 py-0.5 text-xs',
        'sm' => 'px-2.5 py-0.5 text-xs',
        'md' => 'px-3 py-1 text-sm',
        'lg' => 'px-4 py-1.5 text-base',
    ];
    
    $colors = $statusColors[$status] ?? $statusColors['info'];
    $dotSize = $dotSizes[$size] ?? $dotSizes['md'];
    $textSize = $textSizes[$size] ?? $textSizes['md'];
    $paddingSize = $paddingSizes[$size] ?? $paddingSizes['md'];
@endphp

@if($variant === 'dot')
{{-- Dot variant --}}
<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2']) }}>
    <span class="relative flex {{ $dotSize }}">
        <span class="{{ $colors['bg'] }} rounded-full {{ $dotSize }}"></span>
        @if($pulse)
        <span class="absolute inline-flex h-full w-full rounded-full {{ $colors['bg'] }} opacity-75 animate-ping"></span>
        @endif
    </span>
    
    @if($label)
    <span class="{{ $textSize }} font-medium text-gray-700">{{ $label }}</span>
    @endif
    
    {{ $slot }}
</span>

@elseif($variant === 'badge')
{{-- Badge variant --}}
<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 rounded font-medium ' . $paddingSize . ' ' . $colors['bgLight'] . ' ' . $colors['text'] . ' ' . $colors['border'] . ' border']) }}>
    <span class="relative flex {{ $dotSize }}">
        <span class="{{ $colors['bg'] }} rounded-full {{ $dotSize }}"></span>
        @if($pulse)
        <span class="absolute inline-flex h-full w-full rounded-full {{ $colors['bg'] }} opacity-75 animate-ping"></span>
        @endif
    </span>
    
    @if($label)
    {{ $label }}
    @endif
    
    {{ $slot }}
</span>

@elseif($variant === 'pill')
{{-- Pill variant --}}
<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 rounded-full font-medium ' . $paddingSize . ' ' . $colors['bgLight'] . ' ' . $colors['text'] . ' ' . $colors['border'] . ' border']) }}>
    <span class="relative flex {{ $dotSize }}">
        <span class="{{ $colors['bg'] }} rounded-full {{ $dotSize }}"></span>
        @if($pulse)
        <span class="absolute inline-flex h-full w-full rounded-full {{ $colors['bg'] }} opacity-75 animate-ping"></span>
        @endif
    </span>
    
    @if($label)
    {{ $label }}
    @endif
    
    {{ $slot }}
</span>

@endif

