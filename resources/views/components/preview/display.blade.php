{{-- Preview Display Component

    Displays both a live demo and the code from a separate file.
    Uses Prism.js for syntax highlighting with copy code plugin.

    Variables:
    - $file: Path to the code file
    - $code: Formatted code content
--}}

@push('styles')
    {{-- Prism.js CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css">
    {{-- Prism.js Copy Code Plugin CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.css">
    <style>
        .prism-copy-wrapper {
            position: relative;
        }
        .prism-copy-wrapper pre {
            margin: 0;
        }
        .prism-copy-wrapper .copy-to-clipboard-button {
            position: absolute;
            top: 8px;
            right: 8px;
            padding: 6px 12px;
            font-size: 12px;
            font-weight: 500;
            color: #d1d5db;
            background-color: #374151;
            border: 1px solid #4b5563;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
            z-index: 10;
        }
        .prism-copy-wrapper .copy-to-clipboard-button:hover {
            background-color: #4b5563;
            border-color: #6b7280;
        }
        .prism-copy-wrapper .copy-to-clipboard-button.copied {
            background-color: #10b981;
            border-color: #059669;
            color: white;
        }
    </style>
@endpush

@push('scripts')
    {{-- Prism.js Core --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    {{-- Prism.js HTML Language Support --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup.min.js"></script>
    {{-- Prism.js Toolbar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/toolbar/prism-toolbar.min.js"></script>
    {{-- Prism.js Copy to Clipboard Plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
@endpush

<div class="space-y-4">
    {{-- Live Demo --}}
    <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200">
        @include($file)
    </div>

    {{-- Code Display with Prism.js --}}
    <div class="prism-copy-wrapper bg-gray-900 text-gray-100 rounded-lg overflow-x-auto font-mono text-sm">
        <pre class="language-html"><code>{!! $code !!}</code></pre>
    </div>
</div>

