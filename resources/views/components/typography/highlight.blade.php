@if($query)
    {!! $highlightedText() !!}
@else
    <mark {{ $attributes->merge(['class' => $classes()]) }}>{{ $slot }}</mark>
@endif

