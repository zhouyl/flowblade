@php
    // Generate unique ID for popover
    $popoverId = 'popover-' . uniqid();
    
    // Width configurations
    $widthConfig = [
        'sm' => 'w-64',   // 16rem
        'md' => 'w-80',   // 20rem
        'lg' => 'w-96',   // 24rem
        'xl' => 'w-[28rem]',
        '2xl' => 'w-[32rem]',
    ];
    
    $popoverWidth = $widthConfig[$width] ?? $widthConfig['md'];
    
    // Animation class
    $animationClass = $animation ? "transition-opacity duration-{$animation}" : '';
    
    // Check if we have title or content slots
    $hasTitle = $title || isset($titleSlot);
    $hasContent = $content || isset($contentSlot) || $slot->isNotEmpty();
@endphp

{{-- Trigger element (slot content) --}}
<span 
    data-popover-target="{{ $popoverId }}"
    data-popover-placement="{{ $placement }}"
    data-popover-trigger="{{ $trigger }}"
    @if($offset)
    data-popover-offset="{{ $offset }}"
    @endif
    {{ $attributes->merge(['class' => 'inline-block']) }}
>
    {{ $trigger }}
</span>

{{-- Popover content --}}
<div 
    id="{{ $popoverId }}" 
    data-popover
    role="tooltip" 
    class="absolute z-10 invisible inline-block text-sm text-gray-500 {{ $animationClass }} bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 {{ $popoverWidth }} dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800"
>
    @if($hasTitle)
    <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-gray-900 dark:text-white">
            @if(isset($titleSlot))
                {{ $titleSlot }}
            @else
                {{ $title }}
            @endif
        </h3>
    </div>
    @endif
    
    <div class="px-3 py-2">
        @if(isset($contentSlot))
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

