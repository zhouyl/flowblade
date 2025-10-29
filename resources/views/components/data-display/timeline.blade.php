<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        size: '{{ $size }}',
        color: '{{ $color }}',
        variant: '{{ $variant }}'
    }"
>
    {{ $slot }}
</div>

