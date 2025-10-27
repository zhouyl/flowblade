@php
    // Size mappings
    $sizes = [
        '2xs' => 'w-6 h-6 text-xs',
        'xs' => 'w-8 h-8 text-xs',
        'sm' => 'w-10 h-10 text-sm',
        'md' => 'w-12 h-12 text-base',
        'lg' => 'w-16 h-16 text-lg',
        'xl' => 'w-20 h-20 text-xl',
        '2xl' => 'w-24 h-24 text-2xl',
        '3xl' => 'w-32 h-32 text-3xl',
        '4xl' => 'w-40 h-40 text-4xl',
    ];
    
    // Icon sizes
    $iconSizes = [
        '2xs' => 'w-3 h-3',
        'xs' => 'w-4 h-4',
        'sm' => 'w-5 h-5',
        'md' => 'w-6 h-6',
        'lg' => 'w-8 h-8',
        'xl' => 'w-10 h-10',
        '2xl' => 'w-12 h-12',
        '3xl' => 'w-16 h-16',
        '4xl' => 'w-20 h-20',
    ];
    
    // Shape mappings
    $shapes = [
        'circle' => 'rounded-full',
        'square' => 'rounded-none',
        'rounded' => 'rounded-lg',
    ];
    
    $avatarClass = implode(' ', array_filter([
        'inline-flex items-center justify-center flex-shrink-0 overflow-hidden',
        $sizes[$size] ?? $sizes['md'],
        $shapes[$shape] ?? $shapes['circle'],
    ]));
    
    $initials = $getInitials();
@endphp

<div {{ $attributes->merge(['class' => $avatarClass]) }}>
    @if($src)
        <img 
            src="{{ $src }}" 
            alt="{{ $name ?? 'Avatar' }}"
            class="w-full h-full object-cover"
        />
    @elseif($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$icon" 
                :class="$iconSizes[$size] ?? $iconSizes['md']"
                class="text-gray-600"
            />
        </div>
    @elseif($initials)
        <div class="w-full h-full bg-blue-600 text-white font-medium flex items-center justify-center">
            {{ $initials }}
        </div>
    @else
        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
            @php
                $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
            @endphp
            <x-dynamic-component 
                :component="$iconComponent" 
                name="heroicons:user" 
                :class="$iconSizes[$size] ?? $iconSizes['md']"
                class="text-gray-600"
            />
        </div>
    @endif
</div>

