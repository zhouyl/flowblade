@php
    $parentData = '$parent';
    
    // Get label width class
    $labelWidthClass = '';
    if ($attributes->get('x-bind:class')) {
        // Will be set by parent
    } else {
        // Default widths based on common patterns
        $labelWidthClass = 'w-1/3';
    }
@endphp

<div 
    {{ $attributes->merge(['class' => 'flex']) }}
    x-data="{
        get isHorizontal() {
            return {$parentData}.orientation === 'horizontal';
        },
        get labelWidthClass() {
            if ({$parentData}.labelWidth === '1/4') return 'w-1/4';
            if ({$parentData}.labelWidth === '1/3') return 'w-1/3';
            if ({$parentData}.labelWidth === '1/2') return 'w-1/2';
            if ({$parentData}.labelWidth === 'auto') return 'w-auto';
            return 'w-1/3'; // default
        }
    }"
    :class="{
        'flex-row items-start': isHorizontal,
        'flex-col': !isHorizontal,
        'py-3': {$parentData}.divider && !isHorizontal
    }"
>
    <!-- Label -->
    <dt 
        class="font-medium text-gray-700"
        :class="{
            [labelWidthClass]: isHorizontal,
            'mb-1': !isHorizontal,
            'text-xs': {$parentData}.size === 'xs',
            'text-sm': {$parentData}.size === 'sm' || {$parentData}.size === 'md',
            'text-base': {$parentData}.size === 'lg',
            'text-lg': {$parentData}.size === 'xl'
        }"
    >
        @if($label)
            {{ $label }}
        @else
            {{ $labelSlot ?? '' }}
        @endif
    </dt>
    
    <!-- Value -->
    <dd 
        class="text-gray-900"
        :class="{
            'flex-1': isHorizontal,
            'text-xs': {$parentData}.size === 'xs',
            'text-sm': {$parentData}.size === 'sm' || {$parentData}.size === 'md',
            'text-base': {$parentData}.size === 'lg',
            'text-lg': {$parentData}.size === 'xl'
        }"
    >
        @if($value)
            {{ $value }}
        @else
            {{ $slot }}
        @endif
    </dd>
</div>

