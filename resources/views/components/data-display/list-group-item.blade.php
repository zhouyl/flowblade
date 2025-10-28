@php
$baseClasses = 'w-full px-4 py-2';
$borderClasses = $last ? '' : 'border-b border-gray-200 dark:border-gray-600';
$roundingClasses = $first ? 'rounded-t-lg' : ($last ? 'rounded-b-lg' : '');

if ($as === 'li') {
    $classes = $baseClasses.' '.$borderClasses.' '.$roundingClasses;
} elseif ($as === 'a') {
    if ($active) {
        $classes = 'block '.$baseClasses.' text-white bg-blue-700 '.$borderClasses.' '.$roundingClasses.' cursor-pointer dark:bg-gray-800 dark:border-gray-600';
    } else {
        $classes = 'block '.$baseClasses.' '.$borderClasses.' '.$roundingClasses.' cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white';
    }
} else { // button
    if ($active) {
        $classes = $baseClasses.' font-medium text-left rtl:text-right text-white bg-blue-700 '.$borderClasses.' '.$roundingClasses.' cursor-pointer focus:outline-none dark:bg-gray-800 dark:border-gray-600';
    } elseif ($disabled) {
        $classes = $baseClasses.' font-medium text-left rtl:text-right bg-gray-100 '.$roundingClasses.' cursor-not-allowed dark:bg-gray-600 dark:text-gray-400';
    } else {
        $classes = $baseClasses.' font-medium text-left rtl:text-right '.$borderClasses.' cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white';
    }
}
@endphp

@if($as === 'li')
<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
@elseif($as === 'a')
<a 
    href="{{ $href }}"
    @if($active) aria-current="true" @endif
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</a>
@else
<button 
    type="{{ $type }}"
    @if($active) aria-current="true" @endif
    @if($disabled) disabled @endif
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</button>
@endif

