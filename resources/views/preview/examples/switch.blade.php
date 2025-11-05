{{-- Switch Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Switch --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Switch</h3>
        <p class="text-gray-600 mb-4">Simple toggle switch component.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-switch />
                <span class="text-gray-700">Enable notifications</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex items-center gap-2"&gt;
    &lt;x-switch /&gt;
    &lt;span&gt;Enable notifications&lt;/span&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Switch States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch States</h3>
        <p class="text-gray-600 mb-4">Different switch states.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <label class="flex items-center gap-2">
                <x-switch />
                <span class="text-gray-700">Off</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked />
                <span class="text-gray-700">On</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch :disabled="true" />
                <span class="text-gray-700">Disabled (Off)</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked :disabled="true" />
                <span class="text-gray-700">Disabled (On)</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-switch /&gt;
&lt;x-switch checked /&gt;
&lt;x-switch :disabled="true" /&gt;
&lt;x-switch checked :disabled="true" /&gt;</code></pre>
        </div>
    </div>

    {{-- Switch Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch Sizes</h3>
        <p class="text-gray-600 mb-4">Switches in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex items-center gap-6">
            <label class="flex items-center gap-2">
                <x-switch size="sm" checked />
                <span class="text-gray-700">Small</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch size="md" checked />
                <span class="text-gray-700">Medium</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch size="lg" checked />
                <span class="text-gray-700">Large</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-switch size="sm" checked /&gt;
&lt;x-switch size="md" checked /&gt;
&lt;x-switch size="lg" checked /&gt;</code></pre>
        </div>
    </div>

    {{-- Switch Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch Colors</h3>
        <p class="text-gray-600 mb-4">Switches in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-switch checked color="primary" />
                <span class="text-gray-700">Primary</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="success" />
                <span class="text-gray-700">Success</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="danger" />
                <span class="text-gray-700">Danger</span>
            </label>
            <label class="flex items-center gap-2">
                <x-switch checked color="warning" />
                <span class="text-gray-700">Warning</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-switch checked color="primary" /&gt;
&lt;x-switch checked color="success" /&gt;
&lt;x-switch checked color="danger" /&gt;
&lt;x-switch checked color="warning" /&gt;</code></pre>
        </div>
    </div>

    {{-- Switch with Description --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch with Description</h3>
        <p class="text-gray-600 mb-4">Switches with additional description text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <label class="flex gap-3">
                <x-switch class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Email notifications</p>
                    <p class="text-gray-600 text-sm">Receive email updates about your account</p>
                </div>
            </label>
            <label class="flex gap-3">
                <x-switch checked class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Push notifications</p>
                    <p class="text-gray-600 text-sm">Receive push notifications on your device</p>
                </div>
            </label>
            <label class="flex gap-3">
                <x-switch class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">SMS notifications</p>
                    <p class="text-gray-600 text-sm">Receive SMS messages for important updates</p>
                </div>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex gap-3"&gt;
    &lt;x-switch class="mt-1" /&gt;
    &lt;div&gt;
        &lt;p class="font-medium"&gt;Setting&lt;/p&gt;
        &lt;p class="text-sm text-gray-600"&gt;Description&lt;/p&gt;
    &lt;/div&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Switch in Settings --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch in Settings</h3>
        <p class="text-gray-600 mb-4">Switches in a settings panel layout.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <span class="text-gray-700">Dark Mode</span>
                    <x-switch />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <span class="text-gray-700">Two-Factor Authentication</span>
                    <x-switch checked />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <span class="text-gray-700">Marketing Emails</span>
                    <x-switch />
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded">
                    <span class="text-gray-700">Public Profile</span>
                    <x-switch checked />
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="space-y-4"&gt;
    &lt;div class="flex items-center justify-between p-3"&gt;
        &lt;span&gt;Setting Name&lt;/span&gt;
        &lt;x-switch /&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Switch in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Switch in Form</h3>
        <p class="text-gray-600 mb-4">Switches within a form context.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <form class="space-y-4">
                <div>
                    <label class="flex items-center gap-2">
                        <x-switch name="terms" />
                        <span class="text-gray-700">I agree to the terms and conditions</span>
                    </label>
                </div>
                <div>
                    <label class="flex items-center gap-2">
                        <x-switch name="newsletter" />
                        <span class="text-gray-700">Subscribe to our newsletter</span>
                    </label>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Submit
                </button>
            </form>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;form&gt;
    &lt;label class="flex items-center gap-2"&gt;
        &lt;x-switch name="terms" /&gt;
        &lt;span&gt;I agree to terms&lt;/span&gt;
    &lt;/label&gt;
    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
        </div>
    </div>
</div>

