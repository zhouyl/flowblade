<select
    {{ $attributes->merge(['class' => $classes()]) }}
    @if($disabled) disabled @endif
    @if($required) required @endif
    @if($invalid) aria-invalid="true" @endif
>
    @if($placeholder)
        <option value="" disabled selected>{{ $placeholder }}</option>
    @endif
    {{ $slot }}
</select>

