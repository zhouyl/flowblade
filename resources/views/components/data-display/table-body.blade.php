@php
    $parentData = '$parent';
    
    $bodyClass = implode(' ', array_filter([
        'bg-white divide-y divide-gray-200',
    ]));
@endphp

<tbody 
    {{ $attributes->merge(['class' => $bodyClass]) }}
    :class="{
        'divide-y-0': {$parentData}.variant === 'striped'
    }"
>
    {{ $slot }}
</tbody>

