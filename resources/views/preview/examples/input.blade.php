{{-- Input Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Input --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Input</h3>
        <p class="text-gray-600 mb-4">Simple text input field for user data entry.</p>

        <x-preview>
            <x-input placeholder="Enter your name" />
        </x-preview>

    </div>

    {{-- Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Sizes</h3>
        <p class="text-gray-600 mb-4">Input fields come in different sizes.</p>

        <x-preview>
            <x-input size="sm" placeholder="Small input" />
            <x-input size="md" placeholder="Medium input" />
            <x-input size="lg" placeholder="Large input" />
        </x-preview>

    </div>

    {{-- With Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Label</h3>
        <p class="text-gray-600 mb-4">Input with associated label for better accessibility.</p>

        <x-preview>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <x-input type="email" placeholder="you@example.com" />
            </div>
        </x-preview>

    </div>

    {{-- Input Types --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Input Types</h3>
        <p class="text-gray-600 mb-4">Different input types for various data entry scenarios.</p>

        <x-preview>
            <x-input type="text" placeholder="Text input" />
            <x-input type="email" placeholder="Email input" />
            <x-input type="password" placeholder="Password input" />
            <x-input type="number" placeholder="Number input" />
            <x-input type="date" />
            <x-input type="url" placeholder="URL input" />
        </x-preview>

    </div>

    {{-- States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">States</h3>
        <p class="text-gray-600 mb-4">Different input states for various scenarios.</p>

        <x-preview>
            <x-input placeholder="Normal input" />
            <x-input placeholder="Disabled input" :disabled="true" />
            <x-input placeholder="Read-only input" readonly value="Read-only value" />
        </x-preview>

    </div>

    {{-- With Prefix/Suffix --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">With Prefix and Suffix</h3>
        <p class="text-gray-600 mb-4">Input with prefix or suffix icons/text.</p>

        <x-preview>
            <div class="relative">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                <x-input placeholder="0.00" class="pl-8" />
            </div>
            <div class="relative">
                <x-input placeholder="Search..." class="pr-10" />
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </span>
            </div>
        </x-preview>

    </div>

    {{-- Validation States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Validation States</h3>
        <p class="text-gray-600 mb-4">Input with validation feedback.</p>

        <x-preview>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Valid Input</label>
                <x-input placeholder="Valid input" class="border-green-500" />
                <p class="text-sm text-green-600 mt-1">✓ This looks good</p>
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

