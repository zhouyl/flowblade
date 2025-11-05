{{-- Text Component Preview Examples --}}

<div class="space-y-8">
    {{-- Text Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Sizes</h3>
        <p class="text-gray-600 mb-4">Text in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-text size="xs">Extra Small Text</x-text>
            <x-text size="sm">Small Text</x-text>
            <x-text size="md">Medium Text</x-text>
            <x-text size="lg">Large Text</x-text>
            <x-text size="xl">Extra Large Text</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text size="xs"&gt;Extra Small&lt;/x-text&gt;
&lt;x-text size="sm"&gt;Small&lt;/x-text&gt;
&lt;x-text size="md"&gt;Medium&lt;/x-text&gt;
&lt;x-text size="lg"&gt;Large&lt;/x-text&gt;
&lt;x-text size="xl"&gt;Extra Large&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Colors</h3>
        <p class="text-gray-600 mb-4">Text in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-text color="primary">Primary Text</x-text>
            <x-text color="secondary">Secondary Text</x-text>
            <x-text color="success">Success Text</x-text>
            <x-text color="danger">Danger Text</x-text>
            <x-text color="warning">Warning Text</x-text>
            <x-text color="info">Info Text</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text color="primary"&gt;Primary&lt;/x-text&gt;
&lt;x-text color="secondary"&gt;Secondary&lt;/x-text&gt;
&lt;x-text color="success"&gt;Success&lt;/x-text&gt;
&lt;x-text color="danger"&gt;Danger&lt;/x-text&gt;
&lt;x-text color="warning"&gt;Warning&lt;/x-text&gt;
&lt;x-text color="info"&gt;Info&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text Weights --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Weights</h3>
        <p class="text-gray-600 mb-4">Text with different font weights.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-text weight="light">Light Weight Text</x-text>
            <x-text weight="normal">Normal Weight Text</x-text>
            <x-text weight="medium">Medium Weight Text</x-text>
            <x-text weight="semibold">Semibold Weight Text</x-text>
            <x-text weight="bold">Bold Weight Text</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text weight="light"&gt;Light&lt;/x-text&gt;
&lt;x-text weight="normal"&gt;Normal&lt;/x-text&gt;
&lt;x-text weight="medium"&gt;Medium&lt;/x-text&gt;
&lt;x-text weight="semibold"&gt;Semibold&lt;/x-text&gt;
&lt;x-text weight="bold"&gt;Bold&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text Alignment --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Alignment</h3>
        <p class="text-gray-600 mb-4">Text with different alignment.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-text align="left">Left Aligned Text</x-text>
            <x-text align="center">Center Aligned Text</x-text>
            <x-text align="right">Right Aligned Text</x-text>
            <x-text align="justify">Justified Text - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text align="left"&gt;Left Aligned&lt;/x-text&gt;
&lt;x-text align="center"&gt;Center Aligned&lt;/x-text&gt;
&lt;x-text align="right"&gt;Right Aligned&lt;/x-text&gt;
&lt;x-text align="justify"&gt;Justified Text&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text Truncation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Truncation</h3>
        <p class="text-gray-600 mb-4">Text with truncation options.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-text class="truncate">This is a very long text that will be truncated with an ellipsis when it exceeds the container width</x-text>
            <x-text class="line-clamp-2">This is a very long text that will be truncated to two lines with an ellipsis when it exceeds the container width. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</x-text>
            <x-text class="line-clamp-3">This is a very long text that will be truncated to three lines with an ellipsis when it exceeds the container width. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text class="truncate"&gt;Long text...&lt;/x-text&gt;
&lt;x-text class="line-clamp-2"&gt;Long text...&lt;/x-text&gt;
&lt;x-text class="line-clamp-3"&gt;Long text...&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text Variants</h3>
        <p class="text-gray-600 mb-4">Text with different visual variants.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <x-text variant="default">Default Text</x-text>
            <x-text variant="muted">Muted Text</x-text>
            <x-text variant="subtle">Subtle Text</x-text>
            <x-text variant="highlight">Highlighted Text</x-text>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-text variant="default"&gt;Default&lt;/x-text&gt;
&lt;x-text variant="muted"&gt;Muted&lt;/x-text&gt;
&lt;x-text variant="subtle"&gt;Subtle&lt;/x-text&gt;
&lt;x-text variant="highlight"&gt;Highlighted&lt;/x-text&gt;</code></pre>
        </div>
    </div>

    {{-- Text in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Text in Context</h3>
        <p class="text-gray-600 mb-4">Text used in typical content layouts.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
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
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;h3 class="text-lg font-semibold"&gt;Article Title&lt;/h3&gt;
&lt;x-text size="sm" color="secondary"&gt;Published on...&lt;/x-text&gt;
&lt;x-text&gt;Article content...&lt;/x-text&gt;</code></pre>
        </div>
    </div>
</div>

