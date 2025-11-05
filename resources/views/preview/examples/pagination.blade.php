{{-- Pagination Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Pagination --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Pagination</h3>
        <p class="text-gray-600 mb-4">Simple pagination controls.</p>

        <x-preview file="flowblade::preview.codes.pagination.basic-pagination" />

    </div>

    {{-- Pagination with Ellipsis --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination with Ellipsis</h3>
        <p class="text-gray-600 mb-4">Pagination with ellipsis for many pages.</p>

        <x-preview file="flowblade::preview.codes.pagination.pagination-with-ellipsis" />

    </div>

    {{-- Pagination Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Sizes</h3>
        <p class="text-gray-600 mb-4">Pagination in different sizes.</p>

        <x-preview file="flowblade::preview.codes.pagination.pagination-sizes" />

    </div>

    {{-- Pagination Disabled --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Disabled</h3>
        <p class="text-gray-600 mb-4">Pagination with disabled states.</p>

        <x-preview>
            <div class="flex items-center justify-center gap-2">
                <button class="px-3 py-2 border border-gray-300 rounded text-gray-400 cursor-not-allowed opacity-50">Previous</button>
                <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Next</button>
            </div>
        </x-preview>

    </div>

    {{-- Pagination with Info --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination with Info</h3>
        <p class="text-gray-600 mb-4">Pagination with page information.</p>

        <x-preview>
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
        </x-preview>

    </div>

    {{-- Pagination Centered --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pagination Centered</h3>
        <p class="text-gray-600 mb-4">Centered pagination layout.</p>

        <x-preview>
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
        </x-preview>

    </div>
</div>

