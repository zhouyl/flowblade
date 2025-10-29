<div class="w-full overflow-x-auto">
    <table
        class="{{ $classes() }}"
        x-data="{
            size: '{{ $size }}',
            variant: '{{ $variant }}',
            hover: {{ $hover ? 'true' : 'false' }}
        }"
    >
        {{ $slot }}
    </table>
</div>

