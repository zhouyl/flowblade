# Card Components

Card component family for grouping and displaying related content in a contained format. The Card system provides a flexible way to organize content with support for headers, bodies, and footers.

## Overview

The Card component system consists of:
- **Card** - Main container component
- **CardHeader** - Header section for titles and metadata
- **CardBody** - Main content area
- **CardFooter** - Footer section for actions and additional information

Perfect for content containers, product cards, information panels, and dashboard widgets.

## Basic Usage

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Card Title</x-heading>
    </x-card-header>

    <x-card-body>
        <x-text>This is the card content.</x-text>
    </x-card-body>

    <x-card-footer>
        <x-button>Action</x-button>
    </x-card-footer>
</x-card>
```

## Card Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'elevated'` | Variant: `elevated`, `outline`, `filled`, `ghost` |

## CardHeader Props

CardHeader supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## CardBody Props

CardBody supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## CardFooter Props

CardFooter supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Variants

### Elevated (Default)

```blade
<x-card variant="elevated">
    <x-card-body>
        <x-text>Elevated card with shadow</x-text>
    </x-card-body>
</x-card>
```

### Outline

```blade
<x-card variant="outline">
    <x-card-body>
        <x-text>Card with border outline</x-text>
    </x-card-body>
</x-card>
```

### Filled

```blade
<x-card variant="filled">
    <x-card-body>
        <x-text>Card with filled background</x-text>
    </x-card-body>
</x-card>
```

### Ghost

```blade
<x-card variant="ghost">
    <x-card-body>
        <x-text>Card with minimal styling</x-text>
    </x-card-body>
</x-card>
```

## Sizes

```blade
<x-card size="xs">
    <x-card-body><x-text>Extra small</x-text></x-card-body>
</x-card>

<x-card size="sm">
    <x-card-body><x-text>Small</x-text></x-card-body>
</x-card>

<x-card size="md">
    <x-card-body><x-text>Medium (default)</x-text></x-card-body>
</x-card>

<x-card size="lg">
    <x-card-body><x-text>Large</x-text></x-card-body>
</x-card>

<x-card size="xl">
    <x-card-body><x-text>Extra large</x-text></x-card-body>
</x-card>
```

## CardHeader Examples

### With Title and Subtitle

```blade
<x-card>
    <x-card-header>
        <div>
            <x-heading size="lg">User Profile</x-heading>
            <x-text size="sm" color="gray">Manage your account settings</x-text>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Profile content here</x-text>
    </x-card-body>
</x-card>
```

### With Action Button

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Recent Activity</x-heading>
            <x-button variant="ghost" size="sm">View All</x-button>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Activity list here</x-text>
    </x-card-body>
</x-card>
```

### With Badge

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Status</x-heading>
            <x-badge color="success">Active</x-badge>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>Status information here</x-text>
    </x-card-body>
</x-card>
```

### With Custom Background

```blade
<x-card>
    <x-card-header bg="blue.50">
        <x-heading size="lg" color="blue.900">Featured</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-text>Featured content here</x-text>
    </x-card-body>
</x-card>
```

## CardBody Examples

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

## CardFooter Examples

### With Single Action Button

```blade
<x-card>
    <x-card-body>
        <x-text>Confirm this action?</x-text>
    </x-card-body>
    
    <x-card-footer>
        <x-button class="w-full">Confirm</x-button>
    </x-card-footer>
</x-card>
```

### With Multiple Action Buttons

```blade
<x-card>
    <x-card-body>
        <x-text>Save your changes?</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button variant="outline" class="flex-1">Cancel</x-button>
            <x-button class="flex-1">Save</x-button>
        </div>
    </x-card-footer>
</x-card>
```

### With Links

```blade
<x-card>
    <x-card-body>
        <x-text>Learn more about our services</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-4">
            <x-link href="/docs">Documentation</x-link>
            <x-link href="/support">Support</x-link>
            <x-link href="/contact">Contact Us</x-link>
        </div>
    </x-card-footer>
</x-card>
```

### With Custom Background

```blade
<x-card>
    <x-card-body>
        <x-text>Card content here</x-text>
    </x-card-body>
    
    <x-card-footer bg="gray.50">
        <x-button variant="outline" class="w-full">Learn More</x-button>
    </x-card-footer>
</x-card>
```

### With Text Information

```blade
<x-card>
    <x-card-body>
        <x-text>Product details</x-text>
    </x-card-body>
    
    <x-card-footer>
        <x-text size="sm" color="gray">Last updated: 2 hours ago</x-text>
    </x-card-footer>
</x-card>
```

## Accessibility

The Card component family:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- CardHeader should contain appropriate heading elements (h1-h6)
- Provides clear visual separation between sections
- Supports ARIA attributes for additional context
- Properly announces content to screen readers
- Maintains proper focus order for interactive elements

## Common Patterns

### Dashboard Widget

```blade
<x-card variant="outline">
    <x-card-header>
        <x-heading size="md">Sales Overview</x-heading>
    </x-card-header>
    
    <x-card-body>
        <!-- Chart or content here -->
    </x-card-body>
    
    <x-card-footer>
        <x-link href="/sales">View Details</x-link>
    </x-card-footer>
</x-card>
```

### Modal-like Card

```blade
<x-card variant="elevated" size="lg">
    <x-card-header>
        <x-heading size="lg">Confirm Action</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-text>Are you sure you want to proceed?</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button variant="outline" class="flex-1">Cancel</x-button>
            <x-button color="danger" class="flex-1">Confirm</x-button>
        </div>
    </x-card-footer>
</x-card>
```

### Minimal Card

```blade
<x-card variant="ghost">
    <x-card-body>
        <x-text>Simple content without visual styling</x-text>
    </x-card-body>
</x-card>
```

## Related Components

- [Box](box.md) - Basic layout container
- [Container](container.md) - Responsive container
- [Flex](flex.md) - Flexible layout
- [Grid](grid.md) - Grid layout
