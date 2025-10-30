# CardBody

CardBody component for displaying the main content area within a Card. Provides consistent padding and spacing for card content.

## Basic Usage

```blade
<x-card>
    <x-card-body>
        <x-text>This is the card body content.</x-text>
    </x-card-body>
</x-card>
```

## Props

CardBody supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### With Custom Padding

```blade
<x-card>
    <x-card-body p="8">
        <x-text>Card body with custom padding</x-text>
    </x-card-body>
</x-card>
```

### With Background Color

```blade
<x-card>
    <x-card-body bg="gray.50">
        <x-text>Card body with background color</x-text>
    </x-card-body>
</x-card>
```

### With Multiple Content Sections

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" class="mb-4">Section 1</x-heading>
        <x-text class="mb-6">First section content</x-text>
        
        <x-separator class="my-4" />
        
        <x-heading size="lg" class="mb-4">Section 2</x-heading>
        <x-text>Second section content</x-text>
    </x-card-body>
</x-card>
```

### With No Padding

```blade
<x-card>
    <x-card-body p="0">
        <img src="/image.jpg" class="w-full" />
    </x-card-body>
</x-card>
```

## Accessibility

The CardBody component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation

