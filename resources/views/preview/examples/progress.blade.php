{{-- Progress Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Progress</h3>
        <p class="text-gray-600 mb-4">Simple progress bar.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-progress value="65" />
        </div>

    </div>

    {{-- Progress Values --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Values</h3>
        <p class="text-gray-600 mb-4">Progress bars with different values.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <p class="text-sm text-gray-600 mb-2">25%</p>
                <x-progress value="25" />
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">50%</p>
                <x-progress value="50" />
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">75%</p>
                <x-progress value="75" />
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">100%</p>
                <x-progress value="100" />
            </div>
        </div>

    </div>

    {{-- Progress Colors --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Colors</h3>
        <p class="text-gray-600 mb-4">Progress bars in different colors.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-progress value="60" color="primary" />
            <x-progress value="60" color="success" />
            <x-progress value="60" color="warning" />
            <x-progress value="60" color="danger" />
            <x-progress value="60" color="info" />
        </div>

    </div>

    {{-- Progress Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress Sizes</h3>
        <p class="text-gray-600 mb-4">Progress bars in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <p class="text-sm text-gray-600 mb-2">Small</p>
                <x-progress value="50" size="sm" />
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Medium</p>
                <x-progress value="50" size="md" />
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-2">Large</p>
                <x-progress value="50" size="lg" />
            </div>
        </div>

    </div>

    {{-- Progress with Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress with Label</h3>
        <p class="text-gray-600 mb-4">Progress bar with percentage label.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-gray-600">Download Progress</p>
                    <p class="text-sm font-medium text-gray-900">45%</p>
                </div>
                <x-progress value="45" />
            </div>
            <div>
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm text-gray-600">Upload Progress</p>
                    <p class="text-sm font-medium text-gray-900">78%</p>
                </div>
                <x-progress value="78" color="success" />
            </div>
        </div>

    </div>

    {{-- Striped Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Striped Progress</h3>
        <p class="text-gray-600 mb-4">Progress bar with striped pattern.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-progress value="50" striped />
            <x-progress value="65" striped color="success" />
            <x-progress value="80" striped color="warning" />
        </div>

    </div>

    {{-- Animated Progress --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Animated Progress</h3>
        <p class="text-gray-600 mb-4">Progress bar with animation.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-progress value="50" striped animated />
            <x-progress value="65" striped animated color="success" />
            <x-progress value="80" striped animated color="warning" />
        </div>

    </div>

    {{-- Progress in Context --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Progress in Context</h3>
        <p class="text-gray-600 mb-4">Progress bars in typical usage scenarios.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
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
        </div>

    </div>
</div>

