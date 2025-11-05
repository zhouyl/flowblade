{{-- Tabs Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Tabs --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Tabs</h3>
        <p class="text-gray-600 mb-4">Simple tabbed content interface.</p>

        <x-preview>
            <div class="border-b border-gray-200">
                <div class="flex gap-8">
                    <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium">Tab 1</button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-600 hover:text-gray-900">Tab 2</button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-600 hover:text-gray-900">Tab 3</button>
                </div>
            </div>
            <div class="p-4">
                <p class="text-gray-700">Content for Tab 1</p>
            </div>
        </x-preview>

    </div>

    {{-- Tabs Variants --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tabs Variants</h3>
        <p class="text-gray-600 mb-4">Different tab styles.</p>

        <x-preview>
            <div>
                <p class="text-sm text-gray-600 mb-3">Underline Style:</p>
                <div class="border-b border-gray-200">
                    <div class="flex gap-8">
                        <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600">Active</button>
                        <button class="px-4 py-2 border-b-2 border-transparent text-gray-600">Inactive</button>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-3">Pill Style:</p>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-full">Active</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-900 rounded-full hover:bg-gray-300">Inactive</button>
                </div>
            </div>
        </x-preview>

    </div>

    {{-- Tabs with Icons --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tabs with Icons</h3>
        <p class="text-gray-600 mb-4">Tabs with icon indicators.</p>

        <x-preview>
            <div class="border-b border-gray-200">
                <div class="flex gap-8">
                    <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        Home
                    </button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-600 hover:text-gray-900 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                        </svg>
                        Analytics
                    </button>
                </div>
            </div>
        </x-preview>

    </div>

    {{-- Tabs Disabled --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tabs with Disabled State</h3>
        <p class="text-gray-600 mb-4">Tabs with disabled options.</p>

        <x-preview>
            <div class="border-b border-gray-200">
                <div class="flex gap-8">
                    <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium">Active</button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-600 hover:text-gray-900">Available</button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-400 cursor-not-allowed opacity-50">Disabled</button>
                </div>
            </div>
        </x-preview>

    </div>

    {{-- Tabs with Badge --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tabs with Badge</h3>
        <p class="text-gray-600 mb-4">Tabs with notification badges.</p>

        <x-preview>
            <div class="border-b border-gray-200">
                <div class="flex gap-8">
                    <button class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium flex items-center gap-2">
                        Messages
                        <span class="px-2 py-1 bg-red-600 text-white text-xs rounded-full">3</span>
                    </button>
                    <button class="px-4 py-2 border-b-2 border-transparent text-gray-600 hover:text-gray-900 flex items-center gap-2">
                        Notifications
                        <span class="px-2 py-1 bg-blue-600 text-white text-xs rounded-full">5</span>
                    </button>
                </div>
            </div>
        </x-preview>

    </div>
</div>

