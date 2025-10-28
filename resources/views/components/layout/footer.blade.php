@php
    // Sticky class
    $stickyClass = $sticky ? 'fixed bottom-0 left-0 z-20 w-full' : '';
@endphp

<footer 
    {{ $attributes->merge([
        'class' => 'bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4 ' . $stickyClass
    ]) }}
>
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        {{ $slot }}
    </div>
</footer>

