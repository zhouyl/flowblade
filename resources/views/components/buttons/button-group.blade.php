@php
    $wrapperClasses = $classes();
    
    // Add special classes for attached buttons
    $childClasses = '';
    if ($attached) {
        if ($orientation === 'horizontal') {
            $childClasses = '[&>*:not(:first-child)]:rounded-l-none [&>*:not(:last-child)]:rounded-r-none [&>*:not(:first-child)]:-ml-px';
        } else {
            $childClasses = '[&>*:not(:first-child)]:rounded-t-none [&>*:not(:last-child)]:rounded-b-none [&>*:not(:first-child)]:-mt-px';
        }
    }
@endphp

<div {{ $attributes->merge(['class' => $wrapperClasses . ' ' . $childClasses]) }}>
    {{ $slot }}
</div>

