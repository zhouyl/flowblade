@php
    // Button size classes
    $buttonSizes = [
        'xs' => 'px-2 py-1 text-xs min-w-[28px]',
        'sm' => 'px-3 py-1.5 text-sm min-w-[32px]',
        'md' => 'px-4 py-2 text-base min-w-[40px]',
        'lg' => 'px-5 py-2.5 text-lg min-w-[48px]',
        'xl' => 'px-6 py-3 text-xl min-w-[56px]',
    ];
    
    $buttonSize = $buttonSizes[$size] ?? $buttonSizes['md'];
    
    $prevText = $prevLabel ?? 'Previous';
    $nextText = $nextLabel ?? 'Next';
    
    $hasPrev = $currentPage > 1;
    $hasNext = $currentPage < $totalPages;
@endphp

{{-- Previous button --}}
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

@if($showEdges && $pageRange[0] !== 1)
{{-- First page button --}}
<button 
    type="button"
    @click="$dispatch('page-change', { page: 1 })"
    class="{{ $buttonSize }} font-medium rounded-md transition-colors text-center
        {{ $currentPage === 1 
            ? 'text-white bg-blue-600 border border-blue-600' 
            : 'text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500' }}"
>
    1
</button>
@endif

{{-- Page numbers --}}
@foreach($pageRange as $page)
    @if($page === '...')
        <span class="{{ $buttonSize }} text-gray-400 flex items-center justify-center">...</span>
    @else
        <button 
            type="button"
            @if($page !== $currentPage) @click="$dispatch('page-change', { page: {{ $page }} })" @endif
            class="{{ $buttonSize }} font-medium rounded-md transition-colors text-center
                {{ $page === $currentPage 
                    ? 'text-white bg-blue-600 border border-blue-600' 
                    : 'text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500' }}"
            @if($page === $currentPage) disabled @endif
        >
            {{ $page }}
        </button>
    @endif
@endforeach

@if($showEdges && end($pageRange) !== $totalPages && $totalPages > 1)
{{-- Last page button --}}
<button 
    type="button"
    @click="$dispatch('page-change', { page: {{ $totalPages }} })"
    class="{{ $buttonSize }} font-medium rounded-md transition-colors text-center
        {{ $currentPage === $totalPages 
            ? 'text-white bg-blue-600 border border-blue-600' 
            : 'text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500' }}"
>
    {{ $totalPages }}
</button>
@endif

{{-- Next button --}}
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

