{{-- Radio Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Radio --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Radio</h3>
        <p class="text-gray-600 mb-4">Simple radio button input.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-radio name="option" value="1" />
                <span class="text-gray-700">Option 1</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex items-center gap-2"&gt;
    &lt;x-radio name="option" value="1" /&gt;
    &lt;span&gt;Option 1&lt;/span&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Radio Group --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Group</h3>
        <p class="text-gray-600 mb-4">Multiple radio buttons for selection.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <fieldset>
                <legend class="text-sm font-medium text-gray-900 mb-3">Choose your preference:</legend>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <x-radio name="preference" value="option1" />
                        <span class="text-gray-700">Option 1</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-radio name="preference" value="option2" />
                        <span class="text-gray-700">Option 2</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <x-radio name="preference" value="option3" />
                        <span class="text-gray-700">Option 3</span>
                    </label>
                </div>
            </fieldset>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;fieldset&gt;
    &lt;legend&gt;Choose your preference:&lt;/legend&gt;
    &lt;div class="space-y-2"&gt;
        &lt;label class="flex items-center gap-2"&gt;
            &lt;x-radio name="preference" value="option1" /&gt;
            &lt;span&gt;Option 1&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/fieldset&gt;</code></pre>
        </div>
    </div>

    {{-- Radio States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio States</h3>
        <p class="text-gray-600 mb-4">Different radio button states.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-radio name="state" value="unchecked" />
                <span class="text-gray-700">Unchecked</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="checked" checked />
                <span class="text-gray-700">Checked</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="disabled" :disabled="true" />
                <span class="text-gray-700">Disabled</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="checked-disabled" checked :disabled="true" />
                <span class="text-gray-700">Checked & Disabled</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-radio name="state" value="unchecked" /&gt;
&lt;x-radio name="state" value="checked" checked /&gt;
&lt;x-radio name="state" value="disabled" :disabled="true" /&gt;
&lt;x-radio name="state" value="checked-disabled" checked :disabled="true" /&gt;</code></pre>
        </div>
    </div>

    {{-- Radio with Description --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio with Description</h3>
        <p class="text-gray-600 mb-4">Radio buttons with additional description text.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <label class="flex gap-3">
                <x-radio name="plan" value="basic" class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Basic Plan</p>
                    <p class="text-gray-600 text-sm">Perfect for getting started</p>
                </div>
            </label>
            <label class="flex gap-3">
                <x-radio name="plan" value="pro" class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Pro Plan</p>
                    <p class="text-gray-600 text-sm">For growing businesses</p>
                </div>
            </label>
            <label class="flex gap-3">
                <x-radio name="plan" value="enterprise" class="mt-1" />
                <div>
                    <p class="text-gray-900 font-medium">Enterprise Plan</p>
                    <p class="text-gray-600 text-sm">For large organizations</p>
                </div>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;label class="flex gap-3"&gt;
    &lt;x-radio name="plan" value="basic" class="mt-1" /&gt;
    &lt;div&gt;
        &lt;p class="font-medium"&gt;Basic Plan&lt;/p&gt;
        &lt;p class="text-sm text-gray-600"&gt;Description&lt;/p&gt;
    &lt;/div&gt;
&lt;/label&gt;</code></pre>
        </div>
    </div>

    {{-- Radio Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Sizes</h3>
        <p class="text-gray-600 mb-4">Radio buttons in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex items-center gap-6">
            <label class="flex items-center gap-2">
                <x-radio name="size" value="sm" size="sm" />
                <span class="text-gray-700">Small</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="size" value="md" size="md" />
                <span class="text-gray-700">Medium</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="size" value="lg" size="lg" />
                <span class="text-gray-700">Large</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-radio name="size" value="sm" size="sm" /&gt;
&lt;x-radio name="size" value="md" size="md" /&gt;
&lt;x-radio name="size" value="lg" size="lg" /&gt;</code></pre>
        </div>
    </div>

    {{-- Radio Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Colors</h3>
        <p class="text-gray-600 mb-4">Radio buttons in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-radio name="color" value="primary" checked color="primary" />
                <span class="text-gray-700">Primary</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="color" value="success" checked color="success" />
                <span class="text-gray-700">Success</span>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="color" value="danger" checked color="danger" />
                <span class="text-gray-700">Danger</span>
            </label>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-radio name="color" value="primary" checked color="primary" /&gt;
&lt;x-radio name="color" value="success" checked color="success" /&gt;
&lt;x-radio name="color" value="danger" checked color="danger" /&gt;</code></pre>
        </div>
    </div>

    {{-- Radio in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio in Form</h3>
        <p class="text-gray-600 mb-4">Radio buttons within a form context.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-3">Shipping Method:</label>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="standard" />
                            <span class="text-gray-700">Standard (5-7 days)</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="express" />
                            <span class="text-gray-700">Express (2-3 days)</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="overnight" />
                            <span class="text-gray-700">Overnight</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Continue
                </button>
            </form>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;form&gt;
    &lt;label class="flex items-center gap-2"&gt;
        &lt;x-radio name="shipping" value="standard" /&gt;
        &lt;span&gt;Standard&lt;/span&gt;
    &lt;/label&gt;
&lt;/form&gt;</code></pre>
        </div>
    </div>
</div>

