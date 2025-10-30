<button
    data-collapse-toggle="{{ $target }}"
    type="button"
    {{ $attributes->merge(['class' => $classes()]) }}
    aria-controls="{{ $target }}"
    aria-expanded="false"
>
    <span class="sr-only">Open main menu</span>
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
</button>

