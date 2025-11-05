{{-- Button Component Preview Examples --}}

<div class="space-y-8">
    {{-- Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Colors</h3>
        <p class="text-gray-600 mb-4">Buttons come in different colors to indicate different actions or states.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-3">
                <x-button color="primary">Primary</x-button>
                <x-button color="secondary">Secondary</x-button>
                <x-button color="success">Success</x-button>
                <x-button color="danger">Danger</x-button>
                <x-button color="warning">Warning</x-button>
                <x-button color="info">Info</x-button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button color="primary"&gt;Primary&lt;/x-button&gt;
&lt;x-button color="secondary"&gt;Secondary&lt;/x-button&gt;
&lt;x-button color="success"&gt;Success&lt;/x-button&gt;
&lt;x-button color="danger"&gt;Danger&lt;/x-button&gt;
&lt;x-button color="warning"&gt;Warning&lt;/x-button&gt;
&lt;x-button color="info"&gt;Info&lt;/x-button&gt;</code></pre>
        </div>
    </div>

    {{-- Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Sizes</h3>
        <p class="text-gray-600 mb-4">Buttons are available in multiple sizes to fit different contexts.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap items-center gap-3">
                <x-button size="xs">Extra Small</x-button>
                <x-button size="sm">Small</x-button>
                <x-button size="md">Medium</x-button>
                <x-button size="lg">Large</x-button>
                <x-button size="xl">Extra Large</x-button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button size="xs"&gt;Extra Small&lt;/x-button&gt;
&lt;x-button size="sm"&gt;Small&lt;/x-button&gt;
&lt;x-button size="md"&gt;Medium&lt;/x-button&gt;
&lt;x-button size="lg"&gt;Large&lt;/x-button&gt;
&lt;x-button size="xl"&gt;Extra Large&lt;/x-button&gt;</code></pre>
        </div>
    </div>

    {{-- Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Variants</h3>
        <p class="text-gray-600 mb-4">Different visual styles for different use cases.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-3">
                <x-button variant="solid">Solid</x-button>
                <x-button variant="outline">Outline</x-button>
                <x-button variant="ghost">Ghost</x-button>
                <x-button variant="link">Link</x-button>
                <x-button variant="subtle">Subtle</x-button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button variant="solid"&gt;Solid&lt;/x-button&gt;
&lt;x-button variant="outline"&gt;Outline&lt;/x-button&gt;
&lt;x-button variant="ghost"&gt;Ghost&lt;/x-button&gt;
&lt;x-button variant="link"&gt;Link&lt;/x-button&gt;
&lt;x-button variant="subtle"&gt;Subtle&lt;/x-button&gt;</code></pre>
        </div>
    </div>

    {{-- States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">States</h3>
        <p class="text-gray-600 mb-4">Buttons can be disabled or in a loading state.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-3">
                <x-button>Normal</x-button>
                <x-button :disabled="true">Disabled</x-button>
                <x-button loading="true">Loading</x-button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button&gt;Normal&lt;/x-button&gt;
&lt;x-button :disabled="true"&gt;Disabled&lt;/x-button&gt;
&lt;x-button loading="true"&gt;Loading&lt;/x-button&gt;</code></pre>
        </div>
    </div>

    {{-- With Icons --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Icons</h3>
        <p class="text-gray-600 mb-4">Buttons can include icons for better visual communication.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-3">
                <x-button>
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add Item
                </x-button>
                <x-button color="danger">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete
                </x-button>
                <x-button color="success">
                    Save
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </x-button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button&gt;
    &lt;svg class="w-4 h-4 mr-2" ...&gt;...&lt;/svg&gt;
    Add Item
&lt;/x-button&gt;</code></pre>
        </div>
    </div>

    {{-- Full Width --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Full Width</h3>
        <p class="text-gray-600 mb-4">Buttons can span the full width of their container.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-button class="w-full">Full Width Button</x-button>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-button class="w-full"&gt;Full Width Button&lt;/x-button&gt;</code></pre>
        </div>
    </div>
</div>

