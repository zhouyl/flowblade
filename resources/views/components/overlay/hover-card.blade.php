@php
    // Generate unique ID for hover card
    $hoverCardId = 'hover-card-' . uniqid();
    
    // Width configurations
    $widthConfig = [
        'sm' => 'w-64',   // 16rem
        'md' => 'w-80',   // 20rem
        'lg' => 'w-96',   // 24rem
        'xl' => 'w-[28rem]',  // 28rem
        '2xl' => 'w-[32rem]', // 32rem
    ];
    
    $cardWidth = $widthConfig[$width] ?? $widthConfig['md'];
    
    // Animation duration class
    $durationClass = $animation ? "duration-{$animation}" : 'duration-300';
@endphp

{{-- Trigger element (slot content) --}}
<span 
    data-popover-target="{{ $hoverCardId }}"
    data-popover-placement="{{ $placement }}"
    data-popover-trigger="hover"
    @if($delay)
    data-popover-delay="{{ $delay }}"
    @endif
    @if($offset)
    data-popover-offset="{{ $offset }}"
    @endif
    {{ $attributes->merge(['class' => 'inline-block']) }}
>
    {{ $trigger }}
</span>

{{-- Hover card content --}}
<div
    data-popover
    id="{{ $hoverCardId }}"
    role="tooltip"
    class="{{ $classes() }} invisible opacity-0 transition-opacity {{ $durationClass }} {{ $cardWidth }}"
>
    @if($title || $titleSlot = $slot->offsetGet('title'))
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">
            @if($titleSlot)
                {{ $titleSlot }}
            @else
                {{ $title }}
            @endif
        </h3>
    </div>
    @endif
    
    <div class="px-3 py-2">
        @if($contentSlot = $slot->offsetGet('content'))
            {{ $contentSlot }}
        @elseif($content)
            <p>{{ $content }}</p>
        @else
            {{ $slot }}
        @endif
    </div>
    
    @if($arrow)
    <div data-popper-arrow></div>
    @endif
</div>

