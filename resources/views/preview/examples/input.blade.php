{{-- Input Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Input --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Input</h3>
        <p class="text-gray-600 mb-4">Simple text input field for user data entry.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-input placeholder="Enter your name" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input placeholder="Enter your name" /&gt;</code></pre>
        </div>
    </div>

    {{-- Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Sizes</h3>
        <p class="text-gray-600 mb-4">Input fields come in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-input size="sm" placeholder="Small input" />
            <x-input size="md" placeholder="Medium input" />
            <x-input size="lg" placeholder="Large input" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input size="sm" placeholder="Small input" /&gt;
&lt;x-input size="md" placeholder="Medium input" /&gt;
&lt;x-input size="lg" placeholder="Large input" /&gt;</code></pre>
        </div>
    </div>

    {{-- With Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Label</h3>
        <p class="text-gray-600 mb-4">Input with associated label for better accessibility.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <x-input type="email" placeholder="you@example.com" />
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="block text-sm font-medium text-gray-700 mb-2"&gt;
    Email Address
&lt;/label&gt;
&lt;x-input type="email" placeholder="you@example.com" /&gt;</code></pre>
        </div>
    </div>

    {{-- Input Types --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Input Types</h3>
        <p class="text-gray-600 mb-4">Different input types for various data entry scenarios.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-input type="text" placeholder="Text input" />
            <x-input type="email" placeholder="Email input" />
            <x-input type="password" placeholder="Password input" />
            <x-input type="number" placeholder="Number input" />
            <x-input type="date" />
            <x-input type="url" placeholder="URL input" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input type="text" placeholder="Text input" /&gt;
&lt;x-input type="email" placeholder="Email input" /&gt;
&lt;x-input type="password" placeholder="Password input" /&gt;
&lt;x-input type="number" placeholder="Number input" /&gt;
&lt;x-input type="date" /&gt;
&lt;x-input type="url" placeholder="URL input" /&gt;</code></pre>
        </div>
    </div>

    {{-- States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">States</h3>
        <p class="text-gray-600 mb-4">Different input states for various scenarios.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-input placeholder="Normal input" />
            <x-input placeholder="Disabled input" :disabled="true" />
            <x-input placeholder="Read-only input" readonly value="Read-only value" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input placeholder="Normal input" /&gt;
&lt;x-input placeholder="Disabled input" :disabled="true" /&gt;
&lt;x-input placeholder="Read-only input" readonly value="Read-only value" /&gt;</code></pre>
        </div>
    </div>

    {{-- With Prefix/Suffix --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Prefix and Suffix</h3>
        <p class="text-gray-600 mb-4">Input with prefix or suffix icons/text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <div class="relative">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                <x-input placeholder="0.00" class="pl-8" />
            </div>
            <div class="relative">
                <x-input placeholder="Search..." class="pr-10" />
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </span>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="relative"&gt;
    &lt;span class="absolute left-3 top-1/2 transform -translate-y-1/2"&gt;$&lt;/span&gt;
    &lt;x-input placeholder="0.00" class="pl-8" /&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Validation States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Validation States</h3>
        <p class="text-gray-600 mb-4">Input with validation feedback.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Valid Input</label>
                <x-input placeholder="Valid input" class="border-green-500" />
                <p class="text-sm text-green-600 mt-1">✓ This looks good</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Invalid Input</label>
                <x-input placeholder="Invalid input" class="border-red-500" />
                <p class="text-sm text-red-600 mt-1">✗ This field is required</p>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input placeholder="Valid input" class="border-green-500" /&gt;
&lt;p class="text-sm text-green-600 mt-1"&gt;✓ This looks good&lt;/p&gt;

&lt;x-input placeholder="Invalid input" class="border-red-500" /&gt;
&lt;p class="text-sm text-red-600 mt-1"&gt;✗ This field is required&lt;/p&gt;</code></pre>
        </div>
    </div>

    {{-- Full Width --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Full Width</h3>
        <p class="text-gray-600 mb-4">Input spanning full width of container.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-input placeholder="Full width input" class="w-full" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-input placeholder="Full width input" class="w-full" /&gt;</code></pre>
        </div>
    </div>
</div>

