# Icon

Iconify icon component with access to 100,000+ icons. Icon provides a flexible way to display icons from various icon collections.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | required | Icon name in format `collection:icon-name` |
| `size` | string | `'1.2em'` | Icon size (any CSS size value) |
| `color` | string | `null` | Icon color (primary, secondary, success, warning, danger, info, gray) |

### Style Props

Icon supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-icon name="heroicons:home" />
```

## Icon Collections

Flowblade uses Iconify, giving you access to 100,000+ icons from various collections:

- **Heroicons**: `heroicons:*`
- **Material Design Icons**: `mdi:*`
- **Font Awesome**: `fa:*`, `fa-solid:*`, `fa-brands:*`
- **Bootstrap Icons**: `bi:*`
- **Feather Icons**: `feather:*`
- **Lucide**: `lucide:*`
- **Tabler Icons**: `tabler:*`
- **And many more...**

Browse all icons at: https://icon-sets.iconify.design/

## Examples

### Basic Icons

```blade
<x-icon name="heroicons:home" />
<x-icon name="heroicons:user" />
<x-icon name="heroicons:heart" />
<x-icon name="heroicons:star" />
<x-icon name="heroicons:bell" />
```

### Different Collections

```blade
<x-icon name="heroicons:check" />
<x-icon name="mdi:account" />
<x-icon name="fa:github" />
<x-icon name="bi:house" />
<x-icon name="feather:home" />
```

### Colored Icons

```blade
<x-icon name="heroicons:heart" color="danger" size="24px" />
<x-icon name="heroicons:check-circle" color="success" size="24px" />
<x-icon name="heroicons:information-circle" color="info" size="24px" />
<x-icon name="heroicons:exclamation-triangle" color="warning" size="24px" />
```

### Different Sizes

```blade
<x-icon name="heroicons:star" size="16px" />
<x-icon name="heroicons:star" size="24px" />
<x-icon name="heroicons:star" size="32px" />
<x-icon name="heroicons:star" size="48px" />
<x-icon name="heroicons:star" size="64px" />
```

### With Custom Classes

```blade
<x-icon name="heroicons:heart" class="text-red-500" size="24px" />
<x-icon name="heroicons:star" class="text-yellow-400" size="32px" />
<x-icon name="heroicons:check" class="text-green-600" size="20px" />
```

## Common Patterns

### In Buttons

```blade
<x-button left-icon="heroicons:home">Home</x-button>
<x-button right-icon="heroicons:arrow-right">Next</x-button>
<x-button left-icon="heroicons:trash" color="danger">Delete</x-button>
```

### Status Icons

```blade
<x-hstack spacing="sm" align="center">
    <x-icon name="heroicons:check-circle" color="success" />
    <span>Completed</span>
</x-hstack>

<x-hstack spacing="sm" align="center">
    <x-icon name="heroicons:x-circle" color="danger" />
    <span>Failed</span>
</x-hstack>

<x-hstack spacing="sm" align="center">
    <x-icon name="heroicons:clock" color="warning" />
    <span>Pending</span>
</x-hstack>
```

### Navigation Icons

```blade
<nav>
    <a href="#" class="flex items-center gap-2">
        <x-icon name="heroicons:home" />
        <span>Home</span>
    </a>
    
    <a href="#" class="flex items-center gap-2">
        <x-icon name="heroicons:user" />
        <span>Profile</span>
    </a>
    
    <a href="#" class="flex items-center gap-2">
        <x-icon name="heroicons:cog" />
        <span>Settings</span>
    </a>
</nav>
```

### List Items

```blade
<ul class="space-y-2">
    <li class="flex items-center gap-2">
        <x-icon name="heroicons:check" color="success" />
        <span>Feature 1</span>
    </li>
    <li class="flex items-center gap-2">
        <x-icon name="heroicons:check" color="success" />
        <span>Feature 2</span>
    </li>
    <li class="flex items-center gap-2">
        <x-icon name="heroicons:check" color="success" />
        <span>Feature 3</span>
    </li>
</ul>
```

### Alert Icons

```blade
<x-box p="4" bg="success" rounded="md" class="text-white">
    <x-hstack spacing="sm" align="center">
        <x-icon name="heroicons:check-circle" size="20px" />
        <span>Success message</span>
    </x-hstack>
</x-box>

<x-box p="4" bg="danger" rounded="md" class="text-white">
    <x-hstack spacing="sm" align="center">
        <x-icon name="heroicons:x-circle" size="20px" />
        <span>Error message</span>
    </x-hstack>
</x-box>
```

### Social Icons

```blade
<x-hstack spacing="md">
    <a href="#" class="text-gray-600 hover:text-gray-900">
        <x-icon name="fa-brands:github" size="24px" />
    </a>
    <a href="#" class="text-gray-600 hover:text-gray-900">
        <x-icon name="fa-brands:twitter" size="24px" />
    </a>
    <a href="#" class="text-gray-600 hover:text-gray-900">
        <x-icon name="fa-brands:linkedin" size="24px" />
    </a>
</x-hstack>
```

### Empty State

```blade
<x-center class="h-96">
    <x-vstack spacing="md" align="center">
        <x-icon name="heroicons:inbox" size="64px" class="text-gray-400" />
        <h3 class="text-lg font-semibold text-gray-700">No items found</h3>
        <p class="text-gray-500">Get started by creating a new item</p>
        <x-button color="primary">Create Item</x-button>
    </x-vstack>
</x-center>
```

### Loading Indicator

```blade
<x-hstack spacing="sm" align="center">
    <x-icon name="heroicons:arrow-path" class="animate-spin" />
    <span>Loading...</span>
</x-hstack>
```

### File Type Icons

```blade
<x-icon name="heroicons:document-text" /> <!-- Text file -->
<x-icon name="heroicons:photo" /> <!-- Image file -->
<x-icon name="heroicons:video-camera" /> <!-- Video file -->
<x-icon name="heroicons:musical-note" /> <!-- Audio file -->
<x-icon name="heroicons:document-arrow-down" /> <!-- Download -->
```

## With Alpine.js

```blade
<div x-data="{ liked: false }">
    <button @click="liked = !liked">
        <x-icon 
            :name="liked ? 'heroicons:heart-solid' : 'heroicons:heart'" 
            :class="liked ? 'text-red-500' : 'text-gray-400'"
            size="24px"
        />
    </button>
</div>
```

## Popular Icon Names

### Actions
- `heroicons:plus` - Add
- `heroicons:pencil` - Edit
- `heroicons:trash` - Delete
- `heroicons:arrow-down-tray` - Download
- `heroicons:arrow-up-tray` - Upload
- `heroicons:magnifying-glass` - Search

### Navigation
- `heroicons:home` - Home
- `heroicons:arrow-left` - Back
- `heroicons:arrow-right` - Forward
- `heroicons:chevron-down` - Dropdown
- `heroicons:bars-3` - Menu

### Status
- `heroicons:check-circle` - Success
- `heroicons:x-circle` - Error
- `heroicons:exclamation-triangle` - Warning
- `heroicons:information-circle` - Info
- `heroicons:clock` - Pending

