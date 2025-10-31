# Mark

Mark component for marking or highlighting text. Uses semantic HTML `<mark>` element to represent marked or highlighted content. Perfect for search results, tutorials, and important passages.

## Basic Usage

```blade
<x-text>
    This is <x-mark>marked</x-mark> text.
</x-text>
```

## Props

Mark supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### Style Props

Mark supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Mark

```blade
<x-text>
    This is <x-mark>important</x-mark> information.
</x-text>
```

### In Search Results

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" class="mb-3">Search Results</x-heading>
        
        <x-text class="mb-4">
            The <x-mark>Laravel</x-mark> framework provides a robust foundation for building web applications. 
            <x-mark>Laravel</x-mark> includes features like routing, middleware, and more.
        </x-text>
    </x-card-body>
</x-card>
```

### Multiple Marks

```blade
<x-text>
    The <x-mark>quick</x-mark> brown fox jumps over the <x-mark>lazy</x-mark> dog.
</x-text>
```

### With Custom Styling

```blade
<x-text>
    This is <x-mark bg="yellow.200" px="1" rounded="sm">highlighted</x-mark> text.
</x-text>
```

### In Documentation

```blade
<x-text>
    The <x-mark>important</x-mark> part of this sentence should be noted.
</x-text>
```

## Common Patterns

### Exam Study Guide

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" mb="3">Key Concepts</x-heading>

        <x-text mb="4">
            The <x-mark>mitochondria</x-mark> is the powerhouse of the cell, responsible for producing energy through <x-mark>ATP synthesis</x-mark>.
        </x-text>
    </x-card-body>
</x-card>
```

### Document Review

```blade
<x-text>
    The contract states that <x-mark>payment is due within 30 days</x-mark> of invoice date. Additionally, <x-mark>late fees of 1.5% per month</x-mark> will be applied to overdue amounts.
</x-text>
```

### Tutorial Highlights

```blade
<x-vstack spacing="3">
    <x-text>
        Step 1: Click the <x-mark>Settings</x-mark> button in the top right corner.
    </x-text>
    <x-text>
        Step 2: Navigate to <x-mark>Account Settings</x-mark> section.
    </x-text>
    <x-text>
        Step 3: Click <x-mark>Save Changes</x-mark> to apply your settings.
    </x-text>
</x-vstack>
```

### Comparison Table

```blade
<x-text>
    Plan A includes <x-mark>basic features</x-mark>, while Plan B includes <x-mark>advanced features</x-mark> and <x-mark>priority support</x-mark>.
</x-text>
```

## Accessibility

The Mark component:
- Uses semantic HTML `<mark>` element
- Properly conveys marked content to screen readers
- Maintains text hierarchy
- Works with all assistive technologies
- Provides visual distinction
- Should not be the only way to convey information
- Announces marked content to screen readers
- Supports proper ARIA attributes for marked text

