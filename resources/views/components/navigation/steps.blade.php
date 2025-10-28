@php
    // Orientation classes
    $orientationClasses = [
        'horizontal' => 'flex items-center w-full',
        'vertical' => 'space-y-4',
    ];
    
    $orientationClass = $orientationClasses[$orientation] ?? $orientationClasses['horizontal'];
    
    // Variant-specific classes
    $variantClasses = [
        'default' => 'text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base',
        'progress' => '',
        'detailed' => 'space-y-4',
        'breadcrumb' => 'p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse',
    ];
    
    $variantClass = $variantClasses[$variant] ?? $variantClasses['default'];
@endphp

<ol 
    {{ $attributes->merge([
        'class' => $orientationClass . ' ' . $variantClass
    ]) }}
    data-orientation="{{ $orientation }}"
    data-variant="{{ $variant }}"
    data-current="{{ $current }}"
>
    {{ $slot }}
</ol>

