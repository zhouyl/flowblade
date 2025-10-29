# Indicator Component

Status indicator component for online/offline states, notifications, and activity indicators. Indicator provides a flexible way to display status indicators with support for various colors, sizes, and positions.

## Basic Usage

```blade
<x-indicator color="green" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | string | `'gray'` | Color: `gray`, `red`, `yellow`, `green`, `blue`, `indigo`, `purple`, `pink` |
| `size` | string | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `position` | string | `'inline'` | Position: `inline`, `top-left`, `top-right`, `bottom-left`, `bottom-right` |
| `ping` | boolean | `false` | Enable ping animation |
| `border` | boolean | `false` | Add white border |
| `label` | string | `''` | Accessible label for screen readers |

### Style Props

Indicator supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Indicators

```blade
<x-flex align="center" gap="4">
    <x-indicator color="gray" />
    <x-indicator color="red" />
    <x-indicator color="yellow" />
    <x-indicator color="green" />
    <x-indicator color="blue" />
</x-flex>
```

### Sizes

```blade
<x-flex align="center" gap="4">
    <x-indicator size="xs" color="green" />
    <x-indicator size="sm" color="green" />
    <x-indicator size="md" color="green" />
    <x-indicator size="lg" color="green" />
    <x-indicator size="xl" color="green" />
</x-flex>
```

### With Ping Animation

```blade
<div class="flex items-center gap-4">
    <x-indicator color="green" :ping="true" />
    <x-indicator color="red" :ping="true" />
    <x-indicator color="blue" :ping="true" />
</div>
```

### Online Status

```blade
<div class="flex items-center gap-2">
    <x-indicator color="green" :ping="true" label="Online" />
    <span class="text-sm font-medium text-gray-900 dark:text-white">Online</span>
</div>
```

### Offline Status

```blade
<div class="flex items-center gap-2">
    <x-indicator color="gray" label="Offline" />
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Offline</span>
</div>
```

### Away Status

```blade
<div class="flex items-center gap-2">
    <x-indicator color="yellow" label="Away" />
    <span class="text-sm font-medium text-gray-900 dark:text-white">Away</span>
</div>
```

### Busy Status

```blade
<div class="flex items-center gap-2">
    <x-indicator color="red" label="Busy" />
    <span class="text-sm font-medium text-gray-900 dark:text-white">Busy</span>
</div>
```

### With Avatar (Positioned)

```blade
<div class="relative inline-block">
    <x-avatar src="/images/avatar.jpg" size="lg" />
    <x-indicator color="green" position="bottom-right" :border="true" label="Online" />
</div>
```

### Avatar with Ping

```blade
<div class="relative inline-block">
    <x-avatar src="/images/avatar.jpg" size="lg" />
    <x-indicator color="green" position="bottom-right" :border="true" :ping="true" label="Active now" />
</div>
```

### Top Right Position

```blade
<div class="relative inline-block">
    <x-avatar src="/images/avatar.jpg" size="lg" />
    <x-indicator color="red" position="top-right" :border="true" label="Do not disturb" />
</div>
```

### Top Left Position

```blade
<div class="relative inline-block">
    <x-avatar src="/images/avatar.jpg" size="lg" />
    <x-indicator color="blue" position="top-left" :border="true" label="In a meeting" />
</div>
```

### Bottom Left Position

```blade
<div class="relative inline-block">
    <x-avatar src="/images/avatar.jpg" size="lg" />
    <x-indicator color="yellow" position="bottom-left" :border="true" label="Away" />
</div>
```

### Notification Badge

```blade
<div class="relative inline-block">
    <x-button variant="ghost" size="lg">
        <x-icon name="heroicons:bell" class="w-6 h-6" />
    </x-button>
    <x-indicator color="red" position="top-right" size="sm" :ping="true" label="3 new notifications" />
