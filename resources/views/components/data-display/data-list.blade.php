<dl
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        orientation: '{{ $orientation }}',
        size: '{{ $size }}',
        divider: {{ $divider ? 'true' : 'false' }},
        labelWidth: '{{ $labelWidth }}'
    }"
>
    {{ $slot }}
</dl>

