{{-- Preview Display Component

    Displays both a live demo and the code from a separate file.

    Variables:
    - $file: Path to the code file
    - $code: Formatted code content
--}}

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Highlight all code blocks
            document.querySelectorAll('pre code').forEach(block => {
                hljs.highlightElement(block);
            });
        });
    </script>
@endpush

<div class="space-y-4">
    {{-- Live Demo --}}
    <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200">
        @include($file)
    </div>

    {{-- Code Display with Copy Button --}}
    <div class="preview-code-wrapper">
        <div class="flex items-center justify-between bg-gray-800 rounded-t-lg">
            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wide">Code</span>
            <button
                type="button"
                class="copy-code-btn px-3 py-1 text-xs font-medium text-gray-300 bg-gray-700 hover:bg-gray-600 rounded transition-colors"
                data-code-target="preview-code-{{ uniqid() }}"
                onclick="copyCode(this)"
            >
                <span class="copy-text">Copy</span>
                <span class="copy-success hidden">Copied!</span>
            </button>
        </div>
        <div class="preview-code bg-gray-900 text-gray-100 p-4 rounded-b-lg overflow-x-auto" id="preview-code-{{ uniqid() }}">
            <pre class="font-mono text-sm m-0"><code class="language-html">{!! $code !!}</code></pre>
        </div>
    </div>
</div>

<script>
    function copyCode(button) {
        const targetId = button.getAttribute('data-code-target');
        const codeBlock = document.getElementById(targetId);
        const code = codeBlock.querySelector('code').textContent;

        navigator.clipboard.writeText(code).then(() => {
            const copyText = button.querySelector('.copy-text');
            const copySuccess = button.querySelector('.copy-success');

            copyText.classList.add('hidden');
            copySuccess.classList.remove('hidden');

            setTimeout(() => {
                copyText.classList.remove('hidden');
                copySuccess.classList.add('hidden');
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy code:', err);
        });
    }
</script>

