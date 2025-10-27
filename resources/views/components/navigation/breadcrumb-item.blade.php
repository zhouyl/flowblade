@php
    $isLink = !$current && $href;
    $baseClasses = 'flex items-center gap-1.5';
    $linkClasses = $isLink ? 'text-blue-600 hover:text-blue-700 hover:underline transition-colors' : '';
    $currentClasses = $current ? 'text-gray-900 font-medium' : 'text-gray-600';
    $itemClasses = $baseClasses . ' ' . ($isLink ? $linkClasses : $currentClasses);
@endphp

<li {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    @if($isLink)
    <a href="{{ $href }}" class="{{ $itemClasses }}">
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component 
            :component="$iconComponent" 
            :name="$icon" 
            class="w-4 h-4"
        />
        @endif
        <span>{{ $slot }}</span>
    </a>
    @else
    <span class="{{ $itemClasses }}" @if($current) aria-current="page" @endif>
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component 
            :component="$iconComponent" 
            :name="$icon" 
            class="w-4 h-4"
        />
        @endif
        <span>{{ $slot }}</span>
    </span>
    @endif
    
    @if(!$current)
    <span class="text-gray-400" x-text="separator" aria-hidden="true"></span>
    @endif
</li>

