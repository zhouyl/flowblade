@php
    $parentData = '$parent';
@endphp

<tr 
    {{ $attributes->merge(['class' => '']) }}
    :class="{
        'hover:bg-gray-50': {$parentData}.hover,
        'even:bg-gray-50': {$parentData}.variant === 'striped'
    }"
>
    {{ $slot }}
</tr>

