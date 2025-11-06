{{-- Text Component Preview Examples --}}

<div class="space-y-8">
    {{-- Text Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Sizes</h3>
        <p class="text-gray-600 mb-4">Text in different sizes.</p>

        <x-preview file="flowblade::preview.codes.text.text-sizes" />

    </div>

    {{-- Text Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Colors</h3>
        <p class="text-gray-600 mb-4">Text in different colors.</p>

        <x-preview file="flowblade::preview.codes.text.text-colors" />

    </div>

    {{-- Text Weights --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Weights</h3>
        <p class="text-gray-600 mb-4">Text with different font weights.</p>

        <x-preview file="flowblade::preview.codes.text.text-weights" />

    </div>

    {{-- Text Alignment --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Alignment</h3>
        <p class="text-gray-600 mb-4">Text with different alignment.</p>

        <x-preview file="flowblade::preview.codes.text.text-alignment" />

    </div>

    {{-- Text Truncation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Truncation</h3>
        <p class="text-gray-600 mb-4">Text with truncation options.</p>

        <x-preview file="flowblade::preview.codes.text.text-truncate" />

    </div>

    {{-- Text Transform --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Transform</h3>
        <p class="text-gray-600 mb-4">Text with different text transformations.</p>

        <x-preview file="flowblade::preview.codes.text.text-transform" />

    </div>

    {{-- Text Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Variants</h3>
        <p class="text-gray-600 mb-4">Text with different visual variants.</p>

        <x-preview>
            <x-text variant="default">Default Text</x-text>
            <x-text variant="muted">Muted Text</x-text>
            <x-text variant="subtle">Subtle Text</x-text>
            <x-text variant="highlight">Highlighted Text</x-text>
        </x-preview>

    </div>

    {{-- Text in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text in Context</h3>
        <p class="text-gray-600 mb-4">Text used in typical content layouts.</p>

        <x-preview>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Article Title</h3>
                    <x-text size="sm" color="secondary" class="mb-3">Published on December 5, 2024</x-text>
                    <x-text>This is the main article content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-text>
                </div>
                <div class="pt-4 border-t border-gray-200">
                    <x-text size="sm" color="secondary">By John Doe</x-text>
                </div>
            </div>
        </x-preview>

    </div>
</div>

