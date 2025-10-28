@php
$colsClass = match($cols) {
    '2' => 'grid-cols-2',
    '3' => 'grid-cols-2 md:grid-cols-3',
    '4' => 'grid-cols-2 md:grid-cols-4',
    '5' => 'grid-cols-2 md:grid-cols-5',
    '6' => 'grid-cols-2 md:grid-cols-6',
    default => 'grid-cols-2 md:grid-cols-3',
};

$gapClass = 'gap-'.$gap;

$baseClasses = 'grid '.$colsClass.' '.$gapClass;
@endphp

<div {{ $attributes->merge(['class' => $baseClasses]) }}>
    {{ $slot }}
</div>

