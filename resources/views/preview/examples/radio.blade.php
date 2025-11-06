{{-- Radio Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Radio --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Radio</h3>
        <p class="text-gray-600 mb-4">Simple radio button input.</p>

        <x-preview file="flowblade::preview.codes.radio.simple-radio" />

    </div>

    {{-- Radio Group --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Group</h3>
        <p class="text-gray-600 mb-4">Multiple radio buttons for selection.</p>

        <x-preview file="flowblade::preview.codes.radio.radio-group" />

    </div>

    {{-- Radio States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio States</h3>
        <p class="text-gray-600 mb-4">Different radio button states.</p>

        <x-preview>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="unchecked" />
                <x-text>Unchecked</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="checked" checked />
                <x-text>Checked</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="disabled" :disabled="true" />
                <x-text>Disabled</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="state" value="checked-disabled" checked :disabled="true" />
                <x-text>Checked & Disabled</x-text>
            </label>
        </x-preview>

    </div>

    {{-- Radio with Description --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio with Description</h3>
        <p class="text-gray-600 mb-4">Radio buttons with additional description text.</p>

        <x-preview file="flowblade::preview.codes.radio.radio-with-description" />

    </div>

    {{-- Radio Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Sizes</h3>
        <p class="text-gray-600 mb-4">Radio buttons in different sizes.</p>

        <x-preview>
            <label class="flex items-center gap-2">
                <x-radio name="size" value="sm" size="sm" />
                <x-text>Small</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="size" value="md" size="md" />
                <x-text>Medium</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="size" value="lg" size="lg" />
                <x-text>Large</x-text>
            </label>
        </x-preview>

    </div>

    {{-- Radio Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio Colors</h3>
        <p class="text-gray-600 mb-4">Radio buttons in different colors.</p>

        <x-preview>
            <label class="flex items-center gap-2">
                <x-radio name="color" value="primary" checked color="primary" />
                <x-text>Primary</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="color" value="success" checked color="success" />
                <x-text>Success</x-text>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="color" value="danger" checked color="danger" />
                <x-text>Danger</x-text>
            </label>
        </x-preview>

    </div>

    {{-- Radio in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Radio in Form</h3>
        <p class="text-gray-600 mb-4">Radio buttons within a form context.</p>

        <x-preview>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-3">Shipping Method:</label>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="standard" />
                            <x-text>Standard (5-7 days)</x-text>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="express" />
                            <x-text>Express (2-3 days)</x-text>
                        </label>
                        <label class="flex items-center gap-2">
                            <x-radio name="shipping" value="overnight" />
                            <x-text>Overnight</x-text>
                        </label>
                    </div>
                </div>
                <x-button type="submit">Continue</x-button>
            </form>
        </x-preview>

    </div>
</div>

