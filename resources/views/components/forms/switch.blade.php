<label {{ $attributes->merge(['class' => $containerClasses()]) }}>
    <input
        type="checkbox"
        class="{{ $inputClasses() }}"
        @if($disabled) disabled @endif
        @if($invalid) aria-invalid="true" @endif
    />
    <span class="{{ $trackClasses() }}">
        <span class="{{ $thumbClasses() }}"></span>
    </span>
</label>

