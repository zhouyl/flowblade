@php
    $parentData = '$parent';
    
    // Color mappings for dot
    $colorClasses = [
        'primary' => 'bg-blue-600 border-blue-600',
        'secondary' => 'bg-gray-600 border-gray-600',
        'success' => 'bg-green-600 border-green-600',
        'warning' => 'bg-yellow-600 border-yellow-600',
        'danger' => 'bg-red-600 border-red-600',
        'info' => 'bg-cyan-600 border-cyan-600',
        'gray' => 'bg-gray-600 border-gray-600',
    ];
    
    $outlineColorClasses = [
        'primary' => 'bg-white border-blue-600',
        'secondary' => 'bg-white border-gray-600',
        'success' => 'bg-white border-green-600',
        'warning' => 'bg-white border-yellow-600',
        'danger' => 'bg-white border-red-600',
        'info' => 'bg-white border-cyan-600',
        'gray' => 'bg-white border-gray-600',
    ];
    
    $lineColorClasses = [
        'primary' => 'bg-blue-200',
        'secondary' => 'bg-gray-200',
        'success' => 'bg-green-200',
        'warning' => 'bg-yellow-200',
        'danger' => 'bg-red-200',
        'info' => 'bg-cyan-200',
        'gray' => 'bg-gray-200',
    ];
    
    // Use item color or parent color
    $itemColor = $color ?? $attributes->get('x-bind:data-color') ?? 'primary';
@endphp

<div 
    {{ $attributes->merge(['class' => 'relative flex gap-4 pb-8']) }}
    x-data="{
        get dotColor() {
            const color = '{{ $itemColor }}' || {$parentData}.color;
            const variant = {$parentData}.variant;
            
            const solidColors = {
                'primary': 'bg-blue-600 border-blue-600',
                'secondary': 'bg-gray-600 border-gray-600',
                'success': 'bg-green-600 border-green-600',
                'warning': 'bg-yellow-600 border-yellow-600',
                'danger': 'bg-red-600 border-red-600',
                'info': 'bg-cyan-600 border-cyan-600',
                'gray': 'bg-gray-600 border-gray-600'
            };
            
            const outlineColors = {
                'primary': 'bg-white border-blue-600',
                'secondary': 'bg-white border-gray-600',
                'success': 'bg-white border-green-600',
                'warning': 'bg-white border-yellow-600',
                'danger': 'bg-white border-red-600',
                'info': 'bg-white border-cyan-600',
                'gray': 'bg-white border-gray-600'
            };
            
            return variant === 'outline' ? outlineColors[color] : solidColors[color];
        },
        get lineColor() {
            const color = '{{ $itemColor }}' || {$parentData}.color;
            const colors = {
                'primary': 'bg-blue-200',
                'secondary': 'bg-gray-200',
                'success': 'bg-green-200',
                'warning': 'bg-yellow-200',
                'danger': 'bg-red-200',
                'info': 'bg-cyan-200',
                'gray': 'bg-gray-200'
            };
            return colors[color];
        }
    }"
>
    <!-- Timeline Dot and Line -->
    <div class="relative flex flex-col items-center">
        <!-- Dot -->
        <div 
            class="w-3 h-3 rounded-full border-2 flex-shrink-0"
            :class="dotColor"
        >
            @if($icon)
            @php
                $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
            @endphp
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$icon" 
                class="w-2 h-2 text-white"
            />
            @endif
        </div>
        
        <!-- Connector Line -->
        @if(!$isLast)
        <div 
            class="w-0.5 flex-1 mt-1"
            :class="lineColor"
        ></div>
        @endif
    </div>
    
    <!-- Content -->
    <div class="flex-1 -mt-0.5">
        @if($time)
        <time class="text-xs text-gray-500 mb-1 block">{{ $time }}</time>
        @endif
        
        @if($title)
        <h3 class="font-semibold text-gray-900 mb-1">{{ $title }}</h3>
        @endif
        
        @if($description)
        <p class="text-gray-600">{{ $description }}</p>
        @endif
        
        @if($slot->isNotEmpty())
        <div class="mt-2">
            {{ $slot }}
        </div>
        @endif
    </div>
</div>

