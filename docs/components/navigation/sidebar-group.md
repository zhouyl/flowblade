# SidebarGroup

SidebarGroup component for grouping related sidebar items. Provides a collapsible section for organizing navigation items. Perfect for organizing navigation hierarchies and grouping related menu items.

## Basic Usage

```blade
<x-sidebar>
    <x-sidebar-group title="Main">
        <x-sidebar-item href="/dashboard">Dashboard</x-sidebar-item>
        <x-sidebar-item href="/analytics">Analytics</x-sidebar-item>
    </x-sidebar-group>
    
    <x-sidebar-group title="Settings">
        <x-sidebar-item href="/settings">Settings</x-sidebar-item>
        <x-sidebar-item href="/users">Users</x-sidebar-item>
    </x-sidebar-group>
</x-sidebar>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Group title |
| `collapsible` | `boolean` | `true` | Allow collapsing |

SidebarGroup also supports all common style props for flexible styling.

## Examples

### Collapsible Groups

```blade
<x-sidebar>
    <x-sidebar-group title="Navigation" collapsible>
        <x-sidebar-item href="/home">Home</x-sidebar-item>
        <x-sidebar-item href="/about">About</x-sidebar-item>
    </x-sidebar-group>
    
    <x-sidebar-group title="Admin" collapsible>
        <x-sidebar-item href="/users">Users</x-sidebar-item>
        <x-sidebar-item href="/settings">Settings</x-sidebar-item>
    </x-sidebar-group>
</x-sidebar>
```

## Accessibility

The SidebarGroup component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter, Arrow keys)
- Works with screen readers
- Provides clear group indication
- Announces group title to screen readers
- Supports collapsible state announcement

