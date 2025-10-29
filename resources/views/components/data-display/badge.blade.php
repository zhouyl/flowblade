<span {{ $attributes->merge(['class' => $classes()]) }}>
    @if($icon)
        <x-dynamic-component
            :component="'flowblade::icon'"
            :name="$icon"
            class="w-3 h-3"
        />
    @endif

    {{ $slot }}
</span>

