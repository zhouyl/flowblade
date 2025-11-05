{{-- Card Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Card --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Card</h3>
        <p class="text-gray-600 mb-4">Simple card container for grouping related content.</p>

        <x-preview file="flowblade::preview.codes.card.basic-card" />

    </div>

    {{-- Card with Header and Footer --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Header and Footer</h3>
        <p class="text-gray-600 mb-4">Card with header, body, and footer sections.</p>

        <x-preview file="flowblade::preview.codes.card.card-with-header-footer" />

    </div>

    {{-- Card Grid --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card Grid</h3>
        <p class="text-gray-600 mb-4">Multiple cards arranged in a grid layout.</p>

        <x-preview file="flowblade::preview.codes.card.card-grid" />

    </div>

    {{-- Card with Image --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Image</h3>
        <p class="text-gray-600 mb-4">Card with image header and content.</p>

        <x-preview file="flowblade::preview.codes.card.card-with-image" />

    </div>

    {{-- Hover Effects --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Hover Effects</h3>
        <p class="text-gray-600 mb-4">Cards with interactive hover effects.</p>

        <x-preview file="flowblade::preview.codes.card.card-hover-effects" />

    </div>

    {{-- Colored Cards --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Colored Cards</h3>
        <p class="text-gray-600 mb-4">Cards with different background colors.</p>

        <x-preview>
            <x-card class="bg-blue-50 border-blue-200">
                <p class="text-blue-900">Blue card for informational content</p>
            </x-card>
            <x-card class="bg-green-50 border-green-200">
                <p class="text-green-900">Green card for success messages</p>
            </x-card>
            <x-card class="bg-red-50 border-red-200">
                <p class="text-red-900">Red card for error or warning content</p>
            </x-card>
        </x-preview>

    </div>
</div>

