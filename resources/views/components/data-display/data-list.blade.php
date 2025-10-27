@php
    // Size mappings for spacing
    $spacings = [
        'xs' => 'gap-1',
        'sm' => 'gap-2',
        'md' => 'gap-3',
        'lg' => 'gap-4',
        'xl' => 'gap-6',
    ];
    
    $containerClass = implode(' ', array_filter([
        'w-full',
        $orientation === 'vertical' ? 'flex flex-col' : '',
        $spacings[$size] ?? $spacings['md'],
        $divider && $orientation === 'vertical' ? 'divide-y divide-gray-200' : '',
    ]));
@endphp

<dl 
    {{ $attributes->merge(['class' => $containerClass]) }}
    x-data="{
        orientation: '{{ $orientation }}',
        size: '{{ $size }}',
        divider: {{ $divider ? 'true' : 'false' }},
        labelWidth: '{{ $labelWidth }}'
    }"
>
    {{ $slot }}
</dl>

