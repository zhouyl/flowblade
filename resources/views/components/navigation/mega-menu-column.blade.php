<div {{ $attributes->merge(['class' => 'space-y-3']) }}>
    @if($title)
        <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
            {{ $title }}
        </h3>
    @endif
    
    <ul class="space-y-2">
        {{ $slot }}
    </ul>
</div>

