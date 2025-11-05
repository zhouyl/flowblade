{{-- Accordion Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Accordion --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Accordion</h3>
        <p class="text-gray-600 mb-4">Simple accordion for collapsible content.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="border border-gray-200 rounded">
                <div class="border-b border-gray-200">
                    <button class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        <span>Accordion Item 1</span>
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                    <div class="px-4 py-3 bg-gray-50 text-gray-700">
                        <p>Content for accordion item 1</p>
                    </div>
                </div>
                <div class="border-b border-gray-200">
                    <button class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        <span>Accordion Item 2</span>
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
                <div>
                    <button class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        <span>Accordion Item 3</span>
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="border border-gray-200 rounded"&gt;
    &lt;div class="border-b border-gray-200"&gt;
        &lt;button class="w-full px-4 py-3 text-left font-medium"&gt;
            Item 1
        &lt;/button&gt;
        &lt;div class="px-4 py-3 bg-gray-50"&gt;
            Content
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Accordion Flush --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion Flush</h3>
        <p class="text-gray-600 mb-4">Accordion without borders.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-2">
                <div class="border-b border-gray-200 pb-2">
                    <button class="w-full px-0 py-2 text-left font-medium text-gray-900 hover:text-blue-600 flex items-center justify-between">
                        <span>Flush Item 1</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200 pb-2">
                    <button class="w-full px-0 py-2 text-left font-medium text-gray-900 hover:text-blue-600 flex items-center justify-between">
                        <span>Flush Item 2</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="space-y-2"&gt;
    &lt;div class="border-b border-gray-200 pb-2"&gt;
        &lt;button class="w-full px-0 py-2"&gt;
            Flush Item
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Accordion with Icons --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion with Icons</h3>
        <p class="text-gray-600 mb-4">Accordion items with leading icons.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="border border-gray-200 rounded space-y-0">
                <div class="border-b border-gray-200">
                    <button class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.5 3A1.5 1.5 0 001 4.5v.006c0 .596.34 1.132.84 1.97.288.588.783 1.494 1.39 2.663.608 1.17 1.34 2.635 2.37 4.101A13.995 13.995 0 0010 18.07a13.995 13.995 0 002.4-2.26c1.03-1.466 1.762-2.93 2.37-4.1.607-1.17 1.102-2.076 1.39-2.664.5-.838.84-1.374.84-1.97V4.5A1.5 1.5 0 0017.5 3h-15z"/>
                            </svg>
                            <span>FAQ</span>
                        </span>
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
                <div class="border-b border-gray-200">
                    <button class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        <span class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Support</span>
                        </span>
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;button class="flex items-center justify-between"&gt;
    &lt;span class="flex items-center gap-3"&gt;
        &lt;svg&gt;...&lt;/svg&gt;
        &lt;span&gt;Item&lt;/span&gt;
    &lt;/span&gt;
    &lt;svg&gt;...&lt;/svg&gt;
&lt;/button&gt;</code></pre>
        </div>
    </div>

    {{-- Accordion Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion Colors</h3>
        <p class="text-gray-600 mb-4">Accordion with different color schemes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div class="border border-blue-200 rounded">
                <button class="w-full px-4 py-3 text-left font-medium text-blue-900 bg-blue-50 hover:bg-blue-100 flex items-center justify-between">
                    <span>Blue Accordion</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </button>
            </div>
            <div class="border border-green-200 rounded">
                <button class="w-full px-4 py-3 text-left font-medium text-green-900 bg-green-50 hover:bg-green-100 flex items-center justify-between">
                    <span>Green Accordion</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="border border-blue-200 rounded"&gt;
    &lt;button class="bg-blue-50 text-blue-900 hover:bg-blue-100"&gt;
        Blue Accordion
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>
</div>

