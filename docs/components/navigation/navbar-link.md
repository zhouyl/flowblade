# NavbarLink

NavbarLink component for displaying navigation links within a Navbar. Provides styling for active and inactive states.

## Basic Usage

```blade
<x-navbar>
    <x-navbar-link href="/home">Home</x-navbar-link>
    <x-navbar-link href="/about">About</x-navbar-link>
    <x-navbar-link href="/contact">Contact</x-navbar-link>
</x-navbar>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'#'` | Link URL |
| `active` | `boolean` | `false` | Mark as active |

NavbarLink also supports all common style props for flexible styling.

## Examples

### Basic Navigation

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>
    
    <x-navbar-link href="/">Home</x-navbar-link>
    <x-navbar-link href="/about">About</x-navbar-link>
    <x-navbar-link href="/services">Services</x-navbar-link>
    <x-navbar-link href="/contact">Contact</x-navbar-link>
</x-navbar>
```

### With Active State

```blade
<x-navbar>
    <x-navbar-link href="/" active>Home</x-navbar-link>
    <x-navbar-link href="/about">About</x-navbar-link>
    <x-navbar-link href="/contact">Contact</x-navbar-link>
</x-navbar>
```

### With Icons

```blade
<x-navbar>
    <x-navbar-link href="/">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:home" class="w-4 h-4" />
            Home
        </div>
    </x-navbar-link>
    <x-navbar-link href="/settings">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:cog" class="w-4 h-4" />
            Settings
        </div>
    </x-navbar-link>
</x-navbar>
```

### With Dropdown

```blade
<x-navbar>
    <x-navbar-link href="/">Home</x-navbar-link>
    
    <x-menu>
        <x-menu-trigger>
            <x-navbar-link href="#">Products</x-navbar-link>
        </x-menu-trigger>
        <x-menu-content>
            <x-menu-item href="/products/electronics">Electronics</x-menu-item>
            <x-menu-item href="/products/clothing">Clothing</x-menu-item>
        </x-menu-content>
    </x-menu>
</x-navbar>
```

## Accessibility

The NavbarLink component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear active state indication

