@php
    // Variant-specific classes
    $variantClasses = [
        'line' => 'border-b border-gray-200',
        'enclosed' => 'border-b border-gray-200',
        'pills' => '',
    ];
@endphp

<div 
    {{ $attributes->merge(['class' => 'flex gap-1 ' . ($variantClasses[$variant ?? 'line'] ?? $variantClasses['line'])]) }}
    role="tablist"
    x-bind:class="{
        'border-b border-gray-200': variant === 'line' || variant === 'enclosed',
    }"
>
    {{ $slot }}
</div>

