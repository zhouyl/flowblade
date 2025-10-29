<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        expanded: {{ $expanded ? 'true' : 'false' }},
        hasChildren: {{ $hasChildren ? 'true' : 'false' }},
        toggle() {
            if (this.hasChildren) {
                this.expanded = !this.expanded;
            }
        }
    }"
>
    <!-- Node Content -->
    <div 
        class="flex items-center gap-2 py-1 px-2 rounded hover:bg-gray-100 cursor-pointer"
        @click="toggle()"
    >
        <!-- Expand/Collapse Icon -->
        <div class="w-4 h-4 flex items-center justify-center flex-shrink-0">
            <template x-if="hasChildren">
                <svg 
                    class="w-4 h-4 text-gray-500 transition-transform"
                    :class="{ 'rotate-90': expanded }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </template>
        </div>
        
        <!-- Icon -->
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component 
            :component="$iconComponent" 
            :name="$icon" 
            class="w-4 h-4 text-gray-600 flex-shrink-0"
        />
        @endif
        
        <!-- Label -->
        <span class="flex-1 text-gray-900">
            @if($label)
                {{ $label }}
            @else
                {{ $labelSlot ?? '' }}
            @endif
        </span>
    </div>
    
    <!-- Children -->
    @if($slot->isNotEmpty())
    <div 
        x-show="expanded"
        x-collapse
        class="ml-6 border-l border-gray-200 pl-2"
    >
        {{ $slot }}
    </div>
    @endif
</div>

