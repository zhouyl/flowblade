<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        size: '{{ $size }}'
    }"
>
    {{ $slot }}
</div>

