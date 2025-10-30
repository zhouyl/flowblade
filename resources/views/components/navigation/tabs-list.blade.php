<div
    {{ $attributes->merge(['class' => $classes() . ' gap-1']) }}
    role="tablist"
    x-bind:class="{
        'border-b border-gray-200': variant === 'line' || variant === 'enclosed',
    }"
>
    {{ $slot }}
</div>

