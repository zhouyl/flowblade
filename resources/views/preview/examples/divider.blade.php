{{-- Divider Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Divider --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Divider</h3>
        <p class="text-gray-600 mb-4">Simple horizontal divider.</p>

        <x-preview>
            <div class="space-y-4">
                <p class="text-gray-700">Section 1</p>
                <x-divider />
                <p class="text-gray-700">Section 2</p>
            </div>
        </x-preview>

    </div>

    {{-- Divider with Text --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider with Text</h3>
        <p class="text-gray-600 mb-4">Divider with centered text.</p>

        <x-preview>
            <div class="flex items-center gap-4">
                <div class="flex-1 border-t border-gray-300"></div>
                <x-text size="sm" color="secondary">OR</x-text>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex-1 border-t border-gray-300"></div>
                <x-text size="sm" color="secondary">AND</x-text>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>
        </x-preview>

    </div>

    {{-- Divider Styles --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider Styles</h3>
        <p class="text-gray-600 mb-4">Different divider styles.</p>

        <x-preview>
            <div>
                <p class="text-sm text-gray-600 mb-2">Solid:</p>
                <div class="border-t border-gray-300"></div>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Dashed:</p>
                <div class="border-t border-dashed border-gray-300"></div>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Dotted:</p>
                <div class="border-t border-dotted border-gray-300"></div>
            </div>
        </x-preview>

    </div>

    {{-- Vertical Divider --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Vertical Divider</h3>
        <p class="text-gray-600 mb-4">Vertical divider for side-by-side content.</p>

        <x-preview>
            <div class="flex gap-6">
                <div class="flex-1">
                    <p class="text-gray-700">Left Section</p>
                </div>
                <div class="border-l border-gray-300"></div>
                <div class="flex-1">
                    <p class="text-gray-700">Right Section</p>
                </div>
            </div>
        </x-preview>

    </div>

    {{-- Divider Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider Colors</h3>
        <p class="text-gray-600 mb-4">Dividers in different colors.</p>

        <x-preview>
            <div class="border-t border-gray-300"></div>
            <div class="border-t border-blue-300"></div>
            <div class="border-t border-green-300"></div>
            <div class="border-t border-red-300"></div>
        </x-preview>

    </div>

    {{-- Divider in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider in Context</h3>
        <p class="text-gray-600 mb-4">Dividers used in typical layouts.</p>

        <x-preview>
            <div class="space-y-4">
                <div>
                    <h3 class="font-semibold text-gray-900">Section 1</h3>
                    <p class="text-gray-600 text-sm mt-1">Content for section 1</p>
                </div>
                <div class="border-t border-gray-300"></div>
                <div>
                    <h3 class="font-semibold text-gray-900">Section 2</h3>
                    <p class="text-gray-600 text-sm mt-1">Content for section 2</p>
                </div>
                <div class="border-t border-gray-300"></div>
                <div>
                    <h3 class="font-semibold text-gray-900">Section 3</h3>
                    <p class="text-gray-600 text-sm mt-1">Content for section 3</p>
                </div>
            </div>
        </x-preview>

    </div>
</div>

