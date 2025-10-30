@php
    $prefix = config('flowblade.prefix', 'flowblade');
@endphp

<li>
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes() . ' group']) }}
        @if($active) aria-current="page" @endif
    >
        @if($icon)
            <x-dynamic-component
                :component="$prefix . '::icon'"
                :name="$icon"
                class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            />
        @endif

        <span class="ms-3 flex-1 whitespace-nowrap">{{ $slot }}</span>

        @if($badge)
            <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">
                {{ $badge }}
            </span>
        @endif
    </a>
</li>

