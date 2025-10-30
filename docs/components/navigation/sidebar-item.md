# SidebarItem

SidebarItem component for displaying individual items within a Sidebar. Each item can be a link or button for navigation.

## Basic Usage

```blade
<x-sidebar>
    <x-sidebar-item href="/dashboard">Dashboard</x-sidebar-item>
    <x-sidebar-item href="/users">Users</x-sidebar-item>
    <x-sidebar-item href="/settings">Settings</x-sidebar-item>
</x-sidebar>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `null` | Link URL |
| `active` | `boolean` | `false` | Mark as active |
| `icon` | `string` | `null` | Icon name |

SidebarItem also supports all common style props for flexible styling.

## Examples

### Basic Sidebar

```blade
<x-sidebar>
    <x-sidebar-item href="/dashboard" active>Dashboard</x-sidebar-item>
    <x-sidebar-item href="/users">Users</x-sidebar-item>
    <x-sidebar-item href="/products">Products</x-sidebar-item>
    <x-sidebar-item href="/settings">Settings</x-sidebar-item>
</x-sidebar>
```

### With Icons

```blade
<x-sidebar>
    <x-sidebar-item href="/dashboard">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:home" class="w-5 h-5" />
            Dashboard
        </div>
    </x-sidebar-item>
    <x-sidebar-item href="/users">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:users" class="w-5 h-5" />
            Users
        </div>
    </x-sidebar-item>
</x-sidebar>
```

## Accessibility

The SidebarItem component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear active state indication

