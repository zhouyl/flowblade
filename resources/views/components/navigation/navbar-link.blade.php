<li>
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes()]) }}
        @if($active) aria-current="page" @endif
    >
        {{ $slot }}
    </a>
</li>

