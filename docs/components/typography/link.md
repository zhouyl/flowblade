# Link

Link component for creating hyperlinks. Provides semantic HTML with styling for various link states and styles. Perfect for navigation, documentation, and inline links.

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

### Style Props

Link supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Breadcrumb Navigation

```blade
<x-flex gap="2" align="center">
    <x-link href="/">Home</x-link>
    <x-text>/</x-text>
    <x-link href="/products">Products</x-link>
    <x-text>/</x-text>
    <x-text>Details</x-text>
</x-flex>
```

### Call to Action

```blade
<x-link
    href="/get-started"
    color="primary"
    weight="semibold"
    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
>
    Get Started
    <x-icon name="heroicons:arrow-right" class="w-4 h-4" />
</x-link>
```

### Footer Links

```blade
<x-vstack spacing="2" color="gray">
    <x-link href="/privacy" color="gray">Privacy Policy</x-link>
    <x-link href="/terms" color="gray">Terms of Service</x-link>
    <x-link href="/contact" color="gray">Contact Us</x-link>
</x-vstack>
```

### Related Links

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" mb="3">Related Articles</x-heading>
        <x-vstack spacing="2">
            <x-link href="/article-1">Understanding React Hooks</x-link>
            <x-link href="/article-2">Vue.js Best Practices</x-link>
            <x-link href="/article-3">Angular Performance Tips</x-link>
        </x-vstack>
    </x-card-body>
</x-card>
```

## Accessibility

The Link component:
- Uses semantic HTML `<a>` element
- Supports keyboard navigation
- Works with screen readers
- Provides clear focus states
- Should have descriptive link text
- Provides clear link text
- Supports external link indicators

