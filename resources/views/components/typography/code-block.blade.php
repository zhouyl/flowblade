<div {{ $attributes->merge(['class' => 'relative']) }}>
    @if($title)
        <div class="px-4 py-2 bg-gray-800 text-gray-300 text-sm rounded-t-lg border-b border-gray-700">
            {{ $title }}
            @if($language)
                <span class="float-right text-gray-500">{{ $language }}</span>
            @endif
        </div>
    @endif
    
    <pre {{ $attributes->merge(['class' => $classes()]) }}><code>{{ $slot }}</code></pre>
</div>

