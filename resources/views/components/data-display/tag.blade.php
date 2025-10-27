@php
    // Size mappings
    $sizes = [
        'xs' => 'text-xs px-2 py-0.5 gap-1',
        'sm' => 'text-xs px-2.5 py-0.5 gap-1',
        'md' => 'text-sm px-3 py-1 gap-1.5',
        'lg' => 'text-base px-3.5 py-1 gap-1.5',
        'xl' => 'text-lg px-4 py-1.5 gap-2',
    ];
    
    // Icon sizes
    $iconSizes = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-3 h-3',
        'md' => 'w-4 h-4',
        'lg' => 'w-4 h-4',
        'xl' => 'w-5 h-5',
    ];
    
    // Solid variant colors
    $solidColors = [
        'primary' => 'bg-blue-600 text-white',
        'secondary' => 'bg-gray-600 text-white',
        'success' => 'bg-green-600 text-white',
        'warning' => 'bg-yellow-600 text-white',
        'danger' => 'bg-red-600 text-white',
        'info' => 'bg-cyan-600 text-white',
        'gray' => 'bg-gray-600 text-white',
    ];
    
    // Subtle variant colors
    $subtleColors = [
        'primary' => 'bg-blue-100 text-blue-800',
        'secondary' => 'bg-gray-100 text-gray-800',
        'success' => 'bg-green-100 text-green-800',
        'warning' => 'bg-yellow-100 text-yellow-800',
        'danger' => 'bg-red-100 text-red-800',
        'info' => 'bg-cyan-100 text-cyan-800',
        'gray' => 'bg-gray-100 text-gray-800',
    ];
    
    // Outline variant colors
    $outlineColors = [
        'primary' => 'border border-blue-600 text-blue-600',
        'secondary' => 'border border-gray-600 text-gray-600',
        'success' => 'border border-green-600 text-green-600',
        'warning' => 'border border-yellow-600 text-yellow-600',
        'danger' => 'border border-red-600 text-red-600',
        'info' => 'border border-cyan-600 text-cyan-600',
        'gray' => 'border border-gray-600 text-gray-600',
    ];
    
    // Select color based on variant
    $colorClass = match($variant) {
        'solid' => $solidColors[$color] ?? $solidColors['gray'],
        'outline' => $outlineColors[$color] ?? $outlineColors['gray'],
        default => $subtleColors[$color] ?? $subtleColors['gray'],
    };
    
    $tagClass = implode(' ', array_filter([
        'inline-flex items-center font-medium rounded-md',
        $sizes[$size] ?? $sizes['md'],
        $colorClass,
    ]));
@endphp

<span 
    {{ $attributes->merge(['class' => $tagClass]) }}
    x-data="{ 
        visible: true,
        remove() {
            this.visible = false;
            this.$dispatch('tag-removed');
        }
    }"
    x-show="visible"
>
    @if($icon)
    @php
        $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
    @endphp
    <x-dynamic-component 
        :component="$iconComponent" 
        :name="$icon" 
        :class="$iconSizes[$size] ?? $iconSizes['md']"
    />
    @endif
    
    <span>{{ $slot }}</span>
    
    @if($closable)
    <button 
        type="button"
        @click="remove()"
        class="ml-0.5 hover:opacity-70 focus:outline-none"
    >
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component 
            :component="$iconComponent" 
            name="heroicons:x-mark" 
            :class="$iconSizes[$size] ?? $iconSizes['md']"
        />
    </button>
    @endif
</span>

