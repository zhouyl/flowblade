@php
    // Variant classes
    $variantClasses = [
        'default' => 'block w-full rounded-lg border-0 appearance-none focus:outline-none focus:ring-0 peer',
        'outlined' => 'block w-full rounded-lg border appearance-none focus:outline-none focus:ring-0 peer',
        'filled' => 'block w-full rounded-t-lg border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 peer',
        'standard' => 'block w-full border-0 border-b-2 appearance-none bg-transparent focus:outline-none focus:ring-0 peer',
    ];

    // Color classes based on state
    if ($error) {
        $colorClasses = match($variant) {
            'default' => 'text-gray-900 bg-gray-50 dark:bg-gray-700 dark:text-white border-b-2 border-red-600 dark:border-red-500 focus:border-red-600 dark:focus:border-red-500',
            'outlined' => 'text-gray-900 bg-transparent dark:text-white border-red-600 dark:border-red-500 focus:border-red-600 dark:focus:border-red-500',
            'filled' => 'text-gray-900 bg-gray-50 dark:bg-gray-700 dark:text-white border-red-600 dark:border-red-500 focus:border-red-600 dark:focus:border-red-500',
            'standard' => 'text-gray-900 dark:text-white border-red-600 dark:border-red-500 focus:border-red-600 dark:focus:border-red-500',
        };
        $labelColorClasses = 'text-red-600 dark:text-red-500';
    } else {
        $colorClasses = match($variant) {
            'default' => 'text-gray-900 bg-gray-50 dark:bg-gray-700 dark:text-white border-b-2 border-gray-300 dark:border-gray-600 focus:border-blue-600 dark:focus:border-blue-500',
            'outlined' => 'text-gray-900 bg-transparent dark:text-white border-gray-300 dark:border-gray-600 focus:border-blue-600 dark:focus:border-blue-500',
            'filled' => 'text-gray-900 bg-gray-50 dark:bg-gray-700 dark:text-white border-gray-300 dark:border-gray-600 focus:border-blue-600 dark:focus:border-blue-500',
            'standard' => 'text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 focus:border-blue-600 dark:focus:border-blue-500',
        };
        $labelColorClasses = 'text-gray-500 dark:text-gray-400';
    }

    $textareaClasses = $variantClasses[$variant] . ' text-sm px-2.5 pb-2.5 pt-4 ' . $colorClasses;
    $labelClasses = 'absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] peer-focus:start-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 ' . $labelColorClasses;

    if ($error) {
        $labelFocusClasses = 'peer-focus:text-red-600 peer-focus:dark:text-red-500';
    } else {
        $labelFocusClasses = 'peer-focus:text-blue-600 peer-focus:dark:text-blue-500';
    }

    $labelClasses .= ' ' . $labelFocusClasses;

    // Helper text classes
    if ($error) {
        $helperClasses = 'mt-2 text-xs text-red-600 dark:text-red-500';
    } else {
        $helperClasses = 'mt-2 text-xs text-gray-500 dark:text-gray-400';
    }

    // Position classes for label
    $labelPositionClasses = match($variant) {
        'default' => 'start-2.5',
        'outlined' => 'start-1 px-2 peer-focus:px-2 peer-focus:bg-white peer-focus:dark:bg-gray-900',
        'filled' => 'start-2.5',
        'standard' => 'start-0',
    };

    $labelClasses .= ' ' . $labelPositionClasses;
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }}>
    <textarea 
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($readonly) readonly @endif
        class="{{ $textareaClasses }}"
    >{{ $value }}</textarea>
    <label 
        for="{{ $id }}"
        class="{{ $labelClasses }}"
    >
        {{ $label }}@if($required)<span class="text-red-600 dark:text-red-500 ms-1">*</span>@endif
    </label>
    
    @if($helperText)
    <p class="{{ $helperClasses }}">{{ $helperText }}</p>
    @endif
    
    {{ $slot }}
</div>

