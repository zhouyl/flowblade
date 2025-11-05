{{-- Tag Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Tag --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Tag</h3>
        <p class="text-gray-600 mb-4">Simple tag for labeling and categorization.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag>JavaScript</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Blade</x-tag>
            </div>
        </div>

    </div>

    {{-- Tag Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tag Colors</h3>
        <p class="text-gray-600 mb-4">Tags in different colors.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag color="primary">Primary</x-tag>
                <x-tag color="secondary">Secondary</x-tag>
                <x-tag color="success">Success</x-tag>
                <x-tag color="danger">Danger</x-tag>
                <x-tag color="warning">Warning</x-tag>
                <x-tag color="info">Info</x-tag>
            </div>
        </div>

    </div>

    {{-- Tag Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tag Sizes</h3>
        <p class="text-gray-600 mb-4">Tags in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap items-center gap-2">
                <x-tag size="sm">Small</x-tag>
                <x-tag size="md">Medium</x-tag>
                <x-tag size="lg">Large</x-tag>
            </div>
        </div>

    </div>

    {{-- Tag Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tag Variants</h3>
        <p class="text-gray-600 mb-4">Different tag styles.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag variant="solid">Solid</x-tag>
                <x-tag variant="outline">Outline</x-tag>
                <x-tag variant="subtle">Subtle</x-tag>
            </div>
        </div>

    </div>

    {{-- Tag with Icon --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tag with Icon</h3>
        <p class="text-gray-600 mb-4">Tags with icons.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag color="success">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Verified
                </x-tag>
                <x-tag color="warning">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    Attention
                </x-tag>
            </div>
        </div>

    </div>

    {{-- Removable Tag --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Removable Tag</h3>
        <p class="text-gray-600 mb-4">Tags with close button for removal.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag>
                    Python
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-tag>
                <x-tag>
                    Ruby
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-tag>
            </div>
        </div>

    </div>

    {{-- Tag Cloud --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tag Cloud</h3>
        <p class="text-gray-600 mb-4">Multiple tags for categorization.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="flex flex-wrap gap-2">
                <x-tag size="sm">Web</x-tag>
                <x-tag size="md">Development</x-tag>
                <x-tag size="sm">PHP</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="sm">Frontend</x-tag>
                <x-tag size="md">Backend</x-tag>
                <x-tag size="sm">Database</x-tag>
            </div>
        </div>

    </div>
</div>

