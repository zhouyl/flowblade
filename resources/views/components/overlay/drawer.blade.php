@php
    // Generate unique ID for drawer
    $drawerId = $attributes->get('id') ?? 'drawer-' . uniqid();
    
    // Width configurations for left/right drawers
    $widthConfig = [
        'xs' => 'w-64',      // 16rem
        'sm' => 'w-80',      // 20rem
        'md' => 'w-96',      // 24rem
        'lg' => 'w-[28rem]', // 28rem
        'xl' => 'w-[32rem]', // 32rem
        '2xl' => 'w-[36rem]', // 36rem
        'full' => 'w-full',
    ];
    
    // Height configurations for top/bottom drawers
    $heightConfig = [
        'xs' => 'h-64',      // 16rem
        'sm' => 'h-80',      // 20rem
        'md' => 'h-96',      // 24rem
        'lg' => 'h-[28rem]', // 28rem
        'xl' => 'h-[32rem]', // 32rem
        '2xl' => 'h-[36rem]', // 36rem
        'full' => 'h-full',
    };
    
    // Determine size class based on placement
    $isHorizontal = in_array($placement, ['left', 'right']);
    $sizeClass = $isHorizontal 
        ? ($widthConfig[$width] ?? $widthConfig['md'])
        : ($heightConfig[$height] ?? $heightConfig['md']);
    
    // Position classes based on placement
    $positionClasses = [
        'left' => 'top-0 left-0 h-screen',
        'right' => 'top-0 right-0 h-screen',
        'top' => 'top-0 left-0 right-0 w-full',
        'bottom' => 'bottom-0 left-0 right-0 w-full',
    ];
    
    // Transform classes for hiding drawer
    $transformClasses = [
        'left' => '-translate-x-full',
        'right' => 'translate-x-full',
        'top' => '-translate-y-full',
        'bottom' => 'translate-y-full',
    ];
    
    $positionClass = $positionClasses[$placement] ?? $positionClasses['left'];
    $transformClass = $transformClasses[$placement] ?? $transformClasses['left'];
@endphp

{{-- Drawer element --}}
<div 
    id="{{ $drawerId }}"
    tabindex="-1" 
    aria-labelledby="{{ $drawerId }}-label"
    @if($edge)
    data-drawer-edge="true"
    @if($edgeOffset)
    data-drawer-edge-offset="{{ $edgeOffset }}"
    @endif
    @endif
    @if($backdrop === false)
    data-drawer-backdrop="false"
    @endif
    @if($bodyScrolling)
    data-drawer-body-scrolling="true"
    @endif
    {{ $attributes->except(['id'])->merge([
        'class' => "fixed {$positionClass} z-40 p-4 overflow-y-auto transition-transform {$transformClass} bg-white {$sizeClass} dark:bg-gray-800"
    ]) }}
>
    @if($title || $showClose || $headerSlot = $slot->offsetGet('header'))
    {{-- Drawer header --}}
    <div class="flex items-center justify-between mb-4">
        @if($headerSlot)
            {{ $headerSlot }}
        @else
            @if($title)
            <h5 id="{{ $drawerId }}-label" class="inline-flex items-center text-base font-semibold text-gray-500 dark:text-gray-400">
                {{ $title }}
            </h5>
            @endif
            
            @if($showClose)
            <button 
                type="button" 
                data-drawer-hide="{{ $drawerId }}" 
                aria-controls="{{ $drawerId }}" 
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white"
            >
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            @endif
        @endif
    </div>
    @endif
    
    {{-- Drawer body --}}
    <div class="drawer-body">
        @if($bodySlot = $slot->offsetGet('body'))
            {{ $bodySlot }}
        @else
            {{ $slot }}
        @endif
    </div>
    
    @if($footerSlot = $slot->offsetGet('footer'))
    {{-- Drawer footer --}}
    <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
        {{ $footerSlot }}
    </div>
    @endif
</div>

