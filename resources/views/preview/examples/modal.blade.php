{{-- Modal Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Modal --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Modal</h3>
        <p class="text-gray-600 mb-4">Simple modal dialog for user interaction.</p>

        <x-preview file="flowblade::preview.codes.modal.basic-modal" />

        <x-modal id="basic-modal">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Modal Title</h3>
                <p class="text-gray-600 mb-6">This is a basic modal dialog. You can add any content here.</p>
                <div class="flex gap-3">
                    <x-button data-modal-hide="basic-modal">Close</x-button>
                </div>
            </div>
        </x-modal>

    </div>

    {{-- Modal with Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Modal with Form</h3>
        <p class="text-gray-600 mb-4">Modal containing a form for user input.</p>

        <x-preview file="flowblade::preview.codes.modal.modal-with-form" />

        <x-modal id="form-modal">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">User Information</h3>
                <form class="space-y-4">
                    <div>
                        <x-label for="name">Name</x-label>
                        <x-input id="name" type="text" placeholder="Enter your name" />
                    </div>
                    <div>
                        <x-label for="email">Email</x-label>
                        <x-input id="email" type="email" placeholder="Enter your email" />
                    </div>
                    <div class="flex gap-3 pt-4">
                        <x-button type="submit">Submit</x-button>
                        <x-button type="button" variant="outline" data-modal-hide="form-modal">Cancel</x-button>
                    </div>
                </form>
            </div>
        </x-modal>

    </div>

    {{-- Modal Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Modal Sizes</h3>
        <p class="text-gray-600 mb-4">Modals with different sizes.</p>

        <x-preview file="flowblade::preview.codes.modal.modal-sizes" />

        <x-modal id="small-modal" size="sm">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Small Modal</h3>
                <p class="text-gray-600">This is a small modal dialog.</p>
            </div>
        </x-modal>

        <x-modal id="medium-modal" size="md">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Medium Modal</h3>
                <p class="text-gray-600">This is a medium modal dialog.</p>
            </div>
        </x-modal>

        <x-modal id="large-modal" size="lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Large Modal</h3>
                <p class="text-gray-600">This is a large modal dialog with more space for content.</p>
            </div>
        </x-modal>

    </div>

    {{-- Confirmation Modal --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Confirmation Modal</h3>
        <p class="text-gray-600 mb-4">Modal for confirming user actions.</p>

        <x-preview>
            <button
                data-modal-target="confirm-modal"
                data-modal-toggle="confirm-modal"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
            >
                Delete Item
            </button>
        </x-preview>

        <x-modal id="confirm-modal">
            <div class="p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4v2m0 4v2M6.343 3.665c.886-.887 2.318-.887 3.203 0l9.759 9.759c.886.886.886 2.318 0 3.203l-9.759 9.759c-.886.886-2.317.886-3.203 0L3.14 16.168c-.886-.886-.886-2.317 0-3.203L6.343 3.665z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Delete Item?</h3>
                <p class="text-gray-600 mb-6">Are you sure you want to delete this item? This action cannot be undone.</p>
                <div class="flex gap-3 justify-center">
                    <button class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                        Delete
                    </button>
                    <button
                        data-modal-hide="confirm-modal"
                        class="px-4 py-2 bg-gray-300 text-gray-900 rounded hover:bg-gray-400"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </x-modal>

    </div>
</div>

