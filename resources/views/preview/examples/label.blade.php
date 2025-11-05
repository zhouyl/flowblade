{{-- Label Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Label</h3>
        <p class="text-gray-600 mb-4">Simple label for form inputs.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-label for="email">Email Address</x-label>
        </div>

    </div>

    {{-- Label with Input --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Label with Input</h3>
        <p class="text-gray-600 mb-4">Label associated with an input field.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-2">
                <x-label for="username">Username</x-label>
                <x-input id="username" placeholder="Enter your username" />
            </div>
        </div>

    </div>

    {{-- Label Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Label Sizes</h3>
        <p class="text-gray-600 mb-4">Labels in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
            <div>
                <x-label size="sm">Small Label</x-label>
            </div>
            <div>
                <x-label size="md">Medium Label</x-label>
            </div>
            <div>
                <x-label size="lg">Large Label</x-label>
            </div>
        </div>

    </div>

    {{-- Required Indicator --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Required Indicator</h3>
        <p class="text-gray-600 mb-4">Label with required field indicator.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div class="space-y-2">
                <x-label for="name" required>Full Name</x-label>
                <x-input id="name" placeholder="Enter your full name" />
            </div>
        </div>

    </div>

    {{-- Label with Checkbox --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Label with Checkbox</h3>
        <p class="text-gray-600 mb-4">Label associated with checkbox input.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <label class="flex items-center gap-2">
                <x-checkbox name="agree" />
                <x-label>I agree to the terms of service</x-label>
            </label>
        </div>

    </div>

    {{-- Label with Radio --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Label with Radio</h3>
        <p class="text-gray-600 mb-4">Label associated with radio input.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-2">
            <label class="flex items-center gap-2">
                <x-radio name="option" value="1" />
                <x-label>Option 1</x-label>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="option" value="2" />
                <x-label>Option 2</x-label>
            </label>
            <label class="flex items-center gap-2">
                <x-radio name="option" value="3" />
                <x-label>Option 3</x-label>
            </label>
        </div>

    </div>

    {{-- Form Example --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Form Example</h3>
        <p class="text-gray-600 mb-4">Complete form with labels.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <form class="space-y-4">
                <div>
                    <x-label for="email" required>Email Address</x-label>
                    <x-input id="email" type="email" placeholder="you@example.com" />
                </div>
                <div>
                    <x-label for="password" required>Password</x-label>
                    <x-input id="password" type="password" placeholder="••••••••" />
                </div>
                <label class="flex items-center gap-2">
                    <x-checkbox name="remember" />
                    <x-label>Remember me</x-label>
                </label>
                <x-button type="submit">Sign In</x-button>
            </form>
        </div>

    </div>
</div>

