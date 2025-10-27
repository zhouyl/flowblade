<input
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes()]) }}
    @if($placeholder) placeholder="{{ $placeholder }}" @endif
    @if($disabled) disabled @endif
    @if($readonly) readonly @endif
    @if($required) required @endif
    @if($invalid) aria-invalid="true" @endif
/>

