@php
// Size classes
$sizeClasses = match($size) {
    'xs' => 'w-2 h-2',
    'sm' => 'w-2.5 h-2.5',
    'md' => 'w-3 h-3',
    'lg' => 'w-3.5 h-3.5',
    'xl' => 'w-4 h-4',
    default => 'w-3 h-3',
};

// Color classes
$colorClasses = match($color) {
    'gray' => 'bg-gray-400 dark:bg-gray-500',
    'red' => 'bg-red-500 dark:bg-red-600',
    'yellow' => 'bg-yellow-400 dark:bg-yellow-500',
    'green' => 'bg-green-500 dark:bg-green-600',
    'blue' => 'bg-blue-500 dark:bg-blue-600',
    'indigo' => 'bg-indigo-500 dark:bg-indigo-600',
    'purple' => 'bg-purple-500 dark:bg-purple-600',
    'pink' => 'bg-pink-500 dark:bg-pink-600',
    default => 'bg-gray-400 dark:bg-gray-500',
};

// Position classes
$positionClasses = match($position) {
    'top-left' => 'absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2',
    'top-right' => 'absolute top-0 right-0 translate-x-1/2 -translate-y-1/2',
    'bottom-left' => 'absolute bottom-0 left-0 -translate-x-1/2 translate-y-1/2',
    'bottom-right' => 'absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2',
    'inline' => 'inline-flex',
    default => 'inline-flex',
};

// Border classes
$borderClasses = $border ? 'ring-2 ring-white dark:ring-gray-900' : '';

// Base classes
$baseClasses = 'rounded-full';

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
    <span class="relative {{ $positionClasses }}">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $pingColorClasses }} opacity-75"></span>
        <span {{ $attributes->merge(['class' => $baseClasses.' '.$sizeClasses.' '.$colorClasses.' '.$borderClasses.' relative']) }} @if($label) aria-label="{{ $label }}" role="status" @endif>
            {{ $slot }}
        </span>
    </span>
@else
    <span {{ $attributes->merge(['class' => $baseClasses.' '.$sizeClasses.' '.$colorClasses.' '.$borderClasses.' '.$positionClasses]) }} @if($label) aria-label="{{ $label }}" role="status" @endif>
        {{ $slot }}
    </span>
@endif

