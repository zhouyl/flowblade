<textarea
    {{ $attributes->merge(['class' => $classes()]) }}
    @if($placeholder) placeholder="{{ $placeholder }}" @endif
    @if($rows) rows="{{ $rows }}" @endif
    @if($disabled) disabled @endif
    @if($readonly) readonly @endif
    @if($required) required @endif
    @if($invalid) aria-invalid="true" @endif
>{{ $slot }}</textarea>

