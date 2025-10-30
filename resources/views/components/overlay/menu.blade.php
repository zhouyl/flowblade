@php
    // Generate unique ID for menu
    $menuId = 'menu-' . uniqid();
    
    // Width configurations
    $widthConfig = [
        'auto' => '',
        'xs' => 'w-40',   // 10rem
        'sm' => 'w-44',   // 11rem
        'md' => 'w-56',   // 14rem
        'lg' => 'w-64',   // 16rem
        'xl' => 'w-80',   // 20rem
    ];
    
    $menuWidth = $widthConfig[$width] ?? $widthConfig['sm'];
    
    // Divided class
    $dividedClass = $divided ? 'divide-y divide-gray-100' : '';
@endphp

{{-- Trigger element (slot content) --}}
<span 
    data-dropdown-toggle="{{ $menuId }}"
    data-dropdown-placement="{{ $placement }}"
    data-dropdown-trigger="{{ $trigger }}"
    @if($delay && $trigger === 'hover')
    data-dropdown-delay="{{ $delay }}"
    @endif
    {{ $attributes->merge(['class' => 'inline-block']) }}
>
    {{ $trigger }}
</span>

{{-- Menu content --}}
<div
    id="{{ $menuId }}"
    class="{{ $classes() }} {{ $menuWidth }} {{ $dividedClass }}"
>
    {{ $slot }}
</div>

