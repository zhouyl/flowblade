@php
    $fieldsetClasses = implode(' ', array_filter([
        'border border-gray-300 rounded-lg p-4',
        $disabled ? 'opacity-50 cursor-not-allowed' : '',
        $invalid ? 'border-red-500' : '',
    ]));
    
    $legendClasses = implode(' ', array_filter([
        'text-sm font-medium px-2',
        $invalid ? 'text-red-700' : 'text-gray-700',
    ]));
@endphp

<fieldset {{ $attributes->merge(['class' => $fieldsetClasses]) }} @if($disabled) disabled @endif>
    @if($legend)
        <legend class="{{ $legendClasses }}">
            {{ $legend }}
        </legend>
    @endif
    
    @if($helperText && !$invalid)
        <div class="text-sm text-gray-500 mb-3">
            {{ $helperText }}
        </div>
    @endif
    
    @if($invalid && $errorText)
        <div class="text-sm text-red-600 mb-3">
            {{ $errorText }}
        </div>
    @endif
    
    <div class="space-y-3">
        {{ $slot }}
    </div>
</fieldset>

