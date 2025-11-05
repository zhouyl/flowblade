{{-- Modal Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Modal --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Modal</h3>
        <p class="text-gray-600 mb-4">Simple modal dialog for user interaction.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <button 
                data-modal-target="basic-modal" 
                data-modal-toggle="basic-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Open Modal
            </button>
        </div>
        
        <x-modal id="basic-modal">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Modal Title</h3>
                <p class="text-gray-600 mb-6">This is a basic modal dialog. You can add any content here.</p>
                <div class="flex gap-3">
                    <button 
                        data-modal-hide="basic-modal"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                    >
                        Close
                    </button>
                </div>
            </div>
        </x-modal>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;button data-modal-target="modal-id" data-modal-toggle="modal-id"&gt;
    Open Modal
&lt;/button&gt;

&lt;x-modal id="modal-id"&gt;
    &lt;div class="p-6"&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Modal Title&lt;/h3&gt;
        &lt;p&gt;Modal content&lt;/p&gt;
    &lt;/div&gt;
&lt;/x-modal&gt;</code></pre>
        </div>
    </div>

    {{-- Modal with Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Modal with Form</h3>
        <p class="text-gray-600 mb-4">Modal containing a form for user input.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <button 
                data-modal-target="form-modal" 
                data-modal-toggle="form-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Open Form Modal
            </button>
        </div>
        
        <x-modal id="form-modal">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">User Information</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" placeholder="Enter your name" class="w-full px-3 py-2 border border-gray-300 rounded" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" placeholder="Enter your email" class="w-full px-3 py-2 border border-gray-300 rounded" />
                    </div>
                    <div class="flex gap-3 pt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Submit
                        </button>
                        <button 
                            type="button"
                            data-modal-hide="form-modal"
                            class="px-4 py-2 bg-gray-300 text-gray-900 rounded hover:bg-gray-400"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </x-modal>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-modal id="form-modal"&gt;
    &lt;div class="p-6"&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Form Title&lt;/h3&gt;
        &lt;form class="space-y-4"&gt;
            &lt;input type="text" placeholder="Name" /&gt;
            &lt;input type="email" placeholder="Email" /&gt;
            &lt;button type="submit"&gt;Submit&lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;
&lt;/x-modal&gt;</code></pre>
        </div>
    </div>

    {{-- Modal Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Modal Sizes</h3>
        <p class="text-gray-600 mb-4">Modals with different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <button 
                data-modal-target="small-modal" 
                data-modal-toggle="small-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Small Modal
            </button>
            <button 
                data-modal-target="large-modal" 
                data-modal-toggle="large-modal"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Large Modal
            </button>
        </div>
        
        <x-modal id="small-modal" size="sm">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Small Modal</h3>
                <p class="text-gray-600">This is a small modal dialog.</p>
            </div>
        </x-modal>
        
        <x-modal id="large-modal" size="lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Large Modal</h3>
                <p class="text-gray-600">This is a large modal dialog with more space for content.</p>
            </div>
        </x-modal>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-modal id="small-modal" size="sm"&gt;
    &lt;!-- Small modal content --&gt;
&lt;/x-modal&gt;

&lt;x-modal id="large-modal" size="lg"&gt;
    &lt;!-- Large modal content --&gt;
&lt;/x-modal&gt;</code></pre>
        </div>
    </div>

    {{-- Confirmation Modal --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Confirmation Modal</h3>
        <p class="text-gray-600 mb-4">Modal for confirming user actions.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <button 
                data-modal-target="confirm-modal" 
                data-modal-toggle="confirm-modal"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
            >
                Delete Item
            </button>
        </div>
        
        <x-modal id="confirm-modal">
            <div class="p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4v2m0 4v2M6.343 3.665c.886-.887 2.318-.887 3.203 0l9.759 9.759c.886.886.886 2.318 0 3.203l-9.759 9.759c-.886.886-2.317.886-3.203 0L3.14 16.168c-.886-.886-.886-2.317 0-3.203L6.343 3.665z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Delete Item?</h3>
                <p class="text-gray-600 mb-6">Are you sure you want to delete this item? This action cannot be undone.</p>
                <div class="flex gap-3 justify-center">
                    <button class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                        Delete
                    </button>
                    <button 
                        data-modal-hide="confirm-modal"
                        class="px-4 py-2 bg-gray-300 text-gray-900 rounded hover:bg-gray-400"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </x-modal>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-modal id="confirm-modal"&gt;
    &lt;div class="p-6 text-center"&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Confirm Action?&lt;/h3&gt;
        &lt;p class="text-gray-600 mb-6"&gt;Are you sure?&lt;/p&gt;
        &lt;div class="flex gap-3 justify-center"&gt;
            &lt;button&gt;Confirm&lt;/button&gt;
            &lt;button data-modal-hide="confirm-modal"&gt;Cancel&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-modal&gt;</code></pre>
        </div>
    </div>
</div>

