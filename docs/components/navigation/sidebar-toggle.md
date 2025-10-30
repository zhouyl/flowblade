# SidebarToggle

SidebarToggle component for creating a button to toggle sidebar visibility. Used for collapsing/expanding the sidebar. Perfect for responsive layouts and mobile-friendly navigation.

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

### Style Props

SidebarToggle supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### In Header

```blade
<header class="flex items-center gap-4 p-4 border-b">
    <x-sidebar-toggle />
    <x-heading size="lg">Dashboard</x-heading>
</header>
```

### With Custom Styling

```blade
<x-sidebar-toggle
    p="2"
    rounded="md"
    hover:bg="gray.100"
    transition="all"
/>
```

### Mobile Navigation

```blade
<div class="flex items-center justify-between p-4 md:hidden">
    <x-heading as="h1" fontSize="lg">App</x-heading>
    <x-sidebar-toggle />
</div>
```

## Common Patterns

### Dashboard Layout

```blade
<div class="flex h-screen">
    <x-sidebar>
        <x-sidebar-item href="/dashboard">Dashboard</x-sidebar-item>
        <x-sidebar-item href="/users">Users</x-sidebar-item>
        <x-sidebar-item href="/settings">Settings</x-sidebar-item>
    </x-sidebar>

    <div class="flex-1 flex flex-col">
        <header class="flex items-center gap-4 p-4 border-b">
            <x-sidebar-toggle />
            <x-heading size="lg">Dashboard</x-heading>
        </header>
        <main class="flex-1 p-4">
            <!-- Content -->
        </main>
    </div>
</div>
```

## Accessibility

The SidebarToggle component:
- Uses semantic HTML button element
- Supports keyboard navigation (Tab, Enter, Space)
- Works with screen readers
- Provides clear toggle state indication
- Has proper ARIA labels for accessibility
- Maintains focus management

