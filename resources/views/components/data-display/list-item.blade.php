@if($as === 'li')
    <li {{ $attributes->merge(['class' => $classes()]) }}>
        {{ $slot }}
    </li>
@elseif($as === 'a')
    <a
        href="{{ $href }}"
        @if($active) aria-current="true" @endif
        {{ $attributes->merge(['class' => $classes()]) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        @if($active) aria-current="true" @endif
        @if($disabled) disabled @endif
        {{ $attributes->merge(['class' => $classes()]) }}
    >
        {{ $slot }}
    </button>
@endif

