# SidebarToggle

SidebarToggle component for creating a button to toggle sidebar visibility. Used for collapsing/expanding the sidebar.

## Basic Usage

```blade
<div class="flex">
    <x-sidebar>
        <x-sidebar-item href="/dashboard">Dashboard</x-sidebar-item>
    </x-sidebar>
    
    <div class="flex-1">
        <x-sidebar-toggle />
    </div>
</div>
```

## Props

SidebarToggle supports all common style props for flexible styling.

## Examples

### In Header

```blade
<header class="flex items-center gap-4 p-4 border-b">
    <x-sidebar-toggle />
    <x-heading size="lg">Dashboard</x-heading>
</header>
```

## Accessibility

The SidebarToggle component:
- Uses semantic HTML button element
- Supports keyboard navigation
- Works with screen readers
- Provides clear toggle state indication

