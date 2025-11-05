{{-- Link Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Link --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Link</h3>
        <p class="text-gray-600 mb-4">Simple hyperlink component.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-link href="https://example.com">Visit Example</x-link>
        </div>

    </div>

    {{-- Link Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link Colors</h3>
        <p class="text-gray-600 mb-4">Links in different colors.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <div><x-link href="#" color="primary">Primary Link</x-link></div>
            <div><x-link href="#" color="secondary">Secondary Link</x-link></div>
            <div><x-link href="#" color="success">Success Link</x-link></div>
            <div><x-link href="#" color="danger">Danger Link</x-link></div>
            <div><x-link href="#" color="warning">Warning Link</x-link></div>
            <div><x-link href="#" color="info">Info Link</x-link></div>
        </div>

    </div>

    {{-- Link Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link Sizes</h3>
        <p class="text-gray-600 mb-4">Links in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <div><x-link href="#" size="sm">Small Link</x-link></div>
            <div><x-link href="#" size="md">Medium Link</x-link></div>
            <div><x-link href="#" size="lg">Large Link</x-link></div>
        </div>

    </div>

    {{-- Link Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link Variants</h3>
        <p class="text-gray-600 mb-4">Different link styles.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <div><x-link href="#" variant="default">Default Link</x-link></div>
            <div><x-link href="#" variant="underline">Underlined Link</x-link></div>
            <div><x-link href="#" variant="hover">Hover Link</x-link></div>
        </div>

    </div>

    {{-- Link with Icon --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link with Icon</h3>
        <p class="text-gray-600 mb-4">Links with icons.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <div>
                <x-link href="#" class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4m-4-6l6-6m0 0l-6 6m6-6v6"/>
                    </svg>
                    External Link
                </x-link>
            </div>
            <div>
                <x-link href="#" class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Learn More
                </x-link>
            </div>
        </div>

    </div>

    {{-- Link States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link States</h3>
        <p class="text-gray-600 mb-4">Different link states.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <div><x-link href="#">Normal Link</x-link></div>
            <div><x-link href="#" class="opacity-50 cursor-not-allowed">Disabled Link</x-link></div>
            <div><x-link href="#" class="font-semibold">Active Link</x-link></div>
        </div>

    </div>

    {{-- Link in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Link in Context</h3>
        <p class="text-gray-600 mb-4">Links used in typical content.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-3">
                <p class="text-gray-700">
                    Check out our <x-link href="#" color="primary">documentation</x-link> for more information.
                </p>
                <p class="text-gray-700">
                    Need help? <x-link href="#" color="info">Contact support</x-link> or visit our <x-link href="#" color="info">FAQ</x-link>.
                </p>
                <div class="pt-3 border-t border-gray-200">
                    <x-link href="#" class="text-sm">← Back to previous page</x-link>
                </div>
            </div>
        </div>

    </div>
</div>

