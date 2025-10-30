# Highlight

Highlight component for highlighting specific text within content. Useful for drawing attention to important words or phrases.

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

## Accessibility

The Highlight component:
- Uses semantic HTML structure
- Maintains text hierarchy
- Works with screen readers
- Provides visual distinction
- Supports color contrast requirements

