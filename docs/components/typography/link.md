# Link

Link component for creating hyperlinks. Provides semantic HTML with styling for various link states and styles.

## Basic Usage

```blade
<x-link href="/about">About Us</x-link>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'#'` | Link URL |
| `target` | `string` | `null` | Target attribute: `_blank`, `_self`, `_parent`, `_top` |
| `rel` | `string` | `null` | Relationship attribute |
| `underline` | `boolean` | `true` | Show underline |
| `color` | `string` | `'primary'` | Link color |

Link also supports all common style props for flexible styling.

## Examples

### Basic Link

```blade
<x-link href="/about">About Us</x-link>
```

### External Link

```blade
<x-link href="https://example.com" target="_blank">
    Visit Example
</x-link>
```

### Without Underline

```blade
<x-link href="/contact" underline="false">
    Contact Us
</x-link>
```

### Different Colors

```blade
<x-link href="/docs" color="primary">Primary Link</x-link>
<x-link href="/docs" color="success">Success Link</x-link>
<x-link href="/docs" color="danger">Danger Link</x-link>
```

### In Navigation

```blade
<nav class="flex gap-4">
    <x-link href="/">Home</x-link>
    <x-link href="/about">About</x-link>
    <x-link href="/services">Services</x-link>
    <x-link href="/contact">Contact</x-link>
</nav>
```

### With Icon

```blade
<x-link href="/docs" class="flex items-center gap-2">
    <x-icon name="heroicons:book-open" class="w-4 h-4" />
    Documentation
</x-link>
```

### In Text

```blade
<x-text>
    Learn more about our <x-link href="/features">features</x-link> and 
    <x-link href="/pricing">pricing</x-link> options.
</x-text>
```

### With Custom Styling

```blade
<x-link 
    href="/blog"
    color="blue"
    weight="medium"
    class="hover:text-blue-700"
>
    Read Our Blog
</x-link>
```

## Accessibility

The Link component:
- Uses semantic HTML `<a>` element
- Supports keyboard navigation
- Works with screen readers
- Provides clear link text
- Supports external link indicators

