<div class="space-y-4">
    <div>
        <div class="flex items-center justify-between mb-2">
            <x-text weight="medium">Installation</x-text>
            <x-text size="sm" color="secondary">100%</x-text>
        </div>
        <x-progress value="100" color="success" />
    </div>
    <div>
        <div class="flex items-center justify-between mb-2">
            <x-text weight="medium">Processing</x-text>
            <x-text size="sm" color="secondary">65%</x-text>
        </div>
        <x-progress value="65" striped animated />
    </div>
    <div>
        <div class="flex items-center justify-between mb-2">
            <x-text weight="medium">Pending</x-text>
            <x-text size="sm" color="secondary">0%</x-text>
        </div>
        <x-progress value="0" />
    </div>
</div>

