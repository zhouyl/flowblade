{{-- Divider Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Divider --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Divider</h3>
        <p class="text-gray-600 mb-4">Simple horizontal divider.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-4">
                <p class="text-gray-700">Section 1</p>
                <x-divider />
                <p class="text-gray-700">Section 2</p>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;p&gt;Section 1&lt;/p&gt;
&lt;x-divider /&gt;
&lt;p&gt;Section 2&lt;/p&gt;</code></pre>
        </div>
    </div>

    {{-- Divider with Text --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider with Text</h3>
        <p class="text-gray-600 mb-4">Divider with centered text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
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
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex items-center gap-4"&gt;
    &lt;div class="flex-1 border-t"&gt;&lt;/div&gt;
    &lt;span class="text-gray-600 text-sm"&gt;OR&lt;/span&gt;
    &lt;div class="flex-1 border-t"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Divider Styles --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider Styles</h3>
        <p class="text-gray-600 mb-4">Different divider styles.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
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
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="border-t border-gray-300"&gt;&lt;/div&gt;
&lt;div class="border-t border-dashed border-gray-300"&gt;&lt;/div&gt;
&lt;div class="border-t border-dotted border-gray-300"&gt;&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Vertical Divider --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Vertical Divider</h3>
        <p class="text-gray-600 mb-4">Vertical divider for side-by-side content.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex gap-6">
                <div class="flex-1">
                    <p class="text-gray-700">Left Section</p>
                </div>
                <div class="border-l border-gray-300"></div>
                <div class="flex-1">
                    <p class="text-gray-700">Right Section</p>
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex gap-6"&gt;
    &lt;div class="flex-1"&gt;Left&lt;/div&gt;
    &lt;div class="border-l border-gray-300"&gt;&lt;/div&gt;
    &lt;div class="flex-1"&gt;Right&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Divider Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider Colors</h3>
        <p class="text-gray-600 mb-4">Dividers in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <div class="border-t border-gray-300"></div>
            <div class="border-t border-blue-300"></div>
            <div class="border-t border-green-300"></div>
            <div class="border-t border-red-300"></div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="border-t border-gray-300"&gt;&lt;/div&gt;
&lt;div class="border-t border-blue-300"&gt;&lt;/div&gt;
&lt;div class="border-t border-green-300"&gt;&lt;/div&gt;
&lt;div class="border-t border-red-300"&gt;&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Divider in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Divider in Context</h3>
        <p class="text-gray-600 mb-4">Dividers used in typical layouts.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
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
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="space-y-4"&gt;
    &lt;div&gt;Section 1&lt;/div&gt;
    &lt;div class="border-t"&gt;&lt;/div&gt;
    &lt;div&gt;Section 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>
</div>

