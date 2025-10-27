@php
    // Size mappings
    $sizes = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];
    
    $containerClass = implode(' ', array_filter([
        'w-full overflow-x-auto',
    ]));
    
    $tableClass = implode(' ', array_filter([
        'min-w-full divide-y divide-gray-200',
        $sizes[$size] ?? $sizes['md'],
        $variant === 'bordered' ? 'border border-gray-200' : '',
    ]));
@endphp

<div {{ $attributes->merge(['class' => $containerClass]) }}>
    <table 
        class="{{ $tableClass }}"
        x-data="{
            size: '{{ $size }}',
            variant: '{{ $variant }}',
            hover: {{ $hover ? 'true' : 'false' }}
        }"
    >
        {{ $slot }}
    </table>
</div>

