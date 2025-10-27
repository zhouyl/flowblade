@if($type === 'ol')
    <ol {{ $attributes->merge(['class' => $classes()]) }}>
        {{ $slot }}
    </ol>
@else
    <ul {{ $attributes->merge(['class' => $classes()]) }}>
        {{ $slot }}
    </ul>
@endif

