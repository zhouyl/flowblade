@php
    // Generate unique ID for modal
    $modalId = $attributes->get('id') ?? 'modal-' . uniqid();
    
    // Size configurations (max-width)
    $sizeConfig = [
        'sm' => 'max-w-sm',      // 24rem
        'md' => 'max-w-md',      // 28rem
        'lg' => 'max-w-lg',      // 32rem
        'xl' => 'max-w-xl',      // 36rem
        '2xl' => 'max-w-2xl',    // 42rem (default in Flowbite)
        '3xl' => 'max-w-3xl',    // 48rem
        '4xl' => 'max-w-4xl',    // 56rem
        '5xl' => 'max-w-5xl',    // 64rem
        '6xl' => 'max-w-6xl',    // 72rem
        '7xl' => 'max-w-7xl',    // 80rem
    ];
    
    $maxWidth = $sizeConfig[$size] ?? $sizeConfig['2xl'];
    
    // Placement data attribute mapping
    $placementMap = [
        'center' => 'center',
        'top-left' => 'top-left',
        'top-center' => 'top-center',
        'top-right' => 'top-right',
        'center-left' => 'center-left',
        'center-right' => 'center-right',
        'bottom-left' => 'bottom-left',
        'bottom-center' => 'bottom-center',
        'bottom-right' => 'bottom-right',
    ];
    
    $modalPlacement = $placementMap[$placement] ?? 'center';
@endphp

{{-- Modal element --}}
<div 
    id="{{ $modalId }}"
    tabindex="-1" 
    aria-hidden="true"
    @if($backdrop === 'static')
    data-modal-backdrop="static"
    @endif
    @if($modalPlacement !== 'center')
    data-modal-placement="{{ $modalPlacement }}"
    @endif
    {{ $attributes->except(['id'])->merge([
        'class' => 'hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full'
    ]) }}
>
    <div class="relative p-4 w-full {{ $maxWidth }} max-h-full">
        {{-- Modal content --}}
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            @if($title || $showClose || $headerSlot = $slot->offsetGet('header'))
            {{-- Modal header --}}
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                @if($headerSlot)
                    {{ $headerSlot }}
                @else
                    @if($title)
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $title }}
                    </h3>
                    @endif
                    
                    @if($showClose)
                    <button 
                        type="button" 
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                        data-modal-hide="{{ $modalId }}"
                    >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    @endif
                @endif
            </div>
            @endif
            
            {{-- Modal body --}}
            <div class="p-4 md:p-5 space-y-4">
                @if($bodySlot = $slot->offsetGet('body'))
                    {{ $bodySlot }}
                @else
                    {{ $slot }}
                @endif
            </div>
            
            @if($footerSlot = $slot->offsetGet('footer'))
            {{-- Modal footer --}}
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                {{ $footerSlot }}
            </div>
            @endif
        </div>
    </div>
</div>

