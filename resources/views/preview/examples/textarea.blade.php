{{-- Textarea Component Preview Examples --}}

<div class="space-y-8">
    {{-- Basic Textarea --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Basic Textarea</h3>
        <p class="text-gray-600 mb-4">Simple textarea input for multi-line text.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <x-textarea placeholder="Enter your message here..." />
        </div>

    </div>

    {{-- Textarea Sizes --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea Sizes</h3>
        <p class="text-gray-600 mb-4">Textareas in different sizes.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-textarea size="sm" placeholder="Small textarea" rows="2" />
            <x-textarea size="md" placeholder="Medium textarea" rows="4" />
            <x-textarea size="lg" placeholder="Large textarea" rows="6" />
        </div>

    </div>

    {{-- Textarea with Label --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Label</h3>
        <p class="text-gray-600 mb-4">Textarea with associated label.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <x-textarea placeholder="Type your message..." rows="4" />
            </div>
        </div>

    </div>

    {{-- Textarea States --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea States</h3>
        <p class="text-gray-600 mb-4">Different textarea states.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-3">
            <x-textarea placeholder="Normal textarea" rows="3" />
            <x-textarea placeholder="Disabled textarea" rows="3" :disabled="true" />
            <x-textarea placeholder="Read-only textarea" rows="3" readonly value="This is read-only content" />
        </div>

    </div>

    {{-- Textarea with Character Count --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Character Count</h3>
        <p class="text-gray-600 mb-4">Textarea with character limit indicator.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Bio (max 200 characters)</label>
                <x-textarea placeholder="Tell us about yourself..." rows="4" maxlength="200" />
                <p class="text-xs text-gray-500 mt-1">0 / 200 characters</p>
            </div>
        </div>

    </div>

    {{-- Textarea with Validation --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea with Validation</h3>
        <p class="text-gray-600 mb-4">Textarea with validation feedback.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4 space-y-4">
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
        </div>

    </div>

    {{-- Textarea in Form --}}
    <div class="preview-section">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Textarea in Form</h3>
        <p class="text-gray-600 mb-4">Textarea within a form context.</p>

        <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
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
        </div>

    </div>
</div>

