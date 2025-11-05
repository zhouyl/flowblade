<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-switch />
        <x-text>Off</x-text>
    </label>
    <label class="flex items-center gap-2">
        <x-switch checked />
        <x-text>On</x-text>
    </label>
    <label class="flex items-center gap-2">
        <x-switch :disabled="true" />
        <x-text>Disabled (Off)</x-text>
    </label>
    <label class="flex items-center gap-2">
        <x-switch checked :disabled="true" />
        <x-text>Disabled (On)</x-text>
    </label>
</div>

