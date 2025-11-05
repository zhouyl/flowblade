{{-- Avatar Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Avatar --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Avatar</h3>
        <p class="text-gray-600 mb-4">Simple avatar with initials or image.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex gap-4">
            <x-avatar initials="JD" />
            <x-avatar initials="AB" />
            <x-avatar initials="XY" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-avatar initials="JD" /&gt;
&lt;x-avatar initials="AB" /&gt;
&lt;x-avatar initials="XY" /&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar Sizes</h3>
        <p class="text-gray-600 mb-4">Avatars in different sizes.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex items-center gap-4">
            <x-avatar initials="XS" size="xs" />
            <x-avatar initials="SM" size="sm" />
            <x-avatar initials="MD" size="md" />
            <x-avatar initials="LG" size="lg" />
            <x-avatar initials="XL" size="xl" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-avatar initials="XS" size="xs" /&gt;
&lt;x-avatar initials="SM" size="sm" /&gt;
&lt;x-avatar initials="MD" size="md" /&gt;
&lt;x-avatar initials="LG" size="lg" /&gt;
&lt;x-avatar initials="XL" size="xl" /&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar Colors</h3>
        <p class="text-gray-600 mb-4">Avatars in different colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex gap-3">
            <x-avatar initials="A" color="primary" />
            <x-avatar initials="B" color="secondary" />
            <x-avatar initials="C" color="success" />
            <x-avatar initials="D" color="danger" />
            <x-avatar initials="E" color="warning" />
            <x-avatar initials="F" color="info" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-avatar initials="A" color="primary" /&gt;
&lt;x-avatar initials="B" color="secondary" /&gt;
&lt;x-avatar initials="C" color="success" /&gt;
&lt;x-avatar initials="D" color="danger" /&gt;
&lt;x-avatar initials="E" color="warning" /&gt;
&lt;x-avatar initials="F" color="info" /&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar with Image --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar with Image</h3>
        <p class="text-gray-600 mb-4">Avatar with image URL.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex gap-4">
            <x-avatar src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" />
            <x-avatar src="https://api.dicebear.com/7.x/avataaars/svg?seed=Jane" />
            <x-avatar src="https://api.dicebear.com/7.x/avataaars/svg?seed=Bob" />
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-avatar src="https://example.com/avatar.jpg" /&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar with Status --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar with Status</h3>
        <p class="text-gray-600 mb-4">Avatar with status indicator.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 flex gap-6">
            <div class="relative">
                <x-avatar initials="ON" />
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
            </div>
            <div class="relative">
                <x-avatar initials="AW" />
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-yellow-500 rounded-full border-2 border-white"></span>
            </div>
            <div class="relative">
                <x-avatar initials="OF" />
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-500 rounded-full border-2 border-white"></span>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="relative"&gt;
    &lt;x-avatar initials="ON" /&gt;
    &lt;span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full"&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar Group --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar Group</h3>
        <p class="text-gray-600 mb-4">Multiple avatars grouped together.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex -space-x-2">
                <x-avatar initials="A1" size="md" />
                <x-avatar initials="A2" size="md" />
                <x-avatar initials="A3" size="md" />
                <x-avatar initials="A4" size="md" />
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex -space-x-2"&gt;
    &lt;x-avatar initials="A1" size="md" /&gt;
    &lt;x-avatar initials="A2" size="md" /&gt;
    &lt;x-avatar initials="A3" size="md" /&gt;
    &lt;x-avatar initials="A4" size="md" /&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Avatar in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Avatar in Context</h3>
        <p class="text-gray-600 mb-4">Avatar used with user information.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded">
                <x-avatar initials="JD" size="md" />
                <div>
                    <p class="text-sm font-medium text-gray-900">John Doe</p>
                    <p class="text-xs text-gray-600">john@example.com</p>
                </div>
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="flex items-center gap-3"&gt;
    &lt;x-avatar initials="JD" size="md" /&gt;
    &lt;div&gt;
        &lt;p class="font-medium"&gt;John Doe&lt;/p&gt;
        &lt;p class="text-xs text-gray-600"&gt;john@example.com&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>
</div>

