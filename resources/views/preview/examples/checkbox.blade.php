{{-- Checkbox Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Checkbox --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Checkbox</h3>
        <p class="text-gray-600 mb-4">Simple checkbox input.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-checkbox />
                <x-text>Accept terms and conditions</x-text>
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
                <x-text>Unchecked</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked />
                <x-text>Checked</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox :disabled="true" />
                <x-text>Disabled</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked :disabled="true" />
                <x-text>Checked & Disabled</x-text>
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
                        <x-text>Web Development</x-text>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <x-text>Mobile Development</x-text>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <x-text>Data Science</x-text>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-checkbox />
                        <x-text>DevOps</x-text>
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
                    <x-text weight="medium">Email notifications</x-text>
                    <x-text size="sm" color="secondary">Receive email updates about your account activity</x-text>
                </div>
            </label>
            <label class="flex gap-3">
                <x-checkbox class="mt-1" />
                <div>
                    <x-text weight="medium">Marketing emails</x-text>
                    <x-text size="sm" color="secondary">Receive promotional offers and product updates</x-text>
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
                <x-text>Small</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox size="md" />
                <x-text>Medium</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox size="lg" />
                <x-text>Large</x-text>
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
                <x-text>Primary</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked color="success" />
                <x-text>Success</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-checkbox checked color="danger" />
                <x-text>Danger</x-text>
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
                    <x-label class="block mb-3">Permissions:</x-label>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="read" />
                            <x-text>Read</x-text>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="write" />
                            <x-text>Write</x-text>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-checkbox name="permissions" value="delete" />
                            <x-text>Delete</x-text>
                        </label>
                    </div>
                </div>
                <x-button type="submit">Submit</x-button>
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

