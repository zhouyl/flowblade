{{-- Switch Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Switch --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Switch</h3>
        <p class="text-gray-600 mb-4">Simple toggle switch component.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-switch />
                <x-text>Enable notifications</x-text>
            </label>
        </div>

    </div>

    {{-- Switch States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch States</h3>
        <p class="text-gray-600 mb-4">Different switch states.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
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

    </div>

    {{-- Switch Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch Sizes</h3>
        <p class="text-gray-600 mb-4">Switches in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex items-center gap-6">
            <label class="flex items-center gap-2">
                <x-switch size="sm" checked />
                <x-text>Small</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-switch size="md" checked />
                <x-text>Medium</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-switch size="lg" checked />
                <x-text>Large</x-text>
            </label>
        </div>

    </div>

    {{-- Switch Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch Colors</h3>
        <p class="text-gray-600 mb-4">Switches in different colors.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-switch checked color="primary" />
                <x-text>Primary</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="success" />
                <x-text>Success</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="danger" />
                <x-text>Danger</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="warning" />
                <x-text>Warning</x-text>
            </label>
        </div>

    </div>

    {{-- Switch with Description --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch with Description</h3>
        <p class="text-gray-600 mb-4">Switches with additional description text.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <label class="flex gap-3">
                <x-switch class="mt-1" />
                <div>
                    <x-text weight="medium">Email notifications</x-text>
                    <x-text size="sm" color="secondary">Receive email updates about your account</x-text>
                </div>
            </label>
            <label class="flex gap-3">
                <x-switch checked class="mt-1" />
                <div>
                    <x-text weight="medium">Push notifications</x-text>
                    <x-text size="sm" color="secondary">Receive push notifications on your device</x-text>
                </div>
            </label>
            <label class="flex gap-3">
                <x-switch class="mt-1" />
                <div>
                    <x-text weight="medium">SMS notifications</x-text>
                    <x-text size="sm" color="secondary">Receive SMS messages for important updates</x-text>
                </div>
            </label>
        </div>

    </div>

    {{-- Switch in Settings --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch in Settings</h3>
        <p class="text-gray-600 mb-4">Switches in a settings panel layout.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Dark Mode</x-text>
                    <x-switch />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Two-Factor Authentication</x-text>
                    <x-switch checked />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Marketing Emails</x-text>
                    <x-switch />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Public Profile</x-text>
                    <x-switch checked />
                </div>
            </div>
        </div>

    </div>

    {{-- Switch in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch in Form</h3>
        <p class="text-gray-600 mb-4">Switches within a form context.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <form class="space-y-4">
                <div>
                    <label class="flex items-center gap-2">
                        <x-switch name="terms" />
                        <x-text>I agree to the terms and conditions</x-text>
                    </label>
                </div>
                <div>
                    <label class="flex items-center gap-2">
                        <x-switch name="newsletter" />
                        <x-text>Subscribe to our newsletter</x-text>
                    </label>
                </div>
                <x-button type="submit">Submit</x-button>
            </form>
        </div>

    </div>
</div>

