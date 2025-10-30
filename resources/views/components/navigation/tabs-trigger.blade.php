<button
    type="button"
    role="tab"
    {{ $attributes->merge(['class' => $classes() . ' transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2']) }}
    x-bind:aria-selected="activeTab === '{{ $value }}'"
    x-bind:tabindex="activeTab === '{{ $value }}' ? 0 : -1"
    @click="if (!{{ $disabled ? 'true' : 'false' }}) { activeTab = '{{ $value }}'; $dispatch('tab-change', { value: '{{ $value }}' }); }"
    @if($disabled) disabled @endif
    x-bind:class="{
        // Line variant
        'border-b-2 -mb-px': variant === 'line',
        'border-blue-600 text-blue-600': variant === 'line' && activeTab === '{{ $value }}',
        'border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300': variant === 'line' && activeTab !== '{{ $value }}' && !{{ $disabled ? 'true' : 'false' }},

        // Enclosed variant
        'border border-b-0 rounded-t-md -mb-px': variant === 'enclosed',
        'border-gray-200 bg-white text-blue-600': variant === 'enclosed' && activeTab === '{{ $value }}',
        'border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300': variant === 'enclosed' && activeTab !== '{{ $value }}' && !{{ $disabled ? 'true' : 'false' }},

        // Pills variant
        'rounded-md': variant === 'pills',
        'bg-blue-600 text-white': variant === 'pills' && activeTab === '{{ $value }}',
        'text-gray-600 hover:bg-gray-100 hover:text-gray-900': variant === 'pills' && activeTab !== '{{ $value }}' && !{{ $disabled ? 'true' : 'false' }}
    }"
>
    <span class="flex items-center gap-2">
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component
            :component="$iconComponent"
            :name="$icon"
            class="w-4 h-4"
        />
        @endif
        <span>{{ $slot }}</span>
    </span>
</button>

