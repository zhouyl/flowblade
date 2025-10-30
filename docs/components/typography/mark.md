# Mark

Mark component for marking or highlighting text. Uses semantic HTML `<mark>` element to represent marked or highlighted content.

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

## Accessibility

The Mark component:
- Uses semantic HTML `<mark>` element
- Properly conveys marked content to screen readers
- Maintains text hierarchy
- Works with all assistive technologies
- Provides visual distinction

