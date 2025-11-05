{{-- Accordion Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Accordion --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Accordion</h3>
        <p class="text-gray-600 mb-4">Simple accordion for collapsible content.</p>

        <x-preview file="flowblade::preview.codes.accordion.basic-accordion" />

    </div>

    {{-- Accordion Flush --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion Flush</h3>
        <p class="text-gray-600 mb-4">Accordion without borders.</p>

        <x-preview file="flowblade::preview.codes.accordion.accordion-flush" />

    </div>

    {{-- Accordion Always Open --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion Always Open</h3>
        <p class="text-gray-600 mb-4">Multiple accordion items can be open simultaneously.</p>

        <x-preview file="flowblade::preview.codes.accordion.accordion-always-open" />

    </div>

    {{-- Accordion Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Accordion Colors</h3>
        <p class="text-gray-600 mb-4">Accordion with different color schemes.</p>

        <x-preview>
            <div class="border border-blue-200 rounded">
                <button class="w-full px-4 py-3 text-left font-medium text-blue-900 bg-blue-50 hover:bg-blue-100 flex items-center justify-between">
                    <span>Blue Accordion</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </button>
            </div>
            <div class="border border-green-200 rounded">
                <button class="w-full px-4 py-3 text-left font-medium text-green-900 bg-green-50 hover:bg-green-100 flex items-center justify-between">
                    <span>Green Accordion</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </button>
            </div>
        </x-preview>

    </div>
</div>

