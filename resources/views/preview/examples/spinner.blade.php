{{-- Spinner Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Spinner --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Spinner</h3>
        <p class="text-gray-600 mb-4">Simple loading spinner.</p>

        <x-preview file="flowblade::preview.codes.spinner.basic-spinner" />

    </div>

    {{-- Spinner Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner Sizes</h3>
        <p class="text-gray-600 mb-4">Spinners in different sizes.</p>

        <x-preview file="flowblade::preview.codes.spinner.spinner-sizes" />

    </div>

    {{-- Spinner Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner Colors</h3>
        <p class="text-gray-600 mb-4">Spinners in different colors.</p>

        <x-preview file="flowblade::preview.codes.spinner.spinner-colors" />

    </div>

    {{-- Spinner with Text --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner with Text</h3>
        <p class="text-gray-600 mb-4">Spinner with loading text.</p>

        <x-preview file="flowblade::preview.codes.spinner.spinner-with-text" />

    </div>

    {{-- Spinner in Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner in Button</h3>
        <p class="text-gray-600 mb-4">Spinner inside a button for loading state.</p>

        <x-preview file="flowblade::preview.codes.spinner.spinner-in-button" />

    </div>

    {{-- Spinner Overlay --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner Overlay</h3>
        <p class="text-gray-600 mb-4">Spinner as loading overlay.</p>

        <x-preview>
            <div class="relative h-40 bg-gray-50 rounded flex items-center justify-center">
                <div class="absolute inset-0 bg-black bg-opacity-10 rounded flex items-center justify-center">
                    <div class="flex flex-col items-center gap-2">
                        <x-spinner />
                        <p class="text-sm text-gray-700">Loading content...</p>
                    </div>
                </div>
            </div>
        </x-preview>

    </div>

    {{-- Multiple Spinners --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Multiple Spinners</h3>
        <p class="text-gray-600 mb-4">Multiple spinners for different loading states.</p>

        <x-preview>
            <div class="grid grid-cols-3 gap-6">
                <div class="flex flex-col items-center gap-2">
                    <x-spinner size="md" color="primary" />
                    <p class="text-xs text-gray-600">Fetching data</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-spinner size="md" color="success" />
                    <p class="text-xs text-gray-600">Processing</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-spinner size="md" color="warning" />
                    <p class="text-xs text-gray-600">Uploading</p>
                </div>
            </div>
        </x-preview>

    </div>
</div>

