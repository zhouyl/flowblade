{{-- Checkbox Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Checkbox --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Checkbox</h3>
        <p class="text-gray-600 mb-4">Simple checkbox input.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-checkbox />
                <span class="text-gray-700">Accept terms and conditions</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex items-center gap-2"&gt;
    &lt;x-checkbox /&gt;
    &lt;span&gt;Accept terms and conditions&lt;/span&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox States</h3>
        <p class="text-gray-600 mb-4">Different checkbox states.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <label class="flex items-center gap-2">
                <x-checkbox />
                <span class="text-gray-700">Unchecked</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked />
                <span class="text-gray-700">Checked</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox :disabled="true" />
                <span class="text-gray-700">Disabled</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked :disabled="true" />
                <span class="text-gray-700">Checked & Disabled</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-checkbox /&gt;
&lt;x-checkbox checked /&gt;
&lt;x-checkbox :disabled="true" /&gt;
&lt;x-checkbox checked :disabled="true" /&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox Group --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox Group</h3>
        <p class="text-gray-600 mb-4">Multiple checkboxes for selection.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <fieldset>
                <legend class="text-sm font-medium text-gray-900 mb-3">Select your interests:</legend>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <span class="text-gray-700">Web Development</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <span class="text-gray-700">Mobile Development</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <span class="text-gray-700">Data Science</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <span class="text-gray-700">DevOps</span>
                    </label>
                </div>
            </fieldset>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;fieldset&gt;
    &lt;legend&gt;Select your interests:&lt;/legend&gt;
    &lt;div class="space-y-2"&gt;
        &lt;label class="flex items-center gap-2"&gt;
            &lt;x-checkbox /&gt;
            &lt;span&gt;Option&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/fieldset&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox with Description --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox with Description</h3>
        <p class="text-gray-600 mb-4">Checkbox with additional description text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <label class="flex gap-3">
                <x-checkbox class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Email notifications</p>
                    <p class="text-gray-600 text-sm">Receive email updates about your account activity</p>
                </div>
            </label>
            <label class="flex gap-3">
                <x-checkbox class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Marketing emails</p>
                    <p class="text-gray-600 text-sm">Receive promotional offers and product updates</p>
                </div>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex gap-3"&gt;
    &lt;x-checkbox class="mt-1" /&gt;
    &lt;div&gt;
        &lt;p class="font-medium"&gt;Option&lt;/p&gt;
        &lt;p class="text-sm text-gray-600"&gt;Description&lt;/p&gt;
    &lt;/div&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox Sizes</h3>
        <p class="text-gray-600 mb-4">Checkboxes in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex items-center gap-6">
            <label class="flex items-center gap-2">
                <x-checkbox size="sm" />
                <span class="text-gray-700">Small</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox size="md" />
                <span class="text-gray-700">Medium</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox size="lg" />
                <span class="text-gray-700">Large</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-checkbox size="sm" /&gt;
&lt;x-checkbox size="md" /&gt;
&lt;x-checkbox size="lg" /&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox Colors</h3>
        <p class="text-gray-600 mb-4">Checkboxes in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-checkbox checked color="primary" />
                <span class="text-gray-700">Primary</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked color="success" />
                <span class="text-gray-700">Success</span>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked color="danger" />
                <span class="text-gray-700">Danger</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-checkbox checked color="primary" /&gt;
&lt;x-checkbox checked color="success" /&gt;
&lt;x-checkbox checked color="danger" /&gt;</code></pre>
        </div>
    </div>

    {{-- Checkbox in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Checkbox in Form</h3>
        <p class="text-gray-600 mb-4">Checkboxes within a form context.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-3">Permissions:</label>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="read" />
                            <span class="text-gray-700">Read</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="write" />
                            <span class="text-gray-700">Write</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="delete" />
                            <span class="text-gray-700">Delete</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Submit
                </button>
            </form>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;form&gt;
    &lt;label class="flex items-center gap-2"&gt;
        &lt;x-checkbox name="permissions" value="read" /&gt;
        &lt;span&gt;Read&lt;/span&gt;
    &lt;/label&gt;
&lt;/form&gt;</code></pre>
        </div>
    </div>
</div>

