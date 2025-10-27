@php
    $headerClass = 'px-4 py-3 border-b border-gray-200';
@endphp

<div {{ $attributes->merge(['class' => $headerClass]) }}>
    {{ $slot }}
</div>

