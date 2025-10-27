<input
    type="checkbox"
    {{ $attributes->merge(['class' => $classes()]) }}
    @if($value) value="{{ $value }}" @endif
    @if($disabled) disabled @endif
    @if($invalid) aria-invalid="true" @endif
/>

