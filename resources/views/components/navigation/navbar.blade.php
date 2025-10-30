<nav {{ $attributes->merge(['class' => $classes()]) }}>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        {{ $slot }}
    </div>
</nav>

