{{-- Pagination Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Pagination --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Pagination</h3>
        <p class="text-gray-600 mb-4">Simple pagination controls.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center justify-center gap-2">
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">1</button>
                <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Next</button>
            </div>
        </div>

    </div>

    {{-- Pagination with Icons --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination with Icons</h3>
        <p class="text-gray-600 mb-4">Pagination with arrow icons.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center justify-center gap-2">
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Previous
                </button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">1</button>
                <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50 flex items-center gap-1">
                    Next
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>

    {{-- Pagination Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Sizes</h3>
        <p class="text-gray-600 mb-4">Pagination in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <p class="text-sm text-gray-600 mb-2">Small:</p>
                <div class="flex items-center justify-center gap-1">
                    <button class="px-2 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">1</button>
                    <button class="px-2 py-1 text-sm border border-blue-600 bg-blue-600 text-white rounded">2</button>
                    <button class="px-2 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">3</button>
                </div>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Medium:</p>
                <div class="flex items-center justify-center gap-2">
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">1</button>
                    <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">2</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                </div>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Large:</p>
                <div class="flex items-center justify-center gap-3">
                    <button class="px-4 py-3 text-lg border border-gray-300 rounded hover:bg-gray-50">1</button>
                    <button class="px-4 py-3 text-lg border border-blue-600 bg-blue-600 text-white rounded">2</button>
                    <button class="px-4 py-3 text-lg border border-gray-300 rounded hover:bg-gray-50">3</button>
                </div>
            </div>
        </div>

    </div>

    {{-- Pagination Disabled --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Disabled</h3>
        <p class="text-gray-600 mb-4">Pagination with disabled states.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center justify-center gap-2">
                <button class="px-3 py-2 border border-gray-300 rounded text-gray-400 cursor-not-allowed opacity-50">Previous</button>
                <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Next</button>
            </div>
        </div>

    </div>

    {{-- Pagination with Info --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination with Info</h3>
        <p class="text-gray-600 mb-4">Pagination with page information.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-600">Showing 1 to 10 of 100 results</p>
                <div class="flex items-center justify-center gap-2">
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">1</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">2</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>

    </div>

    {{-- Pagination Centered --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Centered</h3>
        <p class="text-gray-600 mb-4">Centered pagination layout.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-col items-center gap-4">
                <div class="flex items-center justify-center gap-2">
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">1</button>
                    <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">2</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Next</button>
                </div>
                <p class="text-sm text-gray-600">Page 2 of 10</p>
            </div>
        </div>

    </div>
</div>

