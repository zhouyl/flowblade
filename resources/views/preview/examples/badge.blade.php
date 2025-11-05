{{-- Badge Component Preview Examples --}}

<div class="space-y-8">
    {{-- Badge Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Colors</h3>
        <p class="text-gray-600 mb-4">Badges in different colors for various purposes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-badge color="primary">Primary</x-badge>
                <x-badge color="secondary">Secondary</x-badge>
                <x-badge color="success">Success</x-badge>
                <x-badge color="danger">Danger</x-badge>
                <x-badge color="warning">Warning</x-badge>
                <x-badge color="info">Info</x-badge>
            </div>
        </div>

    </div>

    {{-- Badge Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Sizes</h3>
        <p class="text-gray-600 mb-4">Badges in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap items-center gap-2">
                <x-badge size="sm">Small</x-badge>
                <x-badge size="md">Medium</x-badge>
                <x-badge size="lg">Large</x-badge>
            </div>
        </div>

    </div>

    {{-- Badge Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Variants</h3>
        <p class="text-gray-600 mb-4">Different badge styles.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-badge variant="solid">Solid</x-badge>
                <x-badge variant="outline">Outline</x-badge>
                <x-badge variant="subtle">Subtle</x-badge>
            </div>
        </div>

    </div>

    {{-- Badge with Icon --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge with Icon</h3>
        <p class="text-gray-600 mb-4">Badges with icons for better visual communication.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-badge color="success">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Active
                </x-badge>
                <x-badge color="warning">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    Pending
                </x-badge>
            </div>
        </div>

    </div>

    {{-- Badge with Close Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge with Close Button</h3>
        <p class="text-gray-600 mb-4">Dismissible badges.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-badge color="primary">
                    Tag
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-badge>
                <x-badge color="success">
                    Label
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-badge>
            </div>
        </div>

    </div>

    {{-- Badge in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge in Context</h3>
        <p class="text-gray-600 mb-4">Badges used with other components.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Feature Request</x-text>
                    <x-badge color="info">New</x-badge>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Bug Fix</x-text>
                    <x-badge color="danger">Critical</x-badge>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <x-text>Documentation</x-text>
                    <x-badge color="success">Complete</x-badge>
                </div>
            </div>
        </div>

    </div>
</div>

