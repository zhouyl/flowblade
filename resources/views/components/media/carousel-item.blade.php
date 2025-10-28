@php
$dataAttribute = $active ? 'active' : '';
$durationClass = 'duration-'.$duration;
$easingClass = $easing;
@endphp

<div {{ $attributes->merge(['class' => 'hidden '.$durationClass.' '.$easingClass]) }} data-carousel-item="{{ $dataAttribute }}">
    {{ $slot }}
</div>