</div>
```

### User List with Status

```blade
<div class="space-y-4">
    <div class="flex items-center gap-3">
        <div class="relative">
            <x-avatar src="/images/user1.jpg" />
            <x-indicator color="green" position="bottom-right" :border="true" size="sm" />
        </div>
        <div>
            <div class="font-medium text-gray-900 dark:text-white">John Doe</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Online</div>
        </div>
    </div>
    
    <div class="flex items-center gap-3">
        <div class="relative">
            <x-avatar src="/images/user2.jpg" />
            <x-indicator color="yellow" position="bottom-right" :border="true" size="sm" />
        </div>
        <div>
            <div class="font-medium text-gray-900 dark:text-white">Jane Smith</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Away</div>
        </div>
    </div>
    
    <div class="flex items-center gap-3">
        <div class="relative">
            <x-avatar src="/images/user3.jpg" />
            <x-indicator color="gray" position="bottom-right" :border="true" size="sm" />
        </div>
        <div>
            <div class="font-medium text-gray-900 dark:text-white">Bob Johnson</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Offline</div>
        </div>
    </div>
</div>
```

### Status Legend

```blade
<div class="flex flex-wrap gap-4">
    <div class="flex items-center gap-2">
        <x-indicator color="green" size="sm" />
        <span class="text-sm text-gray-700 dark:text-gray-300">Available</span>
    </div>
    <div class="flex items-center gap-2">
        <x-indicator color="yellow" size="sm" />
        <span class="text-sm text-gray-700 dark:text-gray-300">Away</span>
    </div>
    <div class="flex items-center gap-2">
        <x-indicator color="red" size="sm" />
        <span class="text-sm text-gray-700 dark:text-gray-300">Busy</span>
    </div>
    <div class="flex items-center gap-2">
        <x-indicator color="gray" size="sm" />
        <span class="text-sm text-gray-700 dark:text-gray-300">Offline</span>
    </div>
</div>
```

### Activity Indicator

```blade
<div class="flex items-center gap-2">
    <x-indicator color="blue" :ping="true" size="sm" />
    <span class="text-sm text-gray-700 dark:text-gray-300">Processing...</span>
</div>
```

### Server Status

```blade
<div class="space-y-3">
    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="flex items-center gap-3">
            <x-indicator color="green" :ping="true" />
            <div>
                <div class="font-medium text-gray-900 dark:text-white">API Server</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Operational</div>
            </div>
        </div>
        <x-badge color="green">Healthy</x-badge>
    </div>
    
    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="flex items-center gap-3">
            <x-indicator color="yellow" />
            <div>
                <div class="font-medium text-gray-900 dark:text-white">Database</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Degraded Performance</div>
            </div>
        </div>
        <x-badge color="yellow">Warning</x-badge>
    </div>
    
    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="flex items-center gap-3">
            <x-indicator color="red" />
            <div>
                <div class="font-medium text-gray-900 dark:text-white">Cache Server</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Down</div>
            </div>
        </div>
        <x-badge color="red">Critical</x-badge>
    </div>
</div>
```

### Live Streaming

```blade
<div class="relative inline-block">
    <img src="/images/stream-thumbnail.jpg" alt="Stream" class="w-64 h-36 object-cover rounded-lg" />
    <div class="absolute top-2 left-2 flex items-center gap-2 px-2 py-1 bg-red-600 text-white rounded-md">
        <x-indicator color="white" :ping="true" size="xs" />
        <span class="text-xs font-semibold">LIVE</span>
    </div>
</div>
```

### Notification Icon

```blade
<button class="relative p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
    <x-icon name="heroicons:bell" class="w-6 h-6" />
    <x-indicator color="red" position="top-right" size="xs" :ping="true" label="New notifications" />
</button>
```

## Styling Tips

### Custom Colors

```blade
<x-indicator class="bg-orange-500" />
```

### Larger Indicators

```blade
<x-indicator size="xl" color="green" class="w-5 h-5" />
```

## Accessibility

The Indicator component includes proper ARIA attributes:

```blade
<x-indicator color="green" label="User is online" />
```

This renders with `aria-label` and `role="status"` for screen readers.

## Browser Support

The Indicator component uses modern CSS features:
- Flexbox
- CSS animations (ping effect)
- CSS transforms (positioning)
- Tailwind CSS utilities

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Avatar](./avatar.md) - User avatar component
- [Badge](./badge.md) - Badge component
- [Status](./status.md) - Status component

