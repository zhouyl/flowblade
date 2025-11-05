{{-- Alert Component Preview Examples --}}

<div class="space-y-8">
    {{-- Alert Types --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert Types</h3>
        <p class="text-gray-600 mb-4">Different alert types for various messages.</p>

        <x-preview file="flowblade::preview.codes.alert.alert-types" />

    </div>

    {{-- Alert with Title --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Title</h3>
        <p class="text-gray-600 mb-4">Alert with a title and description.</p>

        <x-preview file="flowblade::preview.codes.alert.alert-with-title" />

    </div>

    {{-- Alert with Close Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Close Button</h3>
        <p class="text-gray-600 mb-4">Dismissible alert with close button.</p>

        <x-preview file="flowblade::preview.codes.alert.alert-with-close" />

    </div>

    {{-- Alert with List --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with List</h3>
        <p class="text-gray-600 mb-4">Alert containing a list of items.</p>

        <x-preview>
            <x-alert type="error">
                <div class="font-semibold mb-2">Please fix the following errors:</div>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>Email address is invalid</li>
                    <li>Password must be at least 8 characters</li>
                    <li>Terms and conditions must be accepted</li>
                </ul>
            </x-alert>
        </x-preview>

    </div>

    {{-- Alert with Action --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Action</h3>
        <p class="text-gray-600 mb-4">Alert with action button.</p>

        <x-preview>
            <x-alert type="info">
                <div class="flex items-center justify-between">
                    <div>
                        <strong>New Feature:</strong> Check out our latest updates!
                    </div>
                    <x-button size="sm" class="ml-4">Learn More</x-button>
                </div>
            </x-alert>
        </x-preview>

    </div>
</div>

