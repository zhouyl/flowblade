# Highlight

Highlight component for highlighting specific text within content. Useful for drawing attention to important words or phrases. Perfect for search results, tutorials, and documentation.

## Basic Usage

```blade
<x-text>
    This is <x-highlight>highlighted</x-highlight> text.
</x-text>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | `string` | `'yellow'` | Highlight color: `yellow`, `blue`, `green`, `red`, `purple`, `pink` |

Highlight also supports all common style props for flexible styling.

### Style Props

Highlight supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Different Colors

```blade
<x-text>
    <x-highlight color="yellow">Yellow highlight</x-highlight>
    <x-highlight color="blue">Blue highlight</x-highlight>
    <x-highlight color="green">Green highlight</x-highlight>
    <x-highlight color="red">Red highlight</x-highlight>
</x-text>
```

### In Search Results

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" class="mb-3">Search Results</x-heading>
        
        <x-text class="mb-4">
            The <x-highlight>Laravel</x-highlight> framework provides a robust foundation for building web applications. 
            <x-highlight>Laravel</x-highlight> includes features like routing, middleware, and more.
        </x-text>
    </x-card-body>
</x-card>
```

### In Documentation

```blade
<x-text>
    To install the package, run <x-highlight color="blue">npm install my-package</x-highlight> in your terminal.
</x-text>
```

### Multiple Highlights

```blade
<x-text>
    The <x-highlight color="yellow">quick</x-highlight> brown fox jumps over the <x-highlight color="blue">lazy</x-highlight> dog.
</x-text>
```

### With Custom Styling

```blade
<x-text>
    This is <x-highlight color="green" px="2" py="1" rounded="md">important</x-highlight> information.
</x-text>
```

## Common Patterns

### Tutorial Steps

```blade
<x-vstack spacing="4">
    <x-text>
        Step 1: Open the <x-highlight color="blue">Settings</x-highlight> page.
    </x-text>
    <x-text>
        Step 2: Navigate to <x-highlight color="blue">Account</x-highlight> section.
    </x-text>
    <x-text>
        Step 3: Click <x-highlight color="green">Save Changes</x-highlight> button.
    </x-text>
</x-vstack>
```

### Error Highlighting

```blade
<x-alert status="danger" variant="subtle">
    <x-text>
        The field <x-highlight color="red">email</x-highlight> is required and must be a valid email address.
    </x-text>
</x-alert>
```

### Feature Announcement

```blade
<x-card variant="outline" p="6">
    <x-heading size="lg" mb="3">New Features</x-heading>

    <x-text mb="4">
        We're excited to announce <x-highlight color="purple">real-time collaboration</x-highlight> and <x-highlight color="purple">advanced analytics</x-highlight> in this release.
    </x-text>
</x-card>
```

### Code Highlighting

```blade
<x-text>
    The <x-highlight color="blue">function</x-highlight> keyword is used to define functions in JavaScript.
</x-text>
```

### Comparison Table

```blade
<x-vstack spacing="2">
    <x-text>
        Plan A: <x-highlight color="yellow">$9/month</x-highlight> - Basic features
    </x-text>
    <x-text>
        Plan B: <x-highlight color="green">$29/month</x-highlight> - Advanced features
    </x-text>
    <x-text>
        Plan C: <x-highlight color="purple">$99/month</x-highlight> - Enterprise features
    </x-text>
</x-vstack>
```

## Accessibility

The Highlight component:
- Uses semantic HTML structure
- Maintains text hierarchy
- Works with screen readers
- Provides visual distinction
- Supports color contrast requirements
- Should not be the only way to convey information
- Announces highlighted content to screen readers
- Supports proper ARIA attributes for highlighted text

