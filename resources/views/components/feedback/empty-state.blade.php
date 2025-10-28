@php
    // Size configurations
    $sizeConfig = [
        'sm' => [
            'container' => 'py-8',
            'icon' => 'w-12 h-12',
            'title' => 'text-base',
            'description' => 'text-sm',
            'gap' => 'gap-3',
        ],
        'md' => [
            'container' => 'py-12',
            'icon' => 'w-16 h-16',
            'title' => 'text-lg',
            'description' => 'text-base',
            'gap' => 'gap-4',
        ],
        'lg' => [
            'container' => 'py-16',
            'icon' => 'w-24 h-24',
            'title' => 'text-xl',
            'description' => 'text-lg',
            'gap' => 'gap-6',
        ],
    ];
    
    $config = $sizeConfig[$size] ?? $sizeConfig['md'];
    
    // Get dynamic component name for icon
    $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center text-center ' . $config['container']]) }}>
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

