@php
    $attributes = $attributes->merge([
        'src' => $src,
        'alt' => $alt,
        'class' => $classes(),
    ]);

    if ($title) {
        $attributes = $attributes->merge(['title' => $title]);
    }

    if ($lazy) {
        $attributes = $attributes->merge(['loading' => 'lazy']);
    }

    if ($width) {
        $attributes = $attributes->merge(['width' => $width]);
    }

    if ($height) {
        $attributes = $attributes->merge(['height' => $height]);
    }
@endphp

<img {{ $attributes }} />

