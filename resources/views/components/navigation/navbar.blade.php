@php
    // Variant classes
    $variantClasses = [
        'default' => 'bg-white dark:bg-gray-900',
        'solid' => 'bg-gray-50 dark:bg-gray-800',
    ];
    
    $variantClass = $variantClasses[$variant] ?? $variantClasses['default'];
    
    // Border class
    $borderClass = $border ? 'border-gray-200 dark:border-gray-700' : '';
    
    // Sticky class
    $stickyClass = $sticky ? 'sticky top-0 z-50' : '';
@endphp

<nav 
    {{ $attributes->merge([
        'class' => $variantClass . ' ' . $borderClass . ' ' . $stickyClass
    ]) }}
>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        {{ $slot }}
    </div>
</nav>

