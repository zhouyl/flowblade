# CardBody

CardBody component for displaying the main content area within a Card. Provides consistent padding and spacing for card content. Perfect for organizing card content with proper spacing and layout.

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

### Style Props

CardBody supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Product Card

```blade
<x-card>
    <x-card-body>
        <x-heading size="lg" mb="2">Product Name</x-heading>
        <x-text color="gray" mb="4">Product description goes here</x-text>
        <x-text weight="bold" mb="4">$99.99</x-text>
        <x-button w="full">Add to Cart</x-button>
    </x-card-body>
</x-card>
```

### User Profile Card

```blade
<x-card>
    <x-card-body>
        <x-flex align="center" gap="4" mb="4">
            <x-avatar name="John Doe" />
            <x-vstack>
                <x-heading size="md">John Doe</x-heading>
                <x-text color="gray" size="sm">john@example.com</x-text>
            </x-vstack>
        </x-flex>
        <x-text mb="4">Software developer with 5 years of experience</x-text>
        <x-button variant="outline" w="full">View Profile</x-button>
    </x-card-body>
</x-card>
```

### Statistics Card

```blade
<x-card>
    <x-card-body>
        <x-text color="gray" size="sm" mb="2">Total Revenue</x-text>
        <x-heading size="2xl" mb="4">$45,231.89</x-heading>
        <x-text color="success" size="sm">+20.1% from last month</x-text>
    </x-card-body>
</x-card>
```

## Accessibility

The CardBody component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation
- Should be used within a Card component

