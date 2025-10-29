# Sidebar

Side navigation component for dashboard and admin layouts with support for icons, badges, and multi-level menus. Built with Flowbite's collapse and drawer functionality. Sidebar provides a flexible way to create side navigation.

## Basic Usage

```blade
<x-sidebar>
    <x-vstack gap="2" fontWeight="medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users">
            Users
        </x-sidebar-item>
        <x-sidebar-item href="/products" icon="shopping-bag">
            Products
        </x-sidebar-item>
        <x-sidebar-item href="/settings" icon="cog">
            Settings
        </x-sidebar-item>
    </x-vstack>
</x-sidebar>
```

## Components

### Sidebar

Main sidebar container.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string\|null` | `'sidebar'` | Element ID |
| `position` | `string\|null` | `'left'` | Position: `left`, `right` |
| `fixed` | `bool` | `true` | Whether sidebar is fixed |
| `offCanvas` | `bool` | `false` | Whether sidebar is off-canvas (drawer style) |

### SidebarItem

Navigation item for sidebar.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string\|null` | `'#'` | Link URL |
| `icon` | `string\|null` | `null` | Icon name |
| `badge` | `string\|null` | `null` | Badge text |
| `active` | `bool` | `false` | Whether item is active |

### SidebarGroup

### Style Props

Sidebar and related components support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

Collapsible group for sidebar items.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string\|null` | `null` | Title for the group |
| `icon` | `string\|null` | `null` | Icon name |
| `open` | `bool` | `false` | Whether group is open by default |

### SidebarToggle

Toggle button for off-canvas sidebar.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `target` | `string\|null` | `'sidebar'` | Target sidebar element ID |

## Variants

### Default Sidebar

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/kanban" icon="view-grid">
            Kanban
        </x-sidebar-item>
        <x-sidebar-item href="/inbox" icon="inbox" badge="3">
            Inbox
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users">
            Users
        </x-sidebar-item>
        <x-sidebar-item href="/products" icon="shopping-bag">
            Products
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Multi-Level Menu

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        
        <x-sidebar-group title="E-commerce" icon="shopping-cart">
            <x-sidebar-item href="/products">Products</x-sidebar-item>
            <x-sidebar-item href="/orders">Orders</x-sidebar-item>
            <x-sidebar-item href="/customers">Customers</x-sidebar-item>
        </x-sidebar-group>
        
        <x-sidebar-group title="Settings" icon="cog">
            <x-sidebar-item href="/profile">Profile</x-sidebar-item>
            <x-sidebar-item href="/account">Account</x-sidebar-item>
            <x-sidebar-item href="/security">Security</x-sidebar-item>
        </x-sidebar-group>
        
        <x-sidebar-item href="/help" icon="question-mark-circle">
            Help
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### Off-Canvas Sidebar

```blade
<!-- Toggle button -->
<x-sidebar-toggle target="drawer-sidebar" />

<!-- Off-canvas sidebar -->
<x-sidebar id="drawer-sidebar" :off-canvas="true">
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users">
            Users
        </x-sidebar-item>
        <x-sidebar-item href="/products" icon="shopping-bag">
            Products
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### Right-Positioned Sidebar

```blade
<x-sidebar position="right">
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/notifications" icon="bell">
            Notifications
        </x-sidebar-item>
        <x-sidebar-item href="/messages" icon="chat">
            Messages
        </x-sidebar-item>
        <x-sidebar-item href="/activity" icon="clock">
            Activity
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Badges

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/inbox" icon="inbox" badge="12">
            Inbox
        </x-sidebar-item>
        <x-sidebar-item href="/notifications" icon="bell" badge="5">
            Notifications
        </x-sidebar-item>
        <x-sidebar-item href="/messages" icon="chat" badge="New">
            Messages
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Content Separator

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/analytics" icon="chart-bar">
            Analytics
        </x-sidebar-item>
    </ul>
    
    <x-separator class="my-4" />
    
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/settings" icon="cog">
            Settings
        </x-sidebar-item>
        <x-sidebar-item href="/help" icon="question-mark-circle">
            Help
        </x-sidebar-item>
        <x-sidebar-item href="/logout" icon="logout">
            Logout
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With CTA Button

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users">
            Users
        </x-sidebar-item>
        <x-sidebar-item href="/products" icon="shopping-bag">
            Products
        </x-sidebar-item>
    </ul>
    
    <div class="mt-4 p-4 bg-blue-50 rounded-lg dark:bg-blue-900">
        <div class="mb-3">
            <h3 class="text-sm font-semibold text-blue-900 dark:text-blue-100">
                Upgrade to Pro
            </h3>
            <p class="text-xs text-blue-800 dark:text-blue-200">
                Get access to premium features
            </p>
        </div>
        <x-button href="/upgrade" size="sm" class="w-full">
            Upgrade Now
        </x-button>
    </div>
</x-sidebar>
```

## Common Patterns

### Dashboard Layout

