@php
    // Size mappings for track height
    $trackSizes = [
        'xs' => 'h-1',
        'sm' => 'h-1.5',
        'md' => 'h-2',
        'lg' => 'h-2.5',
        'xl' => 'h-3',
    ];
    
    // Size mappings for thumb
    $thumbSizes = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-4 h-4',
        'md' => 'w-5 h-5',
        'lg' => 'w-6 h-6',
        'xl' => 'w-7 h-7',
    ];
    
    // Color mappings
    $colorClasses = [
        'primary' => 'bg-blue-600',
        'secondary' => 'bg-gray-600',
        'success' => 'bg-green-600',
        'warning' => 'bg-yellow-600',
        'danger' => 'bg-red-600',
        'info' => 'bg-cyan-600',
        'gray' => 'bg-gray-600',
    ];
    
    $trackClass = implode(' ', array_filter([
        'relative w-full rounded-full bg-gray-200',
        $trackSizes[$size] ?? $trackSizes['md'],
        $disabled ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer',
    ]));
    
    $fillClass = implode(' ', array_filter([
        'absolute top-0 h-full rounded-full transition-all',
        $colorClasses[$color] ?? $colorClasses['primary'],
    ]));
    
    $thumbClass = implode(' ', array_filter([
        'absolute top-1/2 -translate-y-1/2 -translate-x-1/2 rounded-full bg-white border-2 shadow-md transition-all z-10',
        $thumbSizes[$size] ?? $thumbSizes['md'],
        $colorClasses[$color] ?? $colorClasses['primary'],
        $disabled ? 'cursor-not-allowed' : 'cursor-grab active:cursor-grabbing hover:scale-110',
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => 'w-full']) }}
    x-data="{
        minValue: {{ $minValue }},
        maxValue: {{ $maxValue }},
        min: {{ $min }},
        max: {{ $max }},
        step: {{ $step }},
        disabled: {{ $disabled ? 'true' : 'false' }},
        activeThumb: null,
        get minPercentage() {
            return ((this.minValue - this.min) / (this.max - this.min)) * 100;
        },
        get maxPercentage() {
            return ((this.maxValue - this.min) / (this.max - this.min)) * 100;
        },
        updateValue(clientX, thumb) {
            if (this.disabled) return;
            
            const rect = this.$refs.track.getBoundingClientRect();
            const percentage = Math.max(0, Math.min(100, ((clientX - rect.left) / rect.width) * 100));
            const rawValue = this.min + (percentage / 100) * (this.max - this.min);
            
            // Round to nearest step
            let value = Math.round(rawValue / this.step) * this.step;
            
            // Ensure within bounds
            value = Math.max(this.min, Math.min(this.max, value));
            
            if (thumb === 'min') {
                // Ensure min doesn't exceed max
                this.minValue = Math.min(value, this.maxValue);
            } else {
                // Ensure max doesn't go below min
                this.maxValue = Math.max(value, this.minValue);
            }
            
            this.$dispatch('range-slider-change', { 
                minValue: this.minValue, 
                maxValue: this.maxValue 
            });
        },
        handleMouseDown(e, thumb) {
            if (this.disabled) return;
            this.activeThumb = thumb;
            this.updateValue(e.clientX, thumb);
        },
        handleMouseMove(e) {
            if (!this.activeThumb) return;
            this.updateValue(e.clientX, this.activeThumb);
        },
        handleMouseUp() {
            if (this.activeThumb) {
                this.$dispatch('range-slider-change-end', { 
                    minValue: this.minValue, 
                    maxValue: this.maxValue 
                });
                this.activeThumb = null;
            }
        }
    }"
    @mousemove.window="handleMouseMove($event)"
    @mouseup.window="handleMouseUp()"
>
    @if($showMarks)
    <div class="flex justify-between text-xs text-gray-500 mb-2">
        <span>{{ $min }}</span>
        <span>{{ $max }}</span>
    </div>
    @endif
    
    <!-- Track -->
    <div 
        x-ref="track"
        class="{{ $trackClass }}"
    >
        <!-- Fill (between thumbs) -->
        <div 
            class="{{ $fillClass }}"
            :style="`left: ${minPercentage}%; width: ${maxPercentage - minPercentage}%`"
        ></div>
        
        <!-- Min Thumb -->
        <div 
            class="{{ $thumbClass }}"
            :style="`left: ${minPercentage}%`"
            style="border-color: currentColor;"
            @mousedown="handleMouseDown($event, 'min')"
        ></div>
        
        <!-- Max Thumb -->
        <div 
            class="{{ $thumbClass }}"
            :style="`left: ${maxPercentage}%`"
            style="border-color: currentColor;"
            @mousedown="handleMouseDown($event, 'max')"
        ></div>
    </div>
    
    @if($showValues)
    <div class="flex justify-between text-sm text-gray-600 mt-2">
        <span x-text="minValue"></span>
        <span x-text="maxValue"></span>
    </div>
    @endif
    
    <!-- Hidden inputs for form submission -->
    <input 
        type="hidden" 
        :value="minValue"
        :name="($el.closest('[x-data]').getAttribute('name') || '') + '[min]'"
    />
    <input 
        type="hidden" 
        :value="maxValue"
        :name="($el.closest('[x-data]').getAttribute('name') || '') + '[max]'"
    />
</div>

