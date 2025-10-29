# ListItem Component

## Overview

The ListItem component is a flexible list item wrapper for displaying content in lists. It supports icons, badges, and custom content with consistent styling and interactive states.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `icon` | string\|null | null | Icon name (Iconify format) |
| `badge` | string\|null | null | Badge text or component |
| `badgeColor` | string | 'primary' | Badge color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info' |
| `active` | boolean | false | Whether the item is active |
| `disabled` | boolean | false | Whether the item is disabled |
| `href` | string\|null | null | Link URL (renders as anchor tag) |
| `divider` | boolean | true | Show divider below the item |
| `size` | string | 'md' | Item size: 'sm', 'md', 'lg' |

## Style Props

The ListItem component supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See `HasStyleProps` trait documentation

## Basic Usage

```blade
<x-list-item>
    Item content
</x-list-item>
```

## With Icon

```blade
<x-list-item icon="mdi:home">
    Home
</x-list-item>
```

## With Badge

```blade
<x-list-item badge="New" badgeColor="success">
    New Feature
</x-list-item>
```

## As Link

```blade
<x-list-item href="/dashboard" icon="mdi:dashboard">
    Dashboard
</x-list-item>
```

## Active State

```blade
<x-list-item href="/dashboard" :active="true" icon="mdi:dashboard">
    Dashboard
</x-list-item>
```

## Disabled State

```blade
<x-list-item :disabled="true" icon="mdi:lock">
    Locked Item
</x-list-item>
```

## Different Sizes

```blade
<x-list-item size="sm">Small item</x-list-item>
<x-list-item size="md">Medium item</x-list-item>
<x-list-item size="lg">Large item</x-list-item>
```

## Without Divider

```blade
<x-list-item :divider="false">
    Item without divider
</x-list-item>
```

## With Style Props

```blade
<x-list-item
    icon="mdi:star"
    badge="Featured"
    p="6"
    bg="blue.50"
    rounded="lg"
>
    Featured Item
</x-list-item>
```

## In a List

```blade
<x-vstack gap="0">
    <x-list-item href="/home" icon="mdi:home">Home</x-list-item>
    <x-list-item href="/about" icon="mdi:information">About</x-list-item>
    <x-list-item href="/contact" icon="mdi:email">Contact</x-list-item>
</x-x-vstack>
```

## Accessibility

- Use semantic HTML with proper link elements when `href` is provided
- Icons are decorative and don't require alt text
- Disabled items have reduced opacity and cursor changes
- Active items have visual indication through background color

## Notes

- Divider is shown by default between items
- Active state provides visual feedback with blue background
- Disabled items are not interactive
- Icons use Iconify format for flexibility
- Badges can be strings or custom components

