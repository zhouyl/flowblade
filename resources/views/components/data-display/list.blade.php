@if($as === 'ul')
    <ul {{ $attributes->merge(['class' => $classes()]) }}>
        {{ $slot }}
    </ul>
@else
    <div {{ $attributes->merge(['class' => $classes()]) }}>
        {{ $slot }}
    </div>
@endif

