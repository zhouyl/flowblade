<div
    {{ $attributes->merge(['class' => $classes()]) }}
    role="tabpanel"
    x-show="activeTab === '{{ $value }}'"
    x-bind:aria-hidden="activeTab !== '{{ $value }}'"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>
    {{ $slot }}
</div>

