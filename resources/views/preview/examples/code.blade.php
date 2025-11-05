{{-- Code Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Code --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Code</h3>
        <p class="text-gray-600 mb-4">Inline code for displaying code snippets.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <p class="text-gray-700">
                Use the <x-code>npm install</x-code> command to install dependencies.
            </p>
        </div>

    </div>

    {{-- Code with Language --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code with Language</h3>
        <p class="text-gray-600 mb-4">Code with language specification.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <div>
                <p class="text-sm text-gray-600 mb-2">PHP:</p>
                <x-code language="php">$user = User::find(1);</x-code>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">JavaScript:</p>
                <x-code language="javascript">const user = await getUser(1);</x-code>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">SQL:</p>
                <x-code language="sql">SELECT * FROM users WHERE id = 1;</x-code>
            </div>
        </div>

    </div>

    {{-- Code Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Sizes</h3>
        <p class="text-gray-600 mb-4">Code in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <p class="text-gray-700">
                Small: <x-code size="sm">npm install</x-code>
            </p>
            <p class="text-gray-700">
                Medium: <x-code size="md">npm install package</x-code>
            </p>
            <p class="text-gray-700">
                Large: <x-code size="lg">npm install --save package-name</x-code>
            </p>
        </div>

    </div>

    {{-- Code Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Colors</h3>
        <p class="text-gray-600 mb-4">Code with different background colors.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <p class="text-gray-700">
                Default: <x-code>npm install</x-code>
            </p>
            <p class="text-gray-700">
                Success: <x-code color="success">npm install</x-code>
            </p>
            <p class="text-gray-700">
                Warning: <x-code color="warning">npm install</x-code>
            </p>
            <p class="text-gray-700">
                Danger: <x-code color="danger">npm install</x-code>
            </p>
        </div>

    </div>

    {{-- Code with Copy Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code with Copy Button</h3>
        <p class="text-gray-600 mb-4">Code with copy to clipboard functionality.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex items-center justify-between bg-gray-100 p-3 rounded">
                <x-code>npm install flowblade</x-code>
                <button class="px-2 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                    Copy
                </button>
            </div>
        </div>

    </div>

    {{-- Code in Documentation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code in Documentation</h3>
        <p class="text-gray-600 mb-4">Code used in documentation context.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-3">
                <p class="text-gray-700">
                    To install the package, run:
                </p>
                <div class="bg-gray-900 text-gray-100 p-3 rounded">
                    <x-code language="bash" class="text-white">npm install flowblade</x-code>
                </div>
                <p class="text-gray-700">
                    Then import it in your project using <x-code>import Flowblade from 'flowblade'</x-code>
                </p>
            </div>
        </div>

    </div>

    {{-- Code Inline vs Block --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Inline vs Block</h3>
        <p class="text-gray-600 mb-4">Inline and block code examples.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <p class="text-sm font-medium text-gray-900 mb-2">Inline Code:</p>
                <p class="text-gray-700">
                    Use <x-code>const x = 10;</x-code> to declare a variable.
                </p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-900 mb-2">Block Code:</p>
                <div class="bg-gray-900 text-gray-100 p-3 rounded overflow-x-auto">
                    <pre class="font-mono text-sm"><code>function add(a, b) {
    return a + b;
}</code></pre>
                </div>
            </div>
        </div>

    </div>
</div>

