# FloatingTextarea

FloatingTextarea component for creating a textarea with a floating label. The label floats above the textarea when focused or when it has content. Perfect for comments, messages, and multi-line text input.

## Basic Usage

```blade
<x-floating-textarea label="Enter your message"></x-floating-textarea>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Floating label text |
| `rows` | `integer` | `4` | Number of visible rows |
| `disabled` | `boolean` | `false` | Disabled state |
| `required` | `boolean` | `false` | Required field |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | Placeholder text |

FloatingTextarea also supports all common style props for flexible styling.

## Examples

### With Placeholder

```blade
<x-floating-textarea 
    label="Comments"
    placeholder="Share your thoughts..."
></x-floating-textarea>
```

### With Custom Rows

```blade
<x-floating-textarea 
    label="Description"
    rows="6"
></x-floating-textarea>
```

### Disabled State

```blade
<x-floating-textarea 
    label="Read-only content"
    disabled
    value="This textarea is disabled"
></x-floating-textarea>
```

### Required Field

```blade
<x-floating-textarea 
    label="Required message"
    required
    placeholder="This field is required"
></x-floating-textarea>
```

### Invalid State

```blade
<x-floating-textarea 
    label="Invalid input"
    invalid
    value="This input has an error"
></x-floating-textarea>
```

### In a Form

```blade
<x-form action="/submit" method="POST">
    <x-floating-textarea 
        label="Your Message"
        name="message"
        rows="5"
        required
        placeholder="Type your message here..."
    ></x-floating-textarea>
    
    <x-button type="submit" class="mt-4">Send</x-button>
</x-form>
```

### With Character Limit

```blade
<div>
    <x-floating-textarea 
        label="Bio"
        rows="4"
        maxlength="500"
        placeholder="Tell us about yourself (max 500 characters)"
    ></x-floating-textarea>
    <x-text size="sm" color="gray" class="mt-2">
        <span id="charCount">0</span>/500 characters
    </x-text>
</div>
```

## Accessibility

The FloatingTextarea component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear floating labels
- Supports required field validation
- Announces textarea content to screen readers
- Supports proper ARIA attributes for textarea validation

