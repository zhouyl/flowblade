{{-- Input Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Input --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Input</h3>
        <p class="text-gray-600 mb-4">Simple text input field for user data entry.</p>

        <x-preview file="flowblade::preview.codes.input.basic-input" />

    </div>

    {{-- Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Sizes</h3>
        <p class="text-gray-600 mb-4">Input fields come in different sizes.</p>

        <x-preview file="flowblade::preview.codes.input.input-sizes" />

    </div>

    {{-- With Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Label</h3>
        <p class="text-gray-600 mb-4">Input with associated label for better accessibility.</p>

        <x-preview file="flowblade::preview.codes.input.input-with-label" />

    </div>

    {{-- Input Types --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Input Types</h3>
        <p class="text-gray-600 mb-4">Different input types for various data entry scenarios.</p>

        <x-preview file="flowblade::preview.codes.input.input-types" />

    </div>

    {{-- States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">States</h3>
        <p class="text-gray-600 mb-4">Different input states for various scenarios.</p>

        <x-preview file="flowblade::preview.codes.input.input-states" />

    </div>

    {{-- With Prefix --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Prefix</h3>
        <p class="text-gray-600 mb-4">Input with prefix text or icon.</p>

        <x-preview file="flowblade::preview.codes.input.input-with-prefix" />

    </div>

    {{-- With Suffix --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Suffix</h3>
        <p class="text-gray-600 mb-4">Input with suffix icon or button.</p>

        <x-preview file="flowblade::preview.codes.input.input-with-suffix" />

    </div>

    {{-- Validation States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Validation States</h3>
        <p class="text-gray-600 mb-4">Input with validation feedback.</p>

        <x-preview file="flowblade::preview.codes.input.input-validation" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Invalid Input</label>
                <x-input placeholder="Invalid input" class="border-red-500" />
                <p class="text-sm text-red-600 mt-1">✗ This field is required</p>
            </div>
        </x-preview>

    </div>

    {{-- Full Width --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Full Width</h3>
        <p class="text-gray-600 mb-4">Input spanning full width of container.</p>

        <x-preview>
            <x-input placeholder="Full width input" class="w-full" />
        </x-preview>

    </div>
</div>

