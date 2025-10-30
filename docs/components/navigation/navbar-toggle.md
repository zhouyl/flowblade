# NavbarToggle

NavbarToggle component for creating a hamburger menu button. Used with NavbarCollapse to toggle mobile navigation visibility.

## Basic Usage

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>
    <x-navbar-toggle />
    <x-navbar-collapse>
        <!-- Navigation links -->
    </x-navbar-collapse>
</x-navbar>
```

## Props

NavbarToggle supports all common style props for flexible styling.

## Examples

### Mobile Navigation

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-text weight="bold">MyApp</x-text>
    </x-navbar-brand>
    
    <x-navbar-toggle />
    
    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
        <x-navbar-link href="/about">About</x-navbar-link>
        <x-navbar-link href="/contact">Contact</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

### With Custom Styling

```blade
<x-navbar>
    <x-navbar-brand href="/">Logo</x-navbar-brand>
    
    <x-navbar-toggle 
        color="primary"
        size="lg"
    />
    
    <x-navbar-collapse>
        <x-navbar-link href="/">Home</x-navbar-link>
    </x-navbar-collapse>
</x-navbar>
```

## Accessibility

The NavbarToggle component:
- Uses semantic HTML button element
- Supports keyboard navigation
- Works with screen readers
- Provides clear toggle state indication
- Announces menu state to assistive technologies

