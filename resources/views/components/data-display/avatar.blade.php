@php
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

    $initials = $getInitials();
@endphp

<div {{ $attributes->merge(['class' => $classes()]) }}>
    @if($src)
        <img
            src="{{ $src }}"
            alt="{{ $name ?? 'Avatar' }}"
            class="w-full h-full object-cover"
        />
    @elseif($icon)
        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
            <x-dynamic-component
                :component="'flowblade::icon'"
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
            <x-dynamic-component
                :component="'flowblade::icon'"
                name="heroicons:user"
                :class="$iconSizes[$size] ?? $iconSizes['md']"
                class="text-gray-600"
            />
        </div>
    @endif
</div>

