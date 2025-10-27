<div {{ $attributes->merge(['class' => $containerClasses()]) }}>
    <input
        type="number"
        class="{{ $inputClasses() }}"
        @if($disabled) disabled @endif
        @if($required) required @endif
        @if($readonly) readonly @endif
        @if($invalid) aria-invalid="true" @endif
        @if($min !== null) min="{{ $min }}" @endif
        @if($max !== null) max="{{ $max }}" @endif
        @if($step !== null) step="{{ $step }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        x-data="{ value: {{ $attributes->get('value', 0) }} }"
        x-model="value"
    />
    <div class="{{ $buttonClasses() }}">
        <button
            type="button"
            class="{{ $stepperClasses() }}"
            @click="value = Math.min({{ $max ?? 'Infinity' }}, parseInt(value || 0) + {{ $step }})"
            tabindex="-1"
        >
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
        <button
            type="button"
            class="{{ $stepperClasses() }}"
            @click="value = Math.max({{ $min ?? '-Infinity' }}, parseInt(value || 0) - {{ $step }})"
            tabindex="-1"
        >
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>
</div>

