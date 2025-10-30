# NavbarCollapse

NavbarCollapse component for creating a collapsible navigation menu. Used with NavbarToggle for responsive mobile navigation. Perfect for responsive navigation menus and mobile-friendly layouts.

## Basic Usage

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>
    
    <x-navbar-toggle />
    
    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## Props

NavbarCollapse supports all common style props for flexible styling.

## Examples

### Responsive Navigation

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-text weight="bold" size="lg">MyApp</x-text>
    </x-navbar-brand>
    
    <x-navbar-toggle />
    
    <x-navbar-collapse>
        <x-navbar-link href="/" active>Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/services">Services</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With User Menu

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>
    
    <x-navbar-toggle />
    
    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        
        <x-menu>
            <x-menu-trigger>
                <x-navbar-link href="#">Account</x-navbar-link>
            </x-menu-trigger>
            <x-menu-content>
                <x-menu-item href="/profile">Profile</x-menu-item>
                <x-menu-item href="/settings">Settings</x-menu-item>
                <x-menu-divider />
                <x-menu-item href="/logout">Logout</x-menu-item>
            </x-menu-content>
        </x-menu>
    </x-navbar-collapse>
</x-navbar>
```

## Accessibility

The NavbarCollapse component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter, Escape)
- Works with screen readers
- Provides clear expand/collapse indicators
- Announces collapse state to screen readers
- Supports proper ARIA attributes for menu state

