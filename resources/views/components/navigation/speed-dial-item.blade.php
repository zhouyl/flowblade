@php
// Get icon component name from config
$iconComponent = config('flowblade.prefix') 
    ? config('flowblade.prefix').'.icon' 
    : 'icon';
@endphp

<div class="relative">
    @if($tooltip)
        <div 
            class="absolute right-14 top-1/2 -translate-y-1/2 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 whitespace-nowrap dark:bg-gray-700"
            data-dial-tooltip
        >
            {{ $tooltip }}
            <div class="absolute top-1/2 -translate-y-1/2 -right-1 w-2 h-2 bg-gray-900 rotate-45 dark:bg-gray-700"></div>
        </div>
    @endif
    
    <a 
        {{ $attributes->merge(['href' => $href, 'class' => 'flex justify-center items-center w-14 h-14 text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400 group']) }}
    >
        @if($icon)
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$icon" 
                class="w-5 h-5" 
            />
        @else
            {{ $slot }}
        @endif
        <span class="sr-only">{{ $tooltip }}</span>
    </a>
</div>

