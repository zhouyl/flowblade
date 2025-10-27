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
        'absolute left-0 top-0 h-full rounded-full transition-all',
        $colorClasses[$color] ?? $colorClasses['primary'],
    ]));
    
    $thumbClass = implode(' ', array_filter([
        'absolute top-1/2 -translate-y-1/2 -translate-x-1/2 rounded-full bg-white border-2 shadow-md transition-all',
        $thumbSizes[$size] ?? $thumbSizes['md'],
        $colorClasses[$color] ?? $colorClasses['primary'],
        $disabled ? 'cursor-not-allowed' : 'cursor-grab active:cursor-grabbing hover:scale-110',
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => 'w-full']) }}
    x-data="{
        value: {{ $value }},
        min: {{ $min }},
        max: {{ $max }},
        step: {{ $step }},
        disabled: {{ $disabled ? 'true' : 'false' }},
        isDragging: false,
        get percentage() {
            return ((this.value - this.min) / (this.max - this.min)) * 100;
        },
        updateValue(clientX) {
            if (this.disabled) return;
            
            const rect = this.$refs.track.getBoundingClientRect();
            const percentage = Math.max(0, Math.min(100, ((clientX - rect.left) / rect.width) * 100));
            const rawValue = this.min + (percentage / 100) * (this.max - this.min);
            
            // Round to nearest step
            this.value = Math.round(rawValue / this.step) * this.step;
            
            // Ensure within bounds
            this.value = Math.max(this.min, Math.min(this.max, this.value));
            
            this.$dispatch('slider-change', { value: this.value });
        },
        handleMouseDown(e) {
            if (this.disabled) return;
            this.isDragging = true;
            this.updateValue(e.clientX);
        },
        handleMouseMove(e) {
            if (!this.isDragging) return;
            this.updateValue(e.clientX);
        },
        handleMouseUp() {
            if (this.isDragging) {
                this.isDragging = false;
                this.$dispatch('slider-change-end', { value: this.value });
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
        @mousedown="handleMouseDown($event)"
    >
        <!-- Fill -->
        <div 
            class="{{ $fillClass }}"
            :style="`width: ${percentage}%`"
        ></div>
        
        <!-- Thumb -->
        <div 
            class="{{ $thumbClass }}"
            :style="`left: ${percentage}%`"
            style="border-color: currentColor;"
        ></div>
    </div>
    
    @if($showValue)
    <div class="text-center text-sm text-gray-600 mt-2">
        <span x-text="value"></span>
    </div>
    @endif
    
    <!-- Hidden input for form submission -->
    <input 
        type="hidden" 
        :value="value"
        :name="$el.closest('[x-data]').getAttribute('name') || ''"
    />
</div>

