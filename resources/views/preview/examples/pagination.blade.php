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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex items-center justify-center gap-2"&gt;
    &lt;button class="px-3 py-2 border border-gray-300 rounded"&gt;Previous&lt;/button&gt;
    &lt;button class="px-3 py-2 border border-gray-300 rounded"&gt;1&lt;/button&gt;
    &lt;button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white"&gt;2&lt;/button&gt;
    &lt;button class="px-3 py-2 border border-gray-300 rounded"&gt;Next&lt;/button&gt;
&lt;/div&gt;</code></pre>
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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;button class="flex items-center gap-1"&gt;
    &lt;svg&gt;...&lt;/svg&gt;
    Previous
&lt;/button&gt;</code></pre>
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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;!-- Small --&gt;
&lt;button class="px-2 py-1 text-sm"&gt;1&lt;/button&gt;

&lt;!-- Medium --&gt;
&lt;button class="px-3 py-2"&gt;1&lt;/button&gt;

&lt;!-- Large --&gt;
&lt;button class="px-4 py-3 text-lg"&gt;1&lt;/button&gt;</code></pre>
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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;button class="text-gray-400 cursor-not-allowed opacity-50"&gt;
    Previous
&lt;/button&gt;</code></pre>
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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex items-center justify-between"&gt;
    &lt;p class="text-sm text-gray-600"&gt;Showing 1 to 10 of 100&lt;/p&gt;
    &lt;div class="flex items-center gap-2"&gt;
        &lt;button&gt;Previous&lt;/button&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
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
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex flex-col items-center gap-4"&gt;
    &lt;div class="flex items-center justify-center gap-2"&gt;
        &lt;button&gt;Previous&lt;/button&gt;
        ...
    &lt;/div&gt;
    &lt;p class="text-sm text-gray-600"&gt;Page 2 of 10&lt;/p&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>
</div>

