<div {{ $attributes->merge(['class' => $classes()]) }}>
    @if($src)
        <img class="h-auto max-w-full rounded-lg" src="{{ $src }}" alt="{{ $alt }}">
    @else
        {{ $slot }}
    @endif
</div>

