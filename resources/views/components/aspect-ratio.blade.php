@php
    $style = $styles();
    $mergedAttributes = $attributes->merge(['class' => $classes()]);
    if ($style) {
        $mergedAttributes = $mergedAttributes->merge(['style' => $style]);
    }
@endphp

<div {{ $mergedAttributes }}>
    <div class="absolute inset-0">
        {{ $slot }}
    </div>
</div>

