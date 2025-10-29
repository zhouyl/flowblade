@php
    // Icon sizes
    $iconSizes = [
        'xs' => 'w-3 h-3',
        'sm' => 'w-3 h-3',
        'md' => 'w-4 h-4',
        'lg' => 'w-4 h-4',
        'xl' => 'w-5 h-5',
    ];
@endphp

<span
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        visible: true,
        remove() {
            this.visible = false;
            this.$dispatch('tag-removed');
        }
    }"
    x-show="visible"
>
    @if($icon)
        <x-dynamic-component
            :component="'flowblade::icon'"
            :name="$icon"
            :class="$iconSizes[$size] ?? $iconSizes['md']"
        />
    @endif

    <span>{{ $slot }}</span>

    @if($closable)
        <button
            type="button"
            @click="remove()"
            class="ml-0.5 hover:opacity-70 focus:outline-none"
        >
            <x-dynamic-component
                :component="'flowblade::icon'"
                name="heroicons:x-mark"
                :class="$iconSizes[$size] ?? $iconSizes['md']"
            />
        </button>
    @endif
</span>

