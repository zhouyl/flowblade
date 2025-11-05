{{-- Preview Error Component

    Displays an error message when preview fails.
    
    Variables:
    - $message: Error message
--}}

<div class="p-4 bg-red-50 border border-red-200 rounded-lg">
    <div class="flex items-start gap-3">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        </div>
        <div>
            <h3 class="text-sm font-medium text-red-800">Preview Error</h3>
            <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
        </div>
    </div>
</div>

