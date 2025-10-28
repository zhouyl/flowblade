@php
// Base classes for device mockup
$baseClasses = 'relative mx-auto';

// Device-specific classes
$deviceClasses = match($device) {
    'mobile' => $orientation === 'landscape' 
        ? 'w-full max-w-[568px] h-[320px]' 
        : 'w-full max-w-[375px] h-[667px]',
    'tablet' => $orientation === 'landscape'
        ? 'w-full max-w-[1024px] h-[768px]'
        : 'w-full max-w-[768px] h-[1024px]',
    'laptop' => 'w-full max-w-[1280px] h-[720px]',
    'desktop' => 'w-full max-w-[1920px] h-[1080px]',
    default => 'w-full max-w-[375px] h-[667px]',
};

// Border and frame classes
$frameClasses = 'border-[14px]';
if ($dark) {
    $frameClasses .= ' border-gray-800 bg-gray-800';
} else {
    $frameClasses .= ' border-gray-300 bg-gray-300';
}

if ($rounded) {
    if ($device === 'mobile') {
        $frameClasses .= ' rounded-[2.5rem]';
    } elseif ($device === 'tablet') {
        $frameClasses .= ' rounded-[3rem]';
    } elseif ($device === 'laptop' || $device === 'desktop') {
        $frameClasses .= ' rounded-t-xl rounded-b-2xl';
    }
}

if ($shadow) {
    $frameClasses .= ' shadow-xl';
}

// Screen classes
$screenClasses = 'relative overflow-hidden w-full h-full bg-white dark:bg-gray-900';
if ($rounded) {
    if ($device === 'mobile') {
        $screenClasses .= ' rounded-[1.5rem]';
    } elseif ($device === 'tablet') {
        $screenClasses .= ' rounded-[2rem]';
    } elseif ($device === 'laptop' || $device === 'desktop') {
        $screenClasses .= ' rounded-lg';
    }
}
@endphp

<div {{ $attributes->merge(['class' => $baseClasses.' '.$deviceClasses]) }}>
    {{-- Device Frame --}}
    <div class="{{ $frameClasses }}">
        {{-- Screen Content --}}
        <div class="{{ $screenClasses }}">
            {{ $slot }}
        </div>
    </div>
    
    @if($device === 'mobile' && $orientation === 'portrait')
        {{-- Home Button for Mobile Portrait --}}
        <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gray-400 dark:bg-gray-600 rounded-full"></div>
    @endif
    
    @if($device === 'laptop' || $device === 'desktop')
        {{-- Laptop/Desktop Stand --}}
        <div class="relative mx-auto {{ $dark ? 'bg-gray-800' : 'bg-gray-300' }} {{ $rounded ? 'rounded-b-xl' : '' }} {{ $shadow ? 'shadow-md' : '' }}" style="width: 90%; height: 24px;"></div>
        <div class="relative mx-auto {{ $dark ? 'bg-gray-900' : 'bg-gray-400' }} {{ $rounded ? 'rounded-b-xl' : '' }}" style="width: 50%; height: 8px;"></div>
    @endif
</div>

