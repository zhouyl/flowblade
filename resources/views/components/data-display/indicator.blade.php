@php
    // Ping animation color
    $pingColorClasses = match($color) {
        'gray' => 'bg-gray-400',
        'red' => 'bg-red-500',
        'yellow' => 'bg-yellow-400',
        'green' => 'bg-green-500',
        'blue' => 'bg-blue-500',
        'indigo' => 'bg-indigo-500',
        'purple' => 'bg-purple-500',
        'pink' => 'bg-pink-500',
        default => 'bg-gray-400',
    };
@endphp

@if($ping)
    <span class="relative {{ $position === 'inline' ? 'inline-flex' : ($position === 'top-left' ? 'absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2' : ($position === 'top-right' ? 'absolute top-0 right-0 translate-x-1/2 -translate-y-1/2' : ($position === 'bottom-left' ? 'absolute bottom-0 left-0 -translate-x-1/2 translate-y-1/2' : 'absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2'))) }}">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $pingColorClasses }} opacity-75"></span>
        <span {{ $attributes->merge(['class' => $classes() . ' relative']) }} @if($label) aria-label="{{ $label }}" role="status" @endif>
            {{ $slot }}
        </span>
    </span>
@else
    <span {{ $attributes->merge(['class' => $classes()]) }} @if($label) aria-label="{{ $label }}" role="status" @endif>
        {{ $slot }}
    </span>
@endif

