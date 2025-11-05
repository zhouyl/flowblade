<label class="flex items-center gap-2">
    <x-checkbox />
    <x-text>Unchecked</x-text>
</label>
<label class="flex items-center gap-2">
    <x-checkbox checked />
    <x-text>Checked</x-text>
</label>
<label class="flex items-center gap-2">
    <x-checkbox :disabled="true" />
    <x-text>Disabled</x-text>
</label>
<label class="flex items-center gap-2">
    <x-checkbox checked :disabled="true" />
    <x-text>Checked & Disabled</x-text>
</label>

