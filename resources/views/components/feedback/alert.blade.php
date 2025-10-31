@php
$sizeClasses = [
    'xs' => 'text-xs px-3 py-2',
    'sm' => 'text-sm px-3 py-2',
    'md' => 'text-base px-4 py-3',
    'lg' => 'text-lg px-5 py-4',
    'xl' => 'text-xl px-6 py-5',
];

$componentColors = config('flowblade.component_colors.alert', []);

$defaultIcons = [
    'info' => 'heroicons:information-circle',
    'success' => 'heroicons:check-circle',
    'warning' => 'heroicons:exclamation-triangle',
    'danger' => 'heroicons:x-circle',
];

$sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
$statusColorConfig = $componentColors[$status] ?? $componentColors['info'] ?? [];
$colorClass = $statusColorConfig[$variant] ?? $statusColorConfig['subtle'] ?? '';
$iconColorClass = $statusColorConfig['icon'] ?? '';
$displayIcon = $icon ?? $defaultIcons[$status] ?? null;
@endphp

<div
    {{ $attributes->merge(['class' => $classes() . ' ' . $sizeClass . ' ' . $colorClass]) }}
    role="alert"
    x-data="{ show: true }"
    x-show="show"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform scale-95"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-95"
>
    <div class="flex items-start gap-3">
        @if($displayIcon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <div class="flex-shrink-0">
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$displayIcon" 
                class="w-5 h-5 {{ $variant === 'solid' ? '' : $iconColorClass }}"
            />
        </div>
        @endif
        
        <div class="flex-1 min-w-0">
            @if($title)
            <div class="font-semibold mb-1">{{ $title }}</div>
            @endif
            
            <div class="{{ $title ? '' : 'flex items-center' }}">
                {{ $slot }}
            </div>
        </div>
        
        @if($closable)
        <button
            type="button"
            @click="show = false; $dispatch('alert-closed')"
            class="flex-shrink-0 ml-auto -mr-1 -mt-1 p-1 rounded-md hover:bg-black/10 focus:outline-none focus:ring-2 focus:ring-offset-2 {{ $variant === 'solid' ? 'focus:ring-white' : 'focus:ring-' . $status . '-500' }}"
            aria-label="Close"
        >
            @php
                $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
            @endphp
            <x-dynamic-component 
                :component="$iconComponent" 
                name="heroicons:x-mark" 
                class="w-5 h-5"
            />
        </button>
        @endif
    </div>
</div>

