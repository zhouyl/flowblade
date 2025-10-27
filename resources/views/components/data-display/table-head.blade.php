@php
    $headClass = implode(' ', array_filter([
        'px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider',
    ]));
@endphp

<th {{ $attributes->merge(['class' => $headClass]) }}>
    {{ $slot }}
</th>

