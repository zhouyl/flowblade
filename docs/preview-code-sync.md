# Preview Code Sync

## Overview

The Preview Code Sync feature automatically extracts HTML code from preview demo elements and displays formatted code in preview code blocks. This ensures that code examples are always in sync with the actual rendered components, eliminating the need for manual code maintenance.

## How It Works

1. **Automatic Detection**: The script scans all `.preview-section` elements on the page
2. **Code Extraction**: Extracts HTML from `.preview-demo` elements
3. **Code Formatting**: Formats the extracted HTML with proper indentation
4. **Code Display**: Updates `.preview-code` elements with the formatted code

## Usage

### In Preview Examples

Simply create a preview section with a `.preview-demo` element. The script will automatically generate the `.preview-code` element:

```blade
<div class="preview-section">
    <h3>Example Title</h3>
    <p>Example description</p>

    {{-- Demo: This is what users see --}}
    <div class="preview-demo p-6 bg-white rounded-lg border border-gray-200 mb-4">
        <label class="flex items-center gap-2">
            <x-checkbox />
            <x-text>Accept terms</x-text>
        </label>
    </div>

    {{-- Code block is automatically generated here --}}
</div>
```

The script will automatically:
- Detect all `.preview-demo` elements
- Generate `.preview-code` elements if they don't exist
- Extract the HTML from `.preview-demo`
- Format it with proper indentation
- Display it in the generated code block

## Benefits

1. **No Manual Maintenance**: Code examples are always in sync with demos
2. **Consistency**: All code examples follow the same formatting
3. **Accuracy**: Eliminates human error in code documentation
4. **Scalability**: Works with any number of preview sections

## Implementation Details

### File Location
- Script: `resources/views/preview/js/preview-code-sync.js`
- Published to: `public/vendor/flowblade/preview/js/preview-code-sync.js`

### Key Functions

#### `formatHtml(html)`
Formats raw HTML with proper indentation (4 spaces per level)

#### `escapeHtml(text)`
Escapes HTML special characters for safe display

## Publishing Assets

To publish the preview assets to your public directory:

```bash
php artisan vendor:publish --tag=flowblade-assets
```

## Browser Compatibility

Works in all modern browsers that support:
- ES6 JavaScript
- DOM API (querySelector, querySelectorAll)
- textContent property

