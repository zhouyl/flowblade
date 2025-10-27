<div {{ $attributes->merge(['class' => $containerClasses()]) }}>
    @for($i = 0; $i < $length; $i++)
        <input
            type="{{ $mask ? 'password' : 'text' }}"
            maxlength="1"
            class="{{ $inputClasses() }}"
            placeholder="{{ $placeholder }}"
            @if($disabled) disabled @endif
            @if($invalid) aria-invalid="true" @endif
            x-data="{ value: '' }"
            x-model="value"
            @input="if (value.length === 1 && $el.nextElementSibling) $el.nextElementSibling.focus()"
            @keydown.backspace="if (value === '' && $el.previousElementSibling) $el.previousElementSibling.focus()"
        />
    @endfor
</div>

