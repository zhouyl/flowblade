@php
// Alignment classes
$alignmentClasses = $align === 'right' ? 'flex-row-reverse' : 'flex-row';
$bubbleAlignClasses = $align === 'right' ? 'items-end' : 'items-start';

// Color classes for bubble
$bubbleColorClasses = match($color) {
    'gray' => 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white',
    'blue' => 'bg-blue-500 text-white',
    'green' => 'bg-green-500 text-white',
    'red' => 'bg-red-500 text-white',
    'yellow' => 'bg-yellow-400 text-gray-900',
    'indigo' => 'bg-indigo-500 text-white',
    'purple' => 'bg-purple-500 text-white',
    'pink' => 'bg-pink-500 text-white',
    default => 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white',
};

// Tail classes
$tailClasses = '';
if ($tail) {
    if ($align === 'right') {
        $tailClasses = match($color) {
            'gray' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-gray-100 after:border-r-0 dark:after:border-t-gray-700',
            'blue' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-blue-500 after:border-r-0',
            'green' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-green-500 after:border-r-0',
            'red' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-red-500 after:border-r-0',
            'yellow' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-yellow-400 after:border-r-0',
            'indigo' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-indigo-500 after:border-r-0',
            'purple' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-purple-500 after:border-r-0',
            'pink' => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-pink-500 after:border-r-0',
            default => 'after:content-[""] after:absolute after:top-0 after:-right-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-gray-100 after:border-r-0 dark:after:border-t-gray-700',
        };
    } else {
        $tailClasses = match($color) {
            'gray' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-gray-100 after:border-l-0 dark:after:border-t-gray-700',
            'blue' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-blue-500 after:border-l-0',
            'green' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-green-500 after:border-l-0',
            'red' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-red-500 after:border-l-0',
            'yellow' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-yellow-400 after:border-l-0',
            'indigo' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-indigo-500 after:border-l-0',
            'purple' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-purple-500 after:border-l-0',
            'pink' => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-pink-500 after:border-l-0',
            default => 'after:content-[""] after:absolute after:top-0 after:-left-2 after:w-0 after:h-0 after:border-8 after:border-transparent after:border-t-gray-100 after:border-l-0 dark:after:border-t-gray-700',
        };
    }
}

// Get icon component name from config
$iconComponent = config('flowblade.prefix') 
    ? config('flowblade.prefix').'.icon' 
    : 'icon';
@endphp

<div {{ $attributes->merge(['class' => 'flex gap-2 '.$alignmentClasses]) }}>
    @if($avatar && $avatarSrc)
        <div class="flex-shrink-0">
            <img src="{{ $avatarSrc }}" alt="{{ $name }}" class="w-8 h-8 rounded-full" />
        </div>
    @endif
    
    <div class="flex flex-col {{ $bubbleAlignClasses }} max-w-xs sm:max-w-md">
        @if($name)
            <div class="text-xs font-medium text-gray-500 dark:text-gray-400 mb-1 px-1">
                {{ $name }}
            </div>
        @endif
        
        <div class="relative px-4 py-2 rounded-lg {{ $bubbleColorClasses }} {{ $tailClasses }}">
            {{ $slot }}
        </div>
        
        <div class="flex items-center gap-1 mt-1 px-1">
            @if($time)
                <span class="text-xs text-gray-500 dark:text-gray-400">{{ $time }}</span>
            @endif
            
            @if($read)
                <x-dynamic-component 
                    :component="$iconComponent" 
                    name="heroicons:check-circle" 
                    class="w-3 h-3 text-blue-500" 
                />
            @endif
        </div>
    </div>
</div>