```blade
<!-- Sidebar toggle for mobile -->
<x-sidebar-toggle target="default-sidebar" />

<!-- Sidebar -->
<x-sidebar id="default-sidebar" :off-canvas="true">
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="request()->is('dashboard')">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/analytics" icon="chart-bar" :active="request()->is('analytics')">
            Analytics
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users" :active="request()->is('users')">
            Users
        </x-sidebar-item>
        <x-sidebar-item href="/products" icon="shopping-bag" :active="request()->is('products')">
            Products
        </x-sidebar-item>
        <x-sidebar-item href="/settings" icon="cog" :active="request()->is('settings')">
            Settings
        </x-sidebar-item>
    </ul>
</x-sidebar>

<!-- Main content -->
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <!-- Your content here -->
    </div>
</div>
```

### With Navbar

```blade
<!-- Navbar -->
<x-navbar :sticky="true">
    <x-navbar-brand href="/" logo="/logo.svg" name="My App" />
    
    <div class="flex items-center md:order-2">
        <x-sidebar-toggle target="logo-sidebar" />
    </div>
</x-navbar>

<!-- Sidebar -->
<x-sidebar id="logo-sidebar" class="pt-20" :off-canvas="true">
    <ul class="space-y-2 font-medium">
        <x-sidebar-item href="/dashboard" icon="dashboard" :active="true">
            Dashboard
        </x-sidebar-item>
        <x-sidebar-item href="/users" icon="users">
            Users
        </x-sidebar-item>
    </ul>
</x-sidebar>

<!-- Main content -->
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <!-- Your content here -->
    </div>
</div>
```

## Laravel Integration

### With Route Helpers

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item
            :href="route('dashboard')"
            icon="dashboard"
            :active="request()->routeIs('dashboard')"
        >
            Dashboard
        </x-sidebar-item>

        <x-sidebar-item
            :href="route('users.index')"
            icon="users"
            :active="request()->routeIs('users.*')"
        >
            Users
        </x-sidebar-item>

        <x-sidebar-item
            :href="route('products.index')"
            icon="shopping-bag"
            :active="request()->routeIs('products.*')"
        >
            Products
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Authentication

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item :href="route('dashboard')" icon="dashboard" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-sidebar-item>

        @can('view-users')
            <x-sidebar-item :href="route('users.index')" icon="users" :active="request()->routeIs('users.*')">
                Users
            </x-sidebar-item>
        @endcan

        @can('view-products')
            <x-sidebar-item :href="route('products.index')" icon="shopping-bag" :active="request()->routeIs('products.*')">
                Products
            </x-sidebar-item>
        @endcan

        <x-sidebar-item :href="route('profile')" icon="user" :active="request()->routeIs('profile')">
            Profile
        </x-sidebar-item>
    </ul>

    <x-separator class="my-4" />

    <ul class="space-y-2 font-medium">
        <x-sidebar-item :href="route('logout')" icon="logout">
            Logout
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Dynamic Badge Count

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item
            :href="route('dashboard')"
            icon="dashboard"
            :active="request()->routeIs('dashboard')"
        >
            Dashboard
        </x-sidebar-item>

        <x-sidebar-item
            :href="route('inbox')"
            icon="inbox"
            :badge="auth()->user()->unreadMessages()->count()"
            :active="request()->routeIs('inbox')"
        >
            Inbox
        </x-sidebar-item>

        <x-sidebar-item
            :href="route('notifications')"
            icon="bell"
            :badge="auth()->user()->unreadNotifications()->count()"
            :active="request()->routeIs('notifications')"
        >
            Notifications
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

### With Livewire

```blade
<x-sidebar>
    <ul class="space-y-2 font-medium">
        <x-sidebar-item
            href="#"
            icon="dashboard"
            :active="$activeTab === 'dashboard'"
            wire:click="$set('activeTab', 'dashboard')"
        >
            Dashboard
        </x-sidebar-item>

        <x-sidebar-item
            href="#"
            icon="users"
            :active="$activeTab === 'users'"
            wire:click="$set('activeTab', 'users')"
        >
            Users
        </x-sidebar-item>

        <x-sidebar-item
            href="#"
            icon="shopping-bag"
            :active="$activeTab === 'products'"
            wire:click="$set('activeTab', 'products')"
        >
            Products
        </x-sidebar-item>
    </ul>
</x-sidebar>
```

## JavaScript

The sidebar uses Flowbite's Drawer component for off-canvas functionality and Collapse component for multi-level menus. Make sure to include Flowbite JS:

```html
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
```

Or via NPM:

```bash
npm install flowbite
```

```javascript
import 'flowbite';
```

## Accessibility

The Sidebar component:
- Uses semantic `<aside>` element
- Includes proper ARIA attributes (`aria-label`, `aria-controls`, `aria-current`)
- Provides screen reader text for toggle button
- Supports keyboard navigation
- Maintains proper focus management
- Uses semantic HTML structure with `<nav>` and `<ul>` elements

## Notes

- Sidebar is responsive by default (hidden on mobile, visible on desktop with `sm:` breakpoint)
- Off-canvas sidebar requires Flowbite JavaScript for drawer functionality
- Multi-level menus require Flowbite JavaScript for collapse functionality
- Fixed sidebar automatically takes full height (`h-screen`)
- Main content should have `sm:ml-64` class to account for sidebar width
- Supports RTL layouts with `rtl:` classes
- Dark mode is automatically supported
- All Tailwind utility classes can be applied via attributes

## Browser Support

- All modern browsers
- Requires JavaScript for off-canvas and multi-level menu functionality
- Responsive design
- RTL support
- Dark mode support


