@php
    $tag = $href && !$disabled ? 'a' : 'div';
    $attributes = $attributes->merge([
        'class' => $classes(),
    ]);

    if ($href && !$disabled) {
        $attributes = $attributes->merge(['href' => $href]);
    }
@endphp

<{{ $tag }} {{ $attributes }}>
    @if ($icon)
        <x-dynamic-component
            :component="'flowblade::icon'"
            :name="$icon"
            class="flex-shrink-0 w-5 h-5"
        />
    @endif

    <div class="flex-1 min-w-0">
        {{ $slot }}
    </div>

    @if ($badge)
        <div class="flex-shrink-0">
            @if (is_string($badge))
                <x-dynamic-component
                    :component="'flowblade::badge'"
                    :color="$badgeColor"
                    size="sm"
                >
                    {{ $badge }}
                </x-dynamic-component>
            @else
                {{ $badge }}
            @endif
        </div>
    @endif
</{{ $tag }}>

