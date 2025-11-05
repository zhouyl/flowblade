{{-- Textarea Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Textarea --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Textarea</h3>
        <p class="text-gray-600 mb-4">Simple textarea input for multi-line text.</p>

        <x-preview file="flowblade::preview.codes.textarea.basic-textarea" />

    </div>

    {{-- Textarea Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea Sizes</h3>
        <p class="text-gray-600 mb-4">Textareas in different sizes.</p>

        <x-preview file="flowblade::preview.codes.textarea.textarea-sizes" />

    </div>

    {{-- Textarea with Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Label</h3>
        <p class="text-gray-600 mb-4">Textarea with associated label.</p>

        <x-preview file="flowblade::preview.codes.textarea.textarea-with-label" />

    </div>

    {{-- Textarea States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea States</h3>
        <p class="text-gray-600 mb-4">Different textarea states.</p>

        <x-preview file="flowblade::preview.codes.textarea.textarea-states" />

    </div>

    {{-- Textarea with Character Count --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Character Count</h3>
        <p class="text-gray-600 mb-4">Textarea with character limit indicator.</p>

        <x-preview>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Bio (max 200 characters)</label>
                <x-textarea placeholder="Tell us about yourself..." rows="4" maxlength="200" />
                <p class="text-xs text-gray-500 mt-1">0 / 200 characters</p>
            </div>
        </x-preview>

    </div>

    {{-- Textarea with Validation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Validation</h3>
        <p class="text-gray-600 mb-4">Textarea with validation feedback.</p>

        <x-preview>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Valid Feedback</label>
                <x-textarea placeholder="Valid input" rows="3" class="border-green-500" />
                <p class="text-sm text-green-600 mt-1">✓ This looks good</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Invalid Feedback</label>
                <x-textarea placeholder="Invalid input" rows="3" class="border-red-500" />
                <p class="text-sm text-red-600 mt-1">✗ This field is required</p>
            </div>
        </x-preview>

    </div>

    {{-- Textarea in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea in Form</h3>
        <p class="text-gray-600 mb-4">Textarea within a form context.</p>

        <x-preview>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-2">Subject</label>
                    <x-input placeholder="Enter subject" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-2">Message</label>
                    <x-textarea placeholder="Enter your message..." rows="5" />
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </x-preview>

    </div>
</div>

