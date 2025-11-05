{{-- Card Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Card --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Card</h3>
        <p class="text-gray-600 mb-4">Simple card container for grouping related content.</p>

        <x-preview>
            <x-card>
                <p class="text-gray-700">This is a basic card with simple content.</p>
            </x-card>
        </x-preview>

    </div>

    {{-- Card with Header and Footer --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Header and Footer</h3>
        <p class="text-gray-600 mb-4">Card with header, body, and footer sections.</p>

        <x-preview>
            <x-card>
                <div class="border-b border-gray-200 pb-4 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Card Title</h3>
                </div>
                <div class="mb-4">
                    <p class="text-gray-600">This is the main content of the card. You can add any content here.</p>
                </div>
                <div class="border-t border-gray-200 pt-4">
                    <x-button>Action</x-button>
                </div>
            </x-card>
        </x-preview>

    </div>

    {{-- Card Grid --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card Grid</h3>
        <p class="text-gray-600 mb-4">Multiple cards arranged in a grid layout.</p>

        <x-preview>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @for ($i = 1; $i <= 3; $i++)
                    <x-card>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Card {{ $i }}</h3>
                        <p class="text-gray-600 text-sm">This is card number {{ $i }} in the grid layout.</p>
                    </x-card>
                @endfor
            </div>
        </x-preview>

    </div>

    {{-- Card with Image --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Card with Image</h3>
        <p class="text-gray-600 mb-4">Card with image header and content.</p>

        <x-preview>
            <x-card class="overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Featured Card</h3>
                    <p class="text-gray-600 text-sm mb-4">This card includes an image header and descriptive content.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Learn more →</a>
                </div>
            </x-card>
        </x-preview>

    </div>

    {{-- Hover Effects --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Hover Effects</h3>
        <p class="text-gray-600 mb-4">Cards with interactive hover effects.</p>

        <x-preview>
            <x-card class="hover:shadow-lg transition-shadow cursor-pointer">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Hover Me</h3>
                <p class="text-gray-600">This card has a hover effect that adds a shadow.</p>
            </x-card>
        </x-preview>

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

