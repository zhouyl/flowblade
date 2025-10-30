@php
$modalId = $attributes->get('id') ?? 'modal-' . uniqid();

$sizeConfig = [
    'sm' => 'max-w-sm',
    'md' => 'max-w-md',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    '2xl' => 'max-w-2xl',
    '3xl' => 'max-w-3xl',
    '4xl' => 'max-w-4xl',
    '5xl' => 'max-w-5xl',
    '6xl' => 'max-w-6xl',
    '7xl' => 'max-w-7xl',
];

$maxWidth = $sizeConfig[$size] ?? $sizeConfig['2xl'];

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
        'class' => $classes()
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

