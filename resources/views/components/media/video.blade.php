@php
$baseClasses = $width.' '.$height.' max-w-full';

if ($rounded) {
    $baseClasses .= ' rounded-lg';
}

if ($border) {
    $baseClasses .= ' border border-gray-200 dark:border-gray-700';
}
@endphp

<video 
    {{ $attributes->merge(['class' => $baseClasses]) }}
    @if($controls) controls @endif
    @if($autoplay) autoplay @endif
    @if($loop) loop @endif
    @if($muted) muted @endif
    @if($poster) poster="{{ $poster }}" @endif
    preload="{{ $preload }}"
>
    @if($src)
        <source src="{{ $src }}" type="video/{{ pathinfo($src, PATHINFO_EXTENSION) }}">
    @endif
    
    {{ $slot }}
    
    Your browser does not support the video tag.
</video>

