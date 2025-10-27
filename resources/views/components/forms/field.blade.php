<div {{ $attributes->merge(['class' => $containerClasses()]) }}>
    @if($label)
        <label class="{{ $labelClasses() }}">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    {{ $slot }}

    @if($invalid && $errorText)
        <p class="{{ $errorTextClasses() }}">{{ $errorText }}</p>
    @elseif($helperText)
        <p class="{{ $helperTextClasses() }}">{{ $helperText }}</p>
    @endif
</div>

