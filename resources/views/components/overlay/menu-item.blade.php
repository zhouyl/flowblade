@php
    // Base classes
    $baseClasses = 'block px-4 py-2 text-sm';
    
    // State classes
    $stateClasses = '';
    if ($disabled) {
        $stateClasses = 'text-gray-400 cursor-not-allowed dark:text-gray-500';
    } elseif ($danger) {
        $stateClasses = 'text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500 dark:hover:text-red-400';
    } elseif ($active) {
        $stateClasses = 'text-gray-900 bg-gray-100 dark:bg-gray-600 dark:text-white';
    } else {
        $stateClasses = 'text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white';
    }
    
    $classes = trim("{$baseClasses} {$stateClasses}");
    
    // Determine tag
    $tag = $href && !$disabled ? 'a' : 'button';
    $tagAttributes = $href && !$disabled ? ['href' => $href] : ['type' => 'button'];
    if ($disabled) {
        $tagAttributes['disabled'] = true;
    }
@endphp

<li>
    <{{ $tag }} 
        {{ $attributes->merge(array_merge(['class' => $classes], $tagAttributes)) }}
    >
        @if($icon)
        <span class="inline-flex items-center gap-2">
            @php
                $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
            @endphp
            <x-dynamic-component :component="$iconComponent" :name="$icon" class="w-4 h-4" />
            <span>{{ $slot }}</span>
        </span>
        @else
            {{ $slot }}
        @endif
    </{{ $tag }}>
</li>

