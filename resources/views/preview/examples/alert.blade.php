{{-- Alert Component Preview Examples --}}

<div class="space-y-8">
    {{-- Alert Types --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert Types</h3>
        <p class="text-gray-600 mb-4">Different alert types for various messages.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-alert type="info">
                <strong>Info:</strong> This is an informational alert message.
            </x-alert>
            <x-alert type="success">
                <strong>Success:</strong> Your action was completed successfully.
            </x-alert>
            <x-alert type="warning">
                <strong>Warning:</strong> Please review this important information.
            </x-alert>
            <x-alert type="error">
                <strong>Error:</strong> An error occurred while processing your request.
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="info"&gt;
    &lt;strong&gt;Info:&lt;/strong&gt; This is an informational alert.
&lt;/x-alert&gt;

&lt;x-alert type="success"&gt;
    &lt;strong&gt;Success:&lt;/strong&gt; Action completed successfully.
&lt;/x-alert&gt;

&lt;x-alert type="warning"&gt;
    &lt;strong&gt;Warning:&lt;/strong&gt; Please review this information.
&lt;/x-alert&gt;

&lt;x-alert type="error"&gt;
    &lt;strong&gt;Error:&lt;/strong&gt; An error occurred.
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>

    {{-- Alert with Title --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Title</h3>
        <p class="text-gray-600 mb-4">Alert with a title and description.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-alert type="info">
                <div class="font-semibold mb-1">Important Notice</div>
                <div class="text-sm">This is a detailed alert message with a title and additional information.</div>
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="info"&gt;
    &lt;div class="font-semibold mb-1"&gt;Important Notice&lt;/div&gt;
    &lt;div class="text-sm"&gt;Detailed message here&lt;/div&gt;
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>

    {{-- Alert with Icon --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Icon</h3>
        <p class="text-gray-600 mb-4">Alert with icon for better visual communication.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-alert type="success">
                <div class="flex items-start">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <strong>Success!</strong> Your changes have been saved.
                    </div>
                </div>
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="success"&gt;
    &lt;div class="flex items-start"&gt;
        &lt;svg class="w-5 h-5 mr-3"&gt;...&lt;/svg&gt;
        &lt;div&gt;
            &lt;strong&gt;Success!&lt;/strong&gt; Your changes saved.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>

    {{-- Alert with Close Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Close Button</h3>
        <p class="text-gray-600 mb-4">Dismissible alert with close button.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-alert type="warning">
                <div class="flex items-start justify-between">
                    <div>
                        <strong>Warning:</strong> This action cannot be undone.
                    </div>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="warning"&gt;
    &lt;div class="flex items-start justify-between"&gt;
        &lt;div&gt;Warning message&lt;/div&gt;
        &lt;button&gt;
            &lt;svg&gt;...&lt;/svg&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>

    {{-- Alert with List --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with List</h3>
        <p class="text-gray-600 mb-4">Alert containing a list of items.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-alert type="error">
                <div class="font-semibold mb-2">Please fix the following errors:</div>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>Email address is invalid</li>
                    <li>Password must be at least 8 characters</li>
                    <li>Terms and conditions must be accepted</li>
                </ul>
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="error"&gt;
    &lt;div class="font-semibold mb-2"&gt;Please fix the following errors:&lt;/div&gt;
    &lt;ul class="list-disc list-inside space-y-1"&gt;
        &lt;li&gt;Error 1&lt;/li&gt;
        &lt;li&gt;Error 2&lt;/li&gt;
    &lt;/ul&gt;
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>

    {{-- Alert with Action --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Alert with Action</h3>
        <p class="text-gray-600 mb-4">Alert with action button.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-alert type="info">
                <div class="flex items-center justify-between">
                    <div>
                        <strong>New Feature:</strong> Check out our latest updates!
                    </div>
                    <button class="ml-4 px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                        Learn More
                    </button>
                </div>
            </x-alert>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-alert type="info"&gt;
    &lt;div class="flex items-center justify-between"&gt;
        &lt;div&gt;Message&lt;/div&gt;
        &lt;button&gt;Action&lt;/button&gt;
    &lt;/div&gt;
&lt;/x-alert&gt;</code></pre>
        </div>
    </div>
</div>

