@php
$tag = $href && !$disabled ? 'a' : 'button';
$tagAttributes = $href && !$disabled ? ['href' => $href] : ['type' => 'button'];
if ($disabled) {
    $tagAttributes['disabled'] = true;
}
@endphp

<li>
    <{{ $tag }}
        {{ $attributes->merge(array_merge(['class' => $classes()], $tagAttributes)) }}
    >
        @if($icon)
        <span class="inline-flex items-center gap-2">
            @php
                $iconComponent = config('flowblade.prefix', 'flowblade') . '::icon';
            @endphp
            <x-dynamic-component :component="$iconComponent" :name="$icon" class="w-4 h-4" />
            <span>{{ $slot }}</span>
        </span>
        @else
            {{ $slot }}
        @endif
    </{{ $tag }}>
</li>

