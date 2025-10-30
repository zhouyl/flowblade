<aside
    id="{{ $id }}"
    {{ $attributes->merge([
        'class' => $classes() . ' w-64',
        'aria-label' => 'Sidebar'
    ]) }}
>
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        {{ $slot }}
    </div>
</aside>

