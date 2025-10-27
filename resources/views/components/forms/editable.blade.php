@php
    // Size mappings
    $sizeClasses = [
        'xs' => 'text-xs px-1.5 py-0.5',
        'sm' => 'text-sm px-2 py-1',
        'md' => 'text-base px-2.5 py-1.5',
        'lg' => 'text-lg px-3 py-2',
        'xl' => 'text-xl px-4 py-2.5',
    ];
    
    $previewClasses = implode(' ', array_filter([
        'cursor-pointer rounded transition-colors',
        'hover:bg-gray-100',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $disabled ? 'opacity-50 cursor-not-allowed' : '',
    ]));
    
    $inputClasses = implode(' ', array_filter([
        'w-full border border-gray-300 rounded',
        'focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500',
        'transition-colors',
        $sizeClasses[$size] ?? $sizeClasses['md'],
    ]));
@endphp

<div 
    {{ $attributes->merge(['class' => 'inline-block']) }}
    x-data="{
        isEditing: false,
        value: @js($value ?? ''),
        originalValue: @js($value ?? ''),
        startEdit() {
            if ({{ $disabled ? 'true' : 'false' }}) return;
            this.isEditing = true;
            this.originalValue = this.value;
            this.$nextTick(() => {
                const input = this.$refs.input;
                input.focus();
                @if($selectAllOnFocus)
                input.select();
                @endif
            });
        },
        submit() {
            this.isEditing = false;
            this.$dispatch('editable-submit', { value: this.value });
        },
        cancel() {
            this.value = this.originalValue;
            this.isEditing = false;
            this.$dispatch('editable-cancel');
        },
        handleKeydown(e) {
            @if($submitOnEnter)
            if (e.key === 'Enter') {
                e.preventDefault();
                this.submit();
            }
            @endif
            @if($cancelOnEscape)
            if (e.key === 'Escape') {
                e.preventDefault();
                this.cancel();
            }
            @endif
        }
    }"
>
    <!-- Preview Mode -->
    <div 
        x-show="!isEditing"
        @click="startEdit()"
        class="{{ $previewClasses }}"
    >
        <span x-show="value" x-text="value"></span>
        <span x-show="!value" class="text-gray-400">{{ $placeholder }}</span>
    </div>
    
    <!-- Edit Mode -->
    <input
        x-show="isEditing"
        x-ref="input"
        x-model="value"
        @keydown="handleKeydown($event)"
        @if($submitOnBlur)
        @blur="submit()"
        @endif
        type="text"
        class="{{ $inputClasses }}"
        @if($required) required @endif
        style="display: none;"
    />
</div>

