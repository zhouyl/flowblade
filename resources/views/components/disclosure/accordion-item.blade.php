@php
    $baseClasses = '';
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';
@endphp

<div 
    {{ $attributes->merge(['class' => $baseClasses . ' ' . $disabledClasses]) }}
    x-bind:class="{
        'border-b border-gray-200': variant === 'default',
        'border border-gray-200 rounded-lg': variant === 'separated',
        'border-b border-gray-200 last:border-b-0': variant === 'contained'
    }"
>
    {{-- Accordion Header/Trigger --}}
    <button
        type="button"
        @click="if (!{{ $disabled ? 'true' : 'false' }}) { toggle('{{ $value }}'); $dispatch('accordion-change', { value: '{{ $value }}', open: !isOpen('{{ $value }}') }); }"
        @if($disabled) disabled @endif
        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium transition-colors hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
        x-bind:class="{
            'bg-gray-50': isOpen('{{ $value }}'),
            'cursor-not-allowed hover:bg-transparent': {{ $disabled ? 'true' : 'false' }}
        }"
        x-bind:aria-expanded="isOpen('{{ $value }}')"
    >
        <span class="flex items-center gap-3">
            @if($icon)
            @php
                $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
            @endphp
            <x-dynamic-component 
                :component="$iconComponent" 
                :name="$icon" 
                class="w-5 h-5 text-gray-600"
            />
            @endif
            
            @if($title)
            <span>{{ $title }}</span>
            @else
            <span>{{ $titleSlot ?? '' }}</span>
            @endif
        </span>
        
        {{-- Chevron Icon --}}
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component 
            :component="$iconComponent" 
            name="heroicons:chevron-down" 
            class="w-5 h-5 text-gray-600 transition-transform"
            x-bind:class="{ 'rotate-180': isOpen('{{ $value }}') }"
        />
    </button>
    
    {{-- Accordion Content --}}
    <div
        x-show="isOpen('{{ $value }}')"
        x-collapse
        class="px-4 py-3 text-gray-700"
    >
        {{ $slot }}
    </div>
</div>

