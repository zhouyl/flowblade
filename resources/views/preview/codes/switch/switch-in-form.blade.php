<form class="space-y-4">
    <div>
        <label class="flex items-center gap-2 mb-3">
            <x-switch name="email_notifications" />
            <div>
                <x-text weight="medium">Email Notifications</x-text>
                <x-text size="sm" color="secondary">Receive email updates</x-text>
            </div>
        </label>
    </div>
    <div>
        <label class="flex items-center gap-2">
            <x-switch name="sms_notifications" />
            <div>
                <x-text weight="medium">SMS Notifications</x-text>
                <x-text size="sm" color="secondary">Receive SMS alerts</x-text>
            </div>
        </label>
    </div>
    <x-button type="submit">Save Preferences</x-button>
</form>

