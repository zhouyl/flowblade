{{-- Heading Component Preview Examples --}}

<div class="space-y-8">
    {{-- Heading Levels --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Levels</h3>
        <p class="text-gray-600 mb-4">Different heading levels from H1 to H6.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <x-heading level="1">Heading Level 1</x-heading>
            <x-heading level="2">Heading Level 2</x-heading>
            <x-heading level="3">Heading Level 3</x-heading>
            <x-heading level="4">Heading Level 4</x-heading>
            <x-heading level="5">Heading Level 5</x-heading>
            <x-heading level="6">Heading Level 6</x-heading>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="1"&gt;Heading Level 1&lt;/x-heading&gt;
&lt;x-heading level="2"&gt;Heading Level 2&lt;/x-heading&gt;
&lt;x-heading level="3"&gt;Heading Level 3&lt;/x-heading&gt;
&lt;x-heading level="4"&gt;Heading Level 4&lt;/x-heading&gt;
&lt;x-heading level="5"&gt;Heading Level 5&lt;/x-heading&gt;
&lt;x-heading level="6"&gt;Heading Level 6&lt;/x-heading&gt;</code></pre>
        </div>
    </div>

    {{-- Heading Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Sizes</h3>
        <p class="text-gray-600 mb-4">Headings with different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-heading level="2" size="xs">Extra Small Heading</x-heading>
            <x-heading level="2" size="sm">Small Heading</x-heading>
            <x-heading level="2" size="md">Medium Heading</x-heading>
            <x-heading level="2" size="lg">Large Heading</x-heading>
            <x-heading level="2" size="xl">Extra Large Heading</x-heading>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="2" size="xs"&gt;Extra Small&lt;/x-heading&gt;
&lt;x-heading level="2" size="sm"&gt;Small&lt;/x-heading&gt;
&lt;x-heading level="2" size="md"&gt;Medium&lt;/x-heading&gt;
&lt;x-heading level="2" size="lg"&gt;Large&lt;/x-heading&gt;
&lt;x-heading level="2" size="xl"&gt;Extra Large&lt;/x-heading&gt;</code></pre>
        </div>
    </div>

    {{-- Heading Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Colors</h3>
        <p class="text-gray-600 mb-4">Headings in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-heading level="3" color="primary">Primary Heading</x-heading>
            <x-heading level="3" color="success">Success Heading</x-heading>
            <x-heading level="3" color="danger">Danger Heading</x-heading>
            <x-heading level="3" color="warning">Warning Heading</x-heading>
            <x-heading level="3" color="info">Info Heading</x-heading>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="3" color="primary"&gt;Primary&lt;/x-heading&gt;
&lt;x-heading level="3" color="success"&gt;Success&lt;/x-heading&gt;
&lt;x-heading level="3" color="danger"&gt;Danger&lt;/x-heading&gt;
&lt;x-heading level="3" color="warning"&gt;Warning&lt;/x-heading&gt;
&lt;x-heading level="3" color="info"&gt;Info&lt;/x-heading&gt;</code></pre>
        </div>
    </div>

    {{-- Heading Weights --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Weights</h3>
        <p class="text-gray-600 mb-4">Headings with different font weights.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-heading level="3" weight="light">Light Weight Heading</x-heading>
            <x-heading level="3" weight="normal">Normal Weight Heading</x-heading>
            <x-heading level="3" weight="semibold">Semibold Weight Heading</x-heading>
            <x-heading level="3" weight="bold">Bold Weight Heading</x-heading>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="3" weight="light"&gt;Light&lt;/x-heading&gt;
&lt;x-heading level="3" weight="normal"&gt;Normal&lt;/x-heading&gt;
&lt;x-heading level="3" weight="semibold"&gt;Semibold&lt;/x-heading&gt;
&lt;x-heading level="3" weight="bold"&gt;Bold&lt;/x-heading&gt;</code></pre>
        </div>
    </div>

    {{-- Heading with Subtitle --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading with Subtitle</h3>
        <p class="text-gray-600 mb-4">Heading combined with subtitle text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div>
                <x-heading level="1" size="lg">Welcome to Our Site</x-heading>
                <p class="text-gray-600 mt-2">Discover amazing features and capabilities</p>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div&gt;
    &lt;x-heading level="1" size="lg"&gt;Welcome to Our Site&lt;/x-heading&gt;
    &lt;p class="text-gray-600 mt-2"&gt;Discover amazing features&lt;/p&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Heading Alignment --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading Alignment</h3>
        <p class="text-gray-600 mb-4">Headings with different text alignment.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <x-heading level="3" class="text-left">Left Aligned Heading</x-heading>
            <x-heading level="3" class="text-center">Center Aligned Heading</x-heading>
            <x-heading level="3" class="text-right">Right Aligned Heading</x-heading>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="3" class="text-left"&gt;Left Aligned&lt;/x-heading&gt;
&lt;x-heading level="3" class="text-center"&gt;Center Aligned&lt;/x-heading&gt;
&lt;x-heading level="3" class="text-right"&gt;Right Aligned&lt;/x-heading&gt;</code></pre>
        </div>
    </div>

    {{-- Heading in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Heading in Context</h3>
        <p class="text-gray-600 mb-4">Headings used in typical page layouts.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
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
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-heading level="1" size="lg"&gt;Page Title&lt;/x-heading&gt;
&lt;x-heading level="2" size="md"&gt;Section Title&lt;/x-heading&gt;
&lt;x-heading level="3" size="sm"&gt;Subsection Title&lt;/x-heading&gt;</code></pre>
        </div>
    </div>
</div>

