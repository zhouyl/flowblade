{{-- Code Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Code --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Code</h3>
        <p class="text-gray-600 mb-4">Inline code for displaying code snippets.</p>

        <x-preview file="flowblade::preview.codes.code.basic-code" />

    </div>

    {{-- Code with Language --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code with Language</h3>
        <p class="text-gray-600 mb-4">Code with language specification.</p>

        <x-preview file="flowblade::preview.codes.code.code-with-language" />

    </div>

    {{-- Code Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Sizes</h3>
        <p class="text-gray-600 mb-4">Code in different sizes.</p>

        <x-preview>
            <p class="text-gray-700">
                Small: <x-code size="sm">npm install</x-code>
            </p>
            <p class="text-gray-700">
                Medium: <x-code size="md">npm install package</x-code>
            </p>
            <p class="text-gray-700">
                Large: <x-code size="lg">npm install --save package-name</x-code>
            </p>
        </x-preview>

    </div>

    {{-- Code Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Colors</h3>
        <p class="text-gray-600 mb-4">Code with different background colors.</p>

        <x-preview>
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
        </x-preview>

    </div>

    {{-- Code with Copy Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code with Copy Button</h3>
        <p class="text-gray-600 mb-4">Code with copy to clipboard functionality.</p>

        <x-preview>
            <div class="flex items-center justify-between bg-gray-100 p-3 rounded">
                <x-code>npm install flowblade</x-code>
                <button class="px-2 py-1 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                    Copy
                </button>
            </div>
        </x-preview>

    </div>

    {{-- Code in Documentation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code in Documentation</h3>
        <p class="text-gray-600 mb-4">Code used in documentation context.</p>

        <x-preview>
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
        </x-preview>

    </div>

    {{-- Code Inline --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Inline</h3>
        <p class="text-gray-600 mb-4">Inline code within text.</p>

        <x-preview file="flowblade::preview.codes.code.code-inline" />

    </div>

    {{-- Code Block --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Code Block</h3>
        <p class="text-gray-600 mb-4">Code block with syntax highlighting.</p>

        <x-preview file="flowblade::preview.codes.code.code-block" />

    </div>
</div>

