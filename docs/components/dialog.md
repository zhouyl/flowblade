# Dialog Component

Pre-styled dialog component with different types (info, warning, error, success, confirm). Built on top of Modal component with simplified API and consistent styling.

## Features

- **5 Dialog Types**: Info, Warning, Error, Success, Confirm
- **Pre-styled Icons**: Each type has a distinctive icon and color scheme
- **Customizable**: Title, message, and button text can be customized
- **Responsive**: Works on all screen sizes
- **Dark Mode Support**: Automatic dark mode styling
- **Closable**: Can be closed with ESC key or backdrop click
- **Flowbite Integration**: Uses Flowbite modal functionality

## Dialog Types

### Info Dialog

Used for informational messages.

```blade
<x-dialog 
    type="info"
    title="Information"
    message="This is an informational message."
/>
```

### Warning Dialog

Used for warning messages.

```blade
<x-dialog 
    type="warning"
    title="Warning"
    message="This action may have consequences."
/>
```

### Error Dialog

Used for error messages.

```blade
<x-dialog 
    type="error"
    title="Error"
    message="An error occurred while processing your request."
/>
```

### Success Dialog

Used for success messages.

```blade
<x-dialog 
    type="success"
    title="Success"
    message="Your action was completed successfully."
/>
```

### Confirm Dialog

Used for confirmation prompts with both confirm and cancel buttons.

```blade
<x-dialog 
    type="confirm"
    title="Confirm Action"
    message="Are you sure you want to proceed?"
/>
```

## Basic Usage

```blade
{{-- Simple info dialog --}}
<x-dialog 
    id="info-dialog"
    type="info"
    message="This is a simple info dialog."
/>

{{-- Trigger button --}}
<button data-modal-target="info-dialog" data-modal-toggle="info-dialog">
    Show Info
</button>
```

## With Title

```blade
<x-dialog 
    id="titled-dialog"
    type="warning"
    title="Warning Title"
    message="This is a warning message with a title."
/>
```

## Size Variants

```blade
{{-- Small --}}
<x-dialog size="sm" type="info" message="Small dialog" />

{{-- Medium (default) --}}
<x-dialog size="md" type="info" message="Medium dialog" />

{{-- Large --}}
<x-dialog size="lg" type="info" message="Large dialog" />

{{-- Extra Large --}}
<x-dialog size="xl" type="info" message="Extra large dialog" />
```

## Custom Button Text

```blade
{{-- Custom confirm button text --}}
<x-dialog 
    type="success"
    message="Operation completed!"
    confirm-text="Got it!"
/>

{{-- Custom confirm and cancel text (confirm type only) --}}
<x-dialog 
    type="confirm"
    message="Delete this item?"
    confirm-text="Yes, delete"
    cancel-text="No, keep it"
/>
```

## With Custom Content

```blade
<x-dialog 
    id="custom-dialog"
    type="info"
    title="Custom Content"
>
    <p class="text-gray-600 dark:text-gray-400">
        You can add any custom content here.
    </p>
    <ul class="list-disc list-inside mt-2 text-left">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>
</x-dialog>
```

## Non-closable Dialog

```blade
<x-dialog 
    type="warning"
    message="This dialog cannot be closed by clicking outside."
    :closable="false"
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | string | `'info'` | Dialog type: `'info'`, `'warning'`, `'error'`, `'success'`, `'confirm'` |
| `title` | string\|null | `null` | Dialog title (optional) |
| `message` | string\|null | `null` | Dialog message content |
| `size` | string | `'md'` | Dialog width: `'sm'`, `'md'`, `'lg'`, `'xl'` |
| `closable` | boolean | `true` | Whether dialog can be closed with ESC key or backdrop click |
| `confirmText` | string\|null | `'OK'` or `'Confirm'` | Text for confirm button |
| `cancelText` | string\|null | `'Cancel'` | Text for cancel button (only for confirm type) |

## Icon and Color Scheme

Each dialog type has a distinctive icon and color scheme:

- **Info**: Blue icon with information symbol
- **Warning**: Yellow icon with warning triangle
- **Error**: Red icon with X symbol
- **Success**: Green icon with checkmark
- **Confirm**: Gray icon with question mark

## JavaScript Integration

The component uses Flowbite's modal functionality. You need to include Flowbite JS:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
```

### Triggering Dialogs

Use Flowbite's data attributes to trigger dialogs:

```blade
{{-- Dialog --}}
<x-dialog 
    id="my-dialog"
    type="info"
    message="Hello World"
/>

{{-- Trigger button --}}
<button
    data-modal-target="my-dialog"
    data-modal-toggle="my-dialog"
    class="px-4 py-2 bg-blue-600 text-white rounded"
>
    Show Dialog
</button>
```

### Programmatic Control

You can also control dialogs programmatically using Flowbite's JavaScript API:

```javascript
// Get modal instance
const modal = FlowbiteInstances.getInstance('Modal', 'my-dialog');

// Show dialog
modal.show();

// Hide dialog
modal.hide();

// Toggle dialog
modal.toggle();
```

## Examples

### Delete Confirmation

```blade
<x-dialog
    id="delete-confirm"
    type="confirm"
    title="Delete Item"
    message="Are you sure you want to delete this item? This action cannot be undone."
    confirm-text="Yes, delete it"
    cancel-text="Cancel"
/>

<button
    data-modal-target="delete-confirm"
    data-modal-toggle="delete-confirm"
    class="px-4 py-2 bg-red-600 text-white rounded"
>
    Delete
</button>
```

### Success Notification

```blade
<x-dialog
    id="success-notification"
    type="success"
    title="Success!"
    message="Your changes have been saved successfully."
    confirm-text="Great!"
/>
```

### Error Alert

```blade
<x-dialog
    id="error-alert"
    type="error"
    title="Error"
    message="Failed to process your request. Please try again later."
    confirm-text="OK"
/>
```

### Information Message

```blade
<x-dialog
    id="info-message"
    type="info"
    title="Did you know?"
>
    <p class="text-gray-600 dark:text-gray-400">
        You can customize the dialog content by using the default slot.
    </p>
    <p class="text-gray-600 dark:text-gray-400 mt-2">
        This allows you to add any HTML content you need.
    </p>
</x-dialog>
```

## Styling

The component uses Flowbite styling and supports:
- Light and dark modes
- Responsive design
- Focus states
- Hover states
- Smooth transitions

## Accessibility

- Proper ARIA labels
- Keyboard navigation support (ESC to close)
- Focus management
- Screen reader friendly

## Best Practices

1. **Use appropriate types**: Choose the dialog type that matches your message intent
2. **Keep messages concise**: Dialog messages should be brief and clear
3. **Provide clear actions**: Button text should clearly indicate what will happen
4. **Use confirm dialogs for destructive actions**: Always confirm before deleting or making irreversible changes
5. **Don't overuse dialogs**: Too many dialogs can be annoying to users

## Related Components

- [Modal](modal.md) - Full-featured modal component
- [Alert](../feedback/alert.md) - Inline alert messages
- [Toast](../feedback/toast.md) - Toast notifications


