@php
    // Generate unique ID for collapse target
    $groupId = 'sidebar-group-' . uniqid();
    
    // Get component prefix from config
    $prefix = config('flowblade.prefix', 'flowblade');
@endphp

<li>
    <button 
        type="button" 
        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" 
        aria-controls="{{ $groupId }}" 
        data-collapse-toggle="{{ $groupId }}"
        {{ $attributes }}
    >
        @if($icon)
            <x-dynamic-component 
                :component="$prefix . '::icon'" 
                :name="$icon" 
                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            />
        @endif
        
        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $title }}</span>
        
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
    </button>
    
    <ul id="{{ $groupId }}" class="{{ $open ? '' : 'hidden' }} py-2 space-y-2">
        {{ $slot }}
    </ul>
</li>

