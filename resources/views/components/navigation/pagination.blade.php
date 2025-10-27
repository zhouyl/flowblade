@php
    // Size classes
    $sizeClasses = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];
    
    // Button size classes
    $buttonSizes = [
        'xs' => 'px-2 py-1 text-xs',
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-5 py-2.5 text-lg',
        'xl' => 'px-6 py-3 text-xl',
    ];
    
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    $buttonSize = $buttonSizes[$size] ?? $buttonSizes['md'];
    
    $prevText = $prevLabel ?? 'Previous';
    $nextText = $nextLabel ?? 'Next';
    
    $hasPrev = $currentPage > 1;
    $hasNext = $currentPage < $totalPages;
    
    $pageRange = $variant === 'simple' ? [] : $this->getPageRange();
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center gap-2 ' . $sizeClass]) }}>
    @if($variant === 'verbose')
    {{-- Verbose variant: Stats + Jump to page on left, pagination on right --}}
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center gap-4">
            {{-- Stats text --}}
            <div class="text-sm text-gray-600">
                Showing <span class="font-medium">{{ $this->getStartItem() }}</span> 
                to <span class="font-medium">{{ $this->getEndItem() }}</span> 
                of <span class="font-medium">{{ $total }}</span> results
            </div>
            
            {{-- Jump to page --}}
            <div class="flex items-center gap-2" x-data="{ jumpPage: {{ $currentPage }} }">
                <label for="jump-page" class="text-sm text-gray-600">Go to:</label>
                <input 
                    type="number" 
                    id="jump-page"
                    x-model="jumpPage"
                    min="1" 
                    max="{{ $totalPages }}"
                    class="w-20 px-2 py-1 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    @keydown.enter="$dispatch('page-change', { page: parseInt(jumpPage) })"
                />
                <button 
                    type="button"
                    @click="$dispatch('page-change', { page: parseInt(jumpPage) })"
                    class="px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    Go
                </button>
            </div>
        </div>
        
        {{-- Pagination buttons --}}
        <div class="flex items-center gap-1">
            @include('flowblade::components.navigation.pagination-buttons')
        </div>
    </div>
    
    @elseif($variant === 'simple')
    {{-- Simple variant: Only prev/next buttons --}}
    <button 
        type="button"
        @if($hasPrev) @click="$dispatch('page-change', { page: {{ $currentPage - 1 }} })" @endif
        class="{{ $buttonSize }} font-medium rounded-md transition-colors
            {{ $hasPrev 
                ? 'text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500' 
                : 'text-gray-400 bg-gray-100 border border-gray-200 cursor-not-allowed' }}"
        @if(!$hasPrev) disabled @endif
    >
        {{ $prevText }}
    </button>
    
    <button 
        type="button"
        @if($hasNext) @click="$dispatch('page-change', { page: {{ $currentPage + 1 }} })" @endif
        class="{{ $buttonSize }} font-medium rounded-md transition-colors
            {{ $hasNext 
                ? 'text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500' 
                : 'text-gray-400 bg-gray-100 border border-gray-200 cursor-not-allowed' }}"
        @if(!$hasNext) disabled @endif
    >
        {{ $nextText }}
    </button>
    
    @else
    {{-- Default variant: Full pagination with page numbers --}}
    @include('flowblade::components.navigation.pagination-buttons')
    @endif
</div>

{{-- Pagination buttons partial --}}
@pushOnce('pagination-buttons-partial')
@php
// This is just a marker to ensure the partial is only defined once
@endphp
@endPushOnce

