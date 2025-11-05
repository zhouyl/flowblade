{{-- Spinner Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Spinner --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Spinner</h3>
        <p class="text-gray-600 mb-4">Simple loading spinner.</p>

        <x-preview>
            <x-spinner />
        </x-preview>

    </div>

    {{-- Spinner Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner Sizes</h3>
        <p class="text-gray-600 mb-4">Spinners in different sizes.</p>

        <x-preview>
            <x-spinner size="sm" />
            <x-spinner size="md" />
            <x-spinner size="lg" />
        </x-preview>

    </div>

    {{-- Spinner Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner Colors</h3>
        <p class="text-gray-600 mb-4">Spinners in different colors.</p>

        <x-preview>
            <x-spinner color="primary" />
            <x-spinner color="success" />
            <x-spinner color="warning" />
            <x-spinner color="danger" />
        </x-preview>

    </div>

    {{-- Spinner with Text --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner with Text</h3>
        <p class="text-gray-600 mb-4">Spinner with loading text.</p>

        <x-preview>
            <div class="flex flex-col items-center gap-3">
                <x-spinner />
                <p class="text-gray-600">Loading...</p>
            </div>
        </x-preview>

    </div>

    {{-- Spinner in Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Spinner in Button</h3>
        <p class="text-gray-600 mb-4">Spinner inside a button for loading state.</p>

        <x-preview>
            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center gap-2">
                <x-spinner size="sm" color="white" />
                Processing...
            </button>
            <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                Submit
            </button>
        </x-preview>

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

