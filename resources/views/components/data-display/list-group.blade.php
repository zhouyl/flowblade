@if($as === 'ul')
<ul {{ $attributes->merge(['class' => 'w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white']) }}>
    {{ $slot }}
</ul>
@else
<div {{ $attributes->merge(['class' => 'w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white']) }}>
    {{ $slot }}
</div>
@endif

