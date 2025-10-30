@php
$sizeConfig = [
    'sm' => [
        'icon' => 'w-12 h-12',
        'title' => 'text-base',
        'description' => 'text-sm',
        'gap' => 'gap-3',
    ],
    'md' => [
        'icon' => 'w-16 h-16',
        'title' => 'text-lg',
        'description' => 'text-base',
        'gap' => 'gap-4',
    ],
    'lg' => [
        'icon' => 'w-24 h-24',
        'title' => 'text-xl',
        'description' => 'text-lg',
        'gap' => 'gap-6',
    ],
];

$config = $sizeConfig[$size] ?? $sizeConfig['md'];

$iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
@endphp

<div {{ $attributes->merge(['class' => $classes()]) }}>
    <div class="flex flex-col items-center {{ $config['gap'] }} max-w-md mx-auto">
        @if($icon)
        {{-- Icon --}}
        <div class="{{ $config['icon'] }} text-gray-400">
            <x-dynamic-component :component="$iconComponent" :name="$icon" class="w-full h-full" />
        </div>
        @endif
        
        @if($title)
        {{-- Title --}}
        <h3 class="font-semibold text-gray-900 {{ $config['title'] }}">
            {{ $title }}
        </h3>
        @endif
        
        @if($description)
        {{-- Description --}}
        <p class="text-gray-500 {{ $config['description'] }}">
            {{ $description }}
        </p>
        @endif
        
        @if($slot->isNotEmpty())
        {{-- Action buttons or custom content --}}
        <div class="mt-2">
            {{ $slot }}
        </div>
        @endif
    </div>
</div>

