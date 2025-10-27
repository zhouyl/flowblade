@php
    $bodyClass = 'px-4 py-3';
@endphp

<div {{ $attributes->merge(['class' => $bodyClass]) }}>
    {{ $slot }}
</div>

