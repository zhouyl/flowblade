@php
// Get icon component name from config
$iconComponent = config('flowblade.prefix') 
    ? config('flowblade.prefix').'.icon' 
    : 'icon';
@endphp

<li>
    <a 
        {{ $attributes->merge(['href' => $href, 'class' => 'flex items-start p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group']) }}
    >
        @if($icon)
            <div class="flex-shrink-0">
                <x-dynamic-component 
                    :component="$iconComponent" 
                    :name="$icon" 
                    class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" 
                />
            </div>
        @endif
        
        <div class="{{ $icon ? 'ml-3' : '' }}">
            @if($title)
                <div class="font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">
                    {{ $title }}
                </div>
            @endif
            
            @if($description)
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    {{ $description }}
                </div>
            @endif
            
            @if(!$title && !$description)
                {{ $slot }}
            @endif
        </div>
    </a>
</li>

