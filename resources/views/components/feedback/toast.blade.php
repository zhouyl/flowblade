@php
$statusColors = [
    'success' => [
        'bg' => 'bg-green-50',
        'border' => 'border-green-200',
        'icon' => 'text-green-500',
        'title' => 'text-green-900',
        'description' => 'text-green-700',
    ],
    'error' => [
        'bg' => 'bg-red-50',
        'border' => 'border-red-200',
        'icon' => 'text-red-500',
        'title' => 'text-red-900',
        'description' => 'text-red-700',
    ],
    'warning' => [
        'bg' => 'bg-yellow-50',
        'border' => 'border-yellow-200',
        'icon' => 'text-yellow-500',
        'title' => 'text-yellow-900',
        'description' => 'text-yellow-700',
    ],
    'info' => [
        'bg' => 'bg-blue-50',
        'border' => 'border-blue-200',
        'icon' => 'text-blue-500',
        'title' => 'text-blue-900',
        'description' => 'text-blue-700',
    ],
];

$colors = $statusColors[$status] ?? $statusColors['info'];

$positionClasses = [
    'top-right' => 'top-4 right-4',
    'top-left' => 'top-4 left-4',
    'bottom-right' => 'bottom-4 right-4',
    'bottom-left' => 'bottom-4 left-4',
    'top-center' => 'top-4 left-1/2 -translate-x-1/2',
    'bottom-center' => 'bottom-4 left-1/2 -translate-x-1/2',
];

$positionClass = $positionClasses[$position] ?? $positionClasses['top-right'];

$displayIcon = $icon ?? $getDefaultIcon();

$iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
@endphp

<div 
    x-data="{
        show: false,
        init() {
            this.$nextTick(() => {
                this.show = true;
                @if($duration > 0)
                setTimeout(() => {
                    this.show = false;
                }, {{ $duration }});
                @endif
            });
        }
    }"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-2"
    {{ $attributes->merge([
        'class' => 'fixed z-50 w-full max-w-sm pointer-events-auto ' . $positionClass,
        'role' => 'alert',
        'aria-live' => 'assertive',
        'aria-atomic' => 'true',
    ]) }}
>
    <div class="{{ $classes() }} {{ $colors['bg'] }} {{ $colors['border'] }}">
        <div class="flex items-start gap-3">
            {{-- Icon --}}
            <div class="flex-shrink-0 w-5 h-5 {{ $colors['icon'] }}">
                <x-dynamic-component :component="$iconComponent" :name="$displayIcon" class="w-full h-full" />
            </div>
            
            {{-- Content --}}
            <div class="flex-1 min-w-0">
                @if($title)
                <h3 class="text-sm font-semibold {{ $colors['title'] }}">
                    {{ $title }}
                </h3>
                @endif
                
                @if($description)
                <p class="text-sm {{ $colors['description'] }} {{ $title ? 'mt-1' : '' }}">
                    {{ $description }}
                </p>
                @endif
                
                @if($slot->isNotEmpty())
                <div class="mt-3">
                    {{ $slot }}
                </div>
                @endif
            </div>
            
            {{-- Close button --}}
            @if($closable)
            <button
                type="button"
                @click="show = false"
                class="flex-shrink-0 inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 rounded"
                aria-label="Close"
            >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            @endif
        </div>
    </div>
</div>

