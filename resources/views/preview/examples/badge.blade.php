{{-- Badge Component Preview Examples --}}

<div class="space-y-8">
    {{-- Badge Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Colors</h3>
        <p class="text-gray-600 mb-4">Badges in different colors for various purposes.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-colors" />

    </div>

    {{-- Badge Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Sizes</h3>
        <p class="text-gray-600 mb-4">Badges in different sizes.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-sizes" />

    </div>

    {{-- Badge Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Variants</h3>
        <p class="text-gray-600 mb-4">Different badge styles.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-variants" />

    </div>

    {{-- Badge with Icon --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge with Icon</h3>
        <p class="text-gray-600 mb-4">Badges with icons for better visual communication.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-with-icon" />

    </div>

    {{-- Badge Pill --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge Pill</h3>
        <p class="text-gray-600 mb-4">Fully rounded pill-shaped badges.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-pill" />

    </div>

    {{-- Badge with Close Button --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge with Close Button</h3>
        <p class="text-gray-600 mb-4">Dismissible badges.</p>

        <x-preview>
            <div class="flex flex-wrap gap-2">
                <x-badge color="primary">
                    Tag
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-badge>
                <x-badge color="success">
                    Label
                    <button class="ml-1 text-gray-500 hover:text-gray-700">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </x-badge>
            </div>
        </x-preview>

    </div>

    {{-- Badge in List --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Badge in List</h3>
        <p class="text-gray-600 mb-4">Badges used with other components in a list.</p>

        <x-preview file="flowblade::preview.codes.badge.badge-in-list" />

    </div>
</div>

