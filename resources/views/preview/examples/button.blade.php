{{-- Button Component Preview Examples --}}

<div class="space-y-8">
    {{-- Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Colors</h3>
        <p class="text-gray-600 mb-4">Buttons come in different colors to indicate different actions or states.</p>

        <x-preview file="flowblade::preview.codes.button.button-colors" />

    </div>

    {{-- Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Sizes</h3>
        <p class="text-gray-600 mb-4">Buttons are available in multiple sizes to fit different contexts.</p>

        <x-preview file="flowblade::preview.codes.button.button-sizes" />

    </div>

    {{-- Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Variants</h3>
        <p class="text-gray-600 mb-4">Different visual styles for different use cases.</p>

        <x-preview file="flowblade::preview.codes.button.button-variants" />

    </div>

    {{-- States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">States</h3>
        <p class="text-gray-600 mb-4">Buttons can be disabled or in a loading state.</p>

        <x-preview>
            <div class="flex flex-wrap gap-3">
                <x-button>Normal</x-button>
                <x-button :disabled="true">Disabled</x-button>
                <x-button loading="true">Loading</x-button>
            </div>
        </x-preview>

    </div>

    {{-- With Icons --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Icons</h3>
        <p class="text-gray-600 mb-4">Buttons can include icons for better visual communication.</p>

        <x-preview>
            <div class="flex flex-wrap gap-3">
                <x-button>
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add Item
                </x-button>
                <x-button color="danger">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Delete
                </x-button>
                <x-button color="success">
                    Save
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </x-button>
            </div>
        </x-preview>

    </div>

    {{-- Full Width --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Full Width</h3>
        <p class="text-gray-600 mb-4">Buttons can span the full width of their container.</p>

        <x-preview>
            <x-button class="w-full">Full Width Button</x-button>
        </x-preview>

    </div>
</div>

