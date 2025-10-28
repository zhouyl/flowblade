@php
// Size classes for track
$sizeClasses = match($size) {
    'sm' => 'w-9 h-5',
    'lg' => 'w-14 h-7',
    default => 'w-11 h-6',
};

// Size classes for thumb (using after: pseudo-element)
$thumbSizeClasses = match($size) {
    'sm' => 'after:h-4 after:w-4',
    'lg' => 'after:h-6 after:w-6',
    default => 'after:h-5 after:w-5',
};

// Thumb position classes
$thumbPositionClasses = match($size) {
    'sm' => 'after:top-[2px] after:start-[2px]',
    'lg' => 'after:top-0.5 after:start-[4px]',
    default => 'after:top-[2px] after:start-[2px]',
};

// Thumb translate classes
$thumbTranslateClasses = match($size) {
    'sm' => 'peer-checked:after:translate-x-full',
    'lg' => 'peer-checked:after:translate-x-full',
    default => 'peer-checked:after:translate-x-full',
};

// Color classes
$colorClasses = match($color) {
    'secondary' => 'peer-focus:ring-gray-300 dark:peer-focus:ring-gray-800 peer-checked:bg-gray-600 dark:peer-checked:bg-gray-600',
    'success' => 'peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:bg-green-600 dark:peer-checked:bg-green-600',
    'warning' => 'peer-focus:ring-yellow-300 dark:peer-focus:ring-yellow-800 peer-checked:bg-yellow-400 dark:peer-checked:bg-yellow-400',
    'danger' => 'peer-focus:ring-red-300 dark:peer-focus:ring-red-800 peer-checked:bg-red-600 dark:peer-checked:bg-red-600',
    'info' => 'peer-focus:ring-cyan-300 dark:peer-focus:ring-cyan-800 peer-checked:bg-cyan-600 dark:peer-checked:bg-cyan-600',
    'purple' => 'peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:bg-purple-600 dark:peer-checked:bg-purple-600',
    'teal' => 'peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:bg-teal-600 dark:peer-checked:bg-teal-600',
    'orange' => 'peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 peer-checked:bg-orange-500 dark:peer-checked:bg-orange-500',
    default => 'peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600',
};

// Label text color
$labelColorClasses = $disabled
    ? 'text-gray-400 dark:text-gray-500'
    : 'text-gray-900 dark:text-gray-300';
@endphp

<label {{ $attributes->merge(['class' => 'inline-flex items-center cursor-pointer']) }}>
    <input
        type="checkbox"
        class="sr-only peer"
        @if($disabled) disabled @endif
    />
    <div class="relative {{ $sizeClasses }} bg-gray-200 peer-focus:outline-none peer-focus:ring-4 {{ $colorClasses }} rounded-full peer dark:bg-gray-700 {{ $thumbTranslateClasses }} rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute {{ $thumbPositionClasses }} after:bg-white after:border-gray-300 after:border after:rounded-full {{ $thumbSizeClasses }} after:transition-all dark:border-gray-600"></div>
    @if($label || !empty(trim($slot)))
        <span class="ms-3 text-sm font-medium {{ $labelColorClasses }}">
            {{ $label ?: $slot }}
        </span>
    @endif
</label>

