@php
    $isLink = !$current && $href;
@endphp

<li {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    @if($isLink)
    <a href="{{ $href }}" class="{{ $classes() . ' gap-1.5' }}">
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component
            :component="$iconComponent"
            :name="$icon"
            class="w-4 h-4"
        />
        @endif
        <span>{{ $slot }}</span>
    </a>
    @else
    <span class="{{ $classes() . ' gap-1.5' }}" @if($current) aria-current="page" @endif>
        @if($icon)
        @php
            $iconComponent = config('flowblade.prefix') ? config('flowblade.prefix') . '-icon' : 'icon';
        @endphp
        <x-dynamic-component
            :component="$iconComponent"
            :name="$icon"
            class="w-4 h-4"
        />
        @endif
        <span>{{ $slot }}</span>
    </span>
    @endif

    @if(!$current)
    <span class="text-gray-400" x-text="separator" aria-hidden="true"></span>
    @endif
</li>

