{{-- Card Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Card --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Card</h3>
        <p class="text-gray-600 mb-4">Simple card container for grouping related content.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-card>
                <p class="text-gray-700">This is a basic card with simple content.</p>
            </x-card>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-card&gt;
    &lt;p class="text-gray-700"&gt;This is a basic card with simple content.&lt;/p&gt;
&lt;/x-card&gt;</code></pre>
        </div>
    </div>

    {{-- Card with Header and Footer --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Header and Footer</h3>
        <p class="text-gray-600 mb-4">Card with header, body, and footer sections.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-card>
                <div class="border-b border-gray-200 pb-4 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Card Title</h3>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600">This is the main content of the card. You can add any content here.</p>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Action</button>
                </div>
            </x-card>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-card&gt;
    &lt;div class="border-b border-gray-200 pb-4 mb-4"&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Card Title&lt;/h3&gt;
    &lt;/div&gt;
    &lt;div class="mb-4"&gt;
        &lt;p class="text-gray-600"&gt;Content here&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="border-t border-gray-200 pt-4"&gt;
        &lt;button&gt;Action&lt;/button&gt;
    &lt;/div&gt;
&lt;/x-card&gt;</code></pre>
        </div>
    </div>

    {{-- Card Grid --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card Grid</h3>
        <p class="text-gray-600 mb-4">Multiple cards arranged in a grid layout.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @for ($i = 1; $i <= 3; $i++)
                    <x-card>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Card {{ $i }}</h3>
                        <p class="text-gray-600 text-sm">This is card number {{ $i }} in the grid layout.</p>
                    </x-card>
                @endfor
            </div>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;div class="grid grid-cols-1 md:grid-cols-3 gap-4"&gt;
    &lt;x-card&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Card 1&lt;/h3&gt;
        &lt;p class="text-gray-600"&gt;Content&lt;/p&gt;
    &lt;/x-card&gt;
    ...
&lt;/div&gt;</code></pre>
        </div>
    </div>

    {{-- Card with Image --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Image</h3>
        <p class="text-gray-600 mb-4">Card with image header and content.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-card class="overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Featured Card</h3>
                    <p class="text-gray-600 text-sm mb-4">This card includes an image header and descriptive content.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Learn more →</a>
                </div>
            </x-card>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-card class="overflow-hidden"&gt;
    &lt;div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"&gt;&lt;/div&gt;
    &lt;div class="p-4"&gt;
        &lt;h3 class="text-lg font-semibold"&gt;Featured Card&lt;/h3&gt;
        &lt;p class="text-gray-600"&gt;Content&lt;/p&gt;
    &lt;/div&gt;
&lt;/x-card&gt;</code></pre>
        </div>
    </div>

    {{-- Hover Effects --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Hover Effects</h3>
        <p class="text-gray-600 mb-4">Cards with interactive hover effects.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-card class="hover:shadow-lg transition-shadow cursor-pointer">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Hover Me</h3>
                <p class="text-gray-600">This card has a hover effect that adds a shadow.</p>
            </x-card>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-card class="hover:shadow-lg transition-shadow cursor-pointer"&gt;
    &lt;h3 class="text-lg font-semibold"&gt;Hover Me&lt;/h3&gt;
    &lt;p class="text-gray-600"&gt;This card has a hover effect&lt;/p&gt;
&lt;/x-card&gt;</code></pre>
        </div>
    </div>

    {{-- Colored Cards --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Colored Cards</h3>
        <p class="text-gray-600 mb-4">Cards with different background colors.</p>
        
        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-card class="bg-blue-50 border-blue-200">
                <p class="text-blue-900">Blue card for informational content</p>
            </x-card>
            <x-card class="bg-green-50 border-green-200">
                <p class="text-green-900">Green card for success messages</p>
            </x-card>
            <x-card class="bg-red-50 border-red-200">
                <p class="text-red-900">Red card for error or warning content</p>
            </x-card>
        </div>
        
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
            <pre class="font-mono text-sm"><code>&lt;x-card class="bg-blue-50 border-blue-200"&gt;
    &lt;p class="text-blue-900"&gt;Blue card&lt;/p&gt;
&lt;/x-card&gt;

&lt;x-card class="bg-green-50 border-green-200"&gt;
    &lt;p class="text-green-900"&gt;Green card&lt;/p&gt;
&lt;/x-card&gt;</code></pre>
        </div>
    </div>
</div>

