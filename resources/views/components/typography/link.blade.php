@php
    $linkAttributes = $attributes->merge(array_merge(
        ['class' => $classes()],
        $attributes()
    ));
@endphp

<a {{ $linkAttributes }}>
    {{ $slot }}
</a>

