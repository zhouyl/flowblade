<div class="space-y-4">
    <div>
        <x-label for="valid">Valid Feedback</x-label>
        <x-textarea id="valid" placeholder="Valid input" rows="3" class="border-green-500" />
        <p class="text-sm text-green-600 mt-1">✓ This looks good</p>
    </div>
    <div>
        <x-label for="invalid">Invalid Feedback</x-label>
        <x-textarea id="invalid" placeholder="Invalid input" rows="3" class="border-red-500" />
        <p class="text-sm text-red-600 mt-1">✗ This field is required</p>
    </div>
</div>

