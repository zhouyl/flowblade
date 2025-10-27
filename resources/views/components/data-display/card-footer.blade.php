@php
    $footerClass = 'px-4 py-3 border-t border-gray-200 bg-gray-50';
@endphp

<div {{ $attributes->merge(['class' => $footerClass]) }}>
    {{ $slot }}
</div>

