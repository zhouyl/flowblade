<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        size: '{{ $size }}',
        variant: '{{ $variant }}'
    }"
>
    {{ $slot }}
</div>

