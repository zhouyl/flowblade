{{-- Heading Component Preview Examples --}}

<div class="space-y-8">
    {{-- Heading Levels --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Levels</h3>
        <p class="text-gray-600 mb-4">Different heading levels from H1 to H6.</p>

        <x-preview>
            <x-heading level="1">Heading Level 1</x-heading>
            <x-heading level="2">Heading Level 2</x-heading>
            <x-heading level="3">Heading Level 3</x-heading>
            <x-heading level="4">Heading Level 4</x-heading>
            <x-heading level="5">Heading Level 5</x-heading>
            <x-heading level="6">Heading Level 6</x-heading>
        </x-preview>

    </div>

    {{-- Heading Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Sizes</h3>
        <p class="text-gray-600 mb-4">Headings with different sizes.</p>

        <x-preview>
            <x-heading level="2" size="xs">Extra Small Heading</x-heading>
            <x-heading level="2" size="sm">Small Heading</x-heading>
            <x-heading level="2" size="md">Medium Heading</x-heading>
            <x-heading level="2" size="lg">Large Heading</x-heading>
            <x-heading level="2" size="xl">Extra Large Heading</x-heading>
        </x-preview>

    </div>

    {{-- Heading Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Colors</h3>
        <p class="text-gray-600 mb-4">Headings in different colors.</p>

        <x-preview>
            <x-heading level="3" color="primary">Primary Heading</x-heading>
            <x-heading level="3" color="success">Success Heading</x-heading>
            <x-heading level="3" color="danger">Danger Heading</x-heading>
            <x-heading level="3" color="warning">Warning Heading</x-heading>
            <x-heading level="3" color="info">Info Heading</x-heading>
        </x-preview>

    </div>

    {{-- Heading Weights --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Weights</h3>
        <p class="text-gray-600 mb-4">Headings with different font weights.</p>

        <x-preview>
            <x-heading level="3" weight="light">Light Weight Heading</x-heading>
            <x-heading level="3" weight="normal">Normal Weight Heading</x-heading>
            <x-heading level="3" weight="semibold">Semibold Weight Heading</x-heading>
            <x-heading level="3" weight="bold">Bold Weight Heading</x-heading>
        </x-preview>

    </div>

    {{-- Heading with Subtitle --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading with Subtitle</h3>
        <p class="text-gray-600 mb-4">Heading combined with subtitle text.</p>

        <x-preview>
            <div>
                <x-heading level="1" size="lg">Welcome to Our Site</x-heading>
                <p class="text-gray-600 mt-2">Discover amazing features and capabilities</p>
            </div>
        </x-preview>

    </div>

    {{-- Heading Alignment --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Alignment</h3>
        <p class="text-gray-600 mb-4">Headings with different text alignment.</p>

        <x-preview>
            <x-heading level="3" class="text-left">Left Aligned Heading</x-heading>
            <x-heading level="3" class="text-center">Center Aligned Heading</x-heading>
            <x-heading level="3" class="text-right">Right Aligned Heading</x-heading>
        </x-preview>

    </div>

    {{-- Heading in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading in Context</h3>
        <p class="text-gray-600 mb-4">Headings used in typical page layouts.</p>

        <x-preview>
            <div class="space-y-4">
                <div>
                    <x-heading level="1" size="lg">Page Title</x-heading>
                    <p class="text-gray-600 mt-1">This is the main page heading</p>
                </div>
                <hr class="my-4" />
                <div>
                    <x-heading level="2" size="md">Section Title</x-heading>
                    <p class="text-gray-600 mt-2">Content for this section goes here</p>
                </div>
                <div>
                    <x-heading level="3" size="sm">Subsection Title</x-heading>
                    <p class="text-gray-600 mt-2">More detailed content</p>
                </div>
            </div>
        </x-preview>

    </div>
</div>

