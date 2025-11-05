<form class="space-y-4">
    <div>
        <x-label class="block mb-3">Permissions:</x-label>
        <div class="space-y-2">
            <label class="flex items-center gap-2">
                <x-checkbox name="permissions" value="read" />
                <x-text>Read</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox name="permissions" value="write" />
                <x-text>Write</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox name="permissions" value="delete" />
                <x-text>Delete</x-text>
            </label>
        </div>
    </div>
    <x-button type="submit">Submit</x-button>
</form>

