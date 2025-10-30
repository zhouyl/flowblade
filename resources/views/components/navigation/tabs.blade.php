<div
    {{ $attributes->merge(['class' => $classes()]) }}
    x-data="{
        activeTab: '{{ $defaultValue ?? 'tab-1' }}',
        variant: '{{ $variant }}'
    }"
    @tab-change.window="activeTab = $event.detail.value"
>
    {{ $slot }}
</div>

