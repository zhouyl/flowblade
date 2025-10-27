@php
    $cellClass = implode(' ', array_filter([
        'px-6 py-4 whitespace-nowrap text-gray-900',
    ]));
@endphp

<td {{ $attributes->merge(['class' => $cellClass]) }}>
    {{ $slot }}
</td>

