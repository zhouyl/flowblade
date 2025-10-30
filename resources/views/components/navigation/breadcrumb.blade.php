<nav {{ $attributes->merge(['class' => $classes(), 'aria-label' => 'Breadcrumb']) }}>
    <ol class="flex items-center gap-2" x-data="{ separator: '{{ $separator ?? '/' }}' }">
        {{ $slot }}
    </ol>
</nav>

