<footer
    {{ $attributes->merge([
        'class' => $classes()
    ]) }}
>
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        {{ $slot }}
    </div>
</footer>

