@php
    // Active state classes
    $activeClasses = $active 
        ? 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'
        : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent';
@endphp

<li>
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge([
            'class' => $activeClasses
        ]) }}
        @if($active) aria-current="page" @endif
    >
        {{ $slot }}
    </a>
</li>

