<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{ 
        open: {{ $open ? 'true' : 'false' }},
        disabled: {{ $disabled ? 'true' : 'false' }},
        toggle() {
            if (!this.disabled) {
                this.open = !this.open;
                $dispatch('collapsible-change', { open: this.open });
            }
        }
    }"
>
    {{-- Collapsible Trigger --}}
    <button
        type="button"
        @click="toggle()"
        @if($disabled) disabled @endif
        class="w-full flex items-center justify-between px-4 py-3 text-left font-medium transition-colors hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg"
        x-bind:class="{
            'bg-gray-50': open,
            'cursor-not-allowed hover:bg-transparent': disabled
        }"
        x-bind:aria-expanded="open"
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
            x-bind:class="{ 'rotate-180': open }"
        />
    </button>
    
    {{-- Collapsible Content --}}
    <div
        x-show="open"
        x-collapse
        class="px-4 py-3 text-gray-700"
    >
        {{ $slot }}
    </div>
</div>

