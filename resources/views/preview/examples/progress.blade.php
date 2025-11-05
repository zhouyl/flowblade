{{-- Progress Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Progress</h3>
        <p class="text-gray-600 mb-4">Simple progress bar.</p>

        <x-preview file="flowblade::preview.codes.progress.basic-progress" />

    </div>

    {{-- Progress Values --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Values</h3>
        <p class="text-gray-600 mb-4">Progress bars with different values.</p>

        <x-preview file="flowblade::preview.codes.progress.progress-values" />

    </div>

    {{-- Progress Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Colors</h3>
        <p class="text-gray-600 mb-4">Progress bars in different colors.</p>

        <x-preview file="flowblade::preview.codes.progress.progress-colors" />

    </div>

    {{-- Progress Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Sizes</h3>
        <p class="text-gray-600 mb-4">Progress bars in different sizes.</p>

        <x-preview file="flowblade::preview.codes.progress.progress-sizes" />

    </div>

    {{-- Progress with Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress with Label</h3>
        <p class="text-gray-600 mb-4">Progress bar with percentage label.</p>

        <x-preview file="flowblade::preview.codes.progress.progress-with-label" />

    </div>

    {{-- Striped Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Striped Progress</h3>
        <p class="text-gray-600 mb-4">Progress bar with striped pattern.</p>

        <x-preview>
            <x-progress value="50" striped />
            <x-progress value="65" striped color="success" />
            <x-progress value="80" striped color="warning" />
        </x-preview>

    </div>

    {{-- Animated Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Animated Progress</h3>
        <p class="text-gray-600 mb-4">Progress bar with animation.</p>

        <x-preview>
            <x-progress value="50" striped animated />
            <x-progress value="65" striped animated color="success" />
            <x-progress value="80" striped animated color="warning" />
        </x-preview>

    </div>

    {{-- Progress in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress in Context</h3>
        <p class="text-gray-600 mb-4">Progress bars in typical usage scenarios.</p>

        <x-preview>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Installation</p>
                        <p class="text-sm text-gray-600">100%</p>
                    </div>
                    <x-progress value="100" color="success" />
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Processing</p>
                        <p class="text-sm text-gray-600">65%</p>
                    </div>
                    <x-progress value="65" striped animated />
                </div>
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-sm font-medium text-gray-900">Pending</p>
                        <p class="text-sm text-gray-600">0%</p>
                    </div>
                    <x-progress value="0" />
                </div>
            </div>
        </x-preview>

    </div>
</div>

