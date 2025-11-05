<label
    @if($for) for="{{ $for }}" @endif
    {{ $attributes->merge(['class' => $classes()]) }}
>
    {{ $slot }}
    @if($required)
        <span class="text-red-600 ml-1">*</span>
    @endif
</label>

