# Clipboard

Copy to clipboard component with success feedback and tooltip support. Integrates with Flowbite's CopyClipboard JavaScript component. Perfect for copying code snippets, API keys, and other text content.

## Basic Usage

```blade
<div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
    <label for="npm-install" class="sr-only">Label</label>
    <input id="npm-install" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="npm install flowbite" disabled readonly>
    
    <x-clipboard target="npm-install" class="col-span-2" />
</div>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `target` | `string` | Required | Target element ID to copy from |
| `contentType` | `string` | `'input'` | Content type: `input`, `innerHTML`, `textContent` |
| `showIcon` | `bool` | `true` | Whether to show copy icon |
| `showTooltip` | `bool` | `true` | Whether to show tooltip |
| `buttonText` | `string` | `'Copy'` | Button text (if not using icon only) |
| `size` | `string` | `'md'` | Button size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'primary'` | Button variant: `primary`, `secondary`, `outline` |

## Variants

### Default Copy Button

```blade
<div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
    <label for="default-copy" class="sr-only">Label</label>
    <input id="default-copy" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="npm install flowblade" disabled readonly>
    
    <x-clipboard target="default-copy" class="col-span-2" />
</div>
```

### Input with Copy Icon

```blade
<div class="w-full max-w-[16rem]">
    <div class="relative">
        <label for="copy-input" class="sr-only">Label</label>
        <input id="copy-input" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="npm install flowblade" disabled readonly>
        
        <x-clipboard 
            target="copy-input" 
            :show-icon="true"
            :show-tooltip="true"
            button-text=""
            variant="secondary"
            class="absolute end-2 top-1/2 -translate-y-1/2 !p-2"
        />
    </div>
</div>
```

### Copy Code Block

```blade
<div class="relative">
    <pre id="code-block" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 dark:bg-gray-700 dark:border-gray-600 dark:text-white"><code>composer require mellivora/flowblade</code></pre>
    
    <x-clipboard 
        target="code-block" 
        content-type="textContent"
        variant="secondary"
        size="sm"
        class="absolute top-2 end-2"
    />
</div>
```

### Copy Contact Details

```blade
<div class="w-full max-w-md bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-sm rounded-lg p-5">
    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Contact details</h2>
    <address id="contact-details" class="relative bg-gray-50 dark:bg-gray-700 dark:border-gray-600 p-4 rounded-lg border border-gray-200 not-italic">
        <div class="space-y-2 text-gray-900 dark:text-white font-medium leading-loose">
            Bonnie Green <br />
            name@flowblade.com <br />
            + 12 345 67890
        </div>
        
        <x-clipboard 
            target="contact-details" 
            content-type="textContent"
            :show-icon="true"
            button-text=""
            variant="secondary"
            size="sm"
            class="absolute end-2 top-2 !p-2"
        />
    </address>
</div>
```

### Different Sizes

```blade
<!-- Extra Small -->
<x-clipboard target="copy-xs" size="xs" />

<!-- Small -->
<x-clipboard target="copy-sm" size="sm" />

<!-- Medium (Default) -->
<x-clipboard target="copy-md" size="md" />

<!-- Large -->
<x-clipboard target="copy-lg" size="lg" />

<!-- Extra Large -->
<x-clipboard target="copy-xl" size="xl" />
```

### Different Variants

```blade
<!-- Primary (Default) -->
<x-clipboard target="copy-primary" variant="primary" />

<!-- Secondary -->
<x-clipboard target="copy-secondary" variant="secondary" />

<!-- Outline -->
<x-clipboard target="copy-outline" variant="outline" />
```

### Icon Only

```blade
<x-clipboard 
    target="copy-icon-only" 
    :show-icon="true"
    button-text=""
    variant="secondary"
    size="sm"
/>
```

### Text Only

```blade
<x-clipboard 
    target="copy-text-only" 
    :show-icon="false"
    button-text="Copy to clipboard"
    variant="primary"
/>
```

### Without Tooltip

```blade
<x-clipboard 
    target="copy-no-tooltip" 
    :show-tooltip="false"
/>
```

## Content Types

### Copy from Input Field (Default)

```blade
<input id="input-field" type="text" value="Text to copy" />
<x-clipboard target="input-field" content-type="input" />
```

### Copy from Text Content

```blade
<div id="text-content">This is the text content to copy</div>
<x-clipboard target="text-content" content-type="textContent" />
```

### Copy from Inner HTML

```blade
<div id="html-content"><strong>Bold text</strong> and <em>italic text</em></div>
<x-clipboard target="html-content" content-type="innerHTML" />
```

## Laravel Integration

### Copy Dynamic Content

```blade
<div class="space-y-4">
    <input id="api-key" type="text" value="{{ $apiKey }}" readonly class="..." />
    <x-clipboard target="api-key" button-text="Copy API Key" />
</div>
```

### Copy URL

```blade
<div class="flex items-center gap-2">
    <input id="share-url" type="text" value="{{ route('posts.show', $post) }}" readonly class="..." />
    <x-clipboard target="share-url" button-text="Share" />
</div>
```

### Copy Code Snippet

```blade
<div class="relative">
    <pre id="code-snippet-{{ $snippet->id }}" class="..."><code>{{ $snippet->code }}</code></pre>
    <x-clipboard 
        target="code-snippet-{{ $snippet->id }}" 
        content-type="textContent"
        variant="secondary"
        size="sm"
        class="absolute top-2 end-2"
    />
</div>
```

### Copy with Modal

```blade
<button type="button" data-modal-target="share-modal" data-modal-toggle="share-modal" class="...">
    Share
</button>

<div id="share-modal" tabindex="-1" aria-hidden="true" class="hidden ...">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div class="flex items-center justify-between p-4 md:p-5">
                <h3 class="text-lg text-gray-500 dark:text-gray-400">Share course</h3>
                <button type="button" class="..." data-modal-toggle="share-modal">
                    <svg class="w-3 h-3" ...></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="px-4 pb-4 md:px-5 md:pb-5">
                <label for="course-url" class="...">Share the course link below:</label>
                <div class="relative mb-4">
                    <input id="course-url" type="text" value="{{ route('courses.show', $course) }}" readonly class="..." />
                    <x-clipboard 
                        target="course-url" 
                        :show-icon="true"
                        button-text=""
                        variant="secondary"
                        size="sm"
                        class="absolute end-2 top-1/2 -translate-y-1/2 !p-2"
                    />
                </div>
                <button type="button" data-modal-hide="share-modal" class="...">Close</button>
            </div>
        </div>
    </div>
</div>
```

## JavaScript Integration

The Clipboard component uses Flowbite's CopyClipboard plugin. Make sure you have Flowbite JS included in your project:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or if using npm:

```bash
npm install flowbite
```

```javascript
import 'flowbite';
```

## Accessibility

The Clipboard component:
- Uses semantic HTML button element
- Includes proper ARIA attributes
- Provides screen reader text for icons
- Supports keyboard navigation (Tab, Enter)
- Shows visual feedback on success
- Uses proper color contrast ratios
- Announces copy success to screen readers
- Supports proper ARIA attributes for button functionality

## Notes

- The `target` prop must match the ID of the element to copy from
- Use `contentType="input"` for input/textarea elements
- Use `contentType="textContent"` for text content
- Use `contentType="innerHTML"` for HTML content
- The component automatically shows success feedback for 2 seconds
- Tooltip is shown on hover and updated on copy
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported

## Browser Support

- All modern browsers
- Requires Clipboard API support
- Requires Flowbite JS for functionality
- Responsive design
- Dark mode support

