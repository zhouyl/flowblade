@php
    $style = $styles();
    $mergedAttributes = $attributes->merge(['class' => $classes()]);
    if ($style) {
        $mergedAttributes = $mergedAttributes->merge(['style' => $style]);
    }
@endphp

<{{ $as }} {{ $mergedAttributes }}>
    {{ $slot }}
</{{ $as }}>

