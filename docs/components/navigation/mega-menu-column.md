# MegaMenuColumn

MegaMenuColumn component for creating columns within a MegaMenu. Organizes menu items into multiple columns for better layout. Perfect for organizing menu items and creating multi-column layouts.

## Basic Usage

```blade
<x-mega-menu>
    <x-mega-menu-column title="Products">
        <x-mega-menu-item href="/products/electronics">Electronics</x-mega-menu-item>
        <x-mega-menu-item href="/products/clothing">Clothing</x-mega-menu-item>
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Services">
        <x-mega-menu-item href="/services/support">Support</x-mega-menu-item>
        <x-mega-menu-item href="/services/consulting">Consulting</x-mega-menu-item>
    </x-mega-menu-column>
</x-mega-menu>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Column title |

MegaMenuColumn also supports all common style props for flexible styling.

## Examples

### Multi-column Menu

```blade
<x-mega-menu>
    <x-mega-menu-column title="Products">
        <x-mega-menu-item href="/products">All Products</x-mega-menu-item>
        <x-mega-menu-item href="/electronics">Electronics</x-mega-menu-item>
        <x-mega-menu-item href="/clothing">Clothing</x-mega-menu-item>
    </x-mega-menu-column>
    
    <x-mega-menu-column title="Resources">
        <x-mega-menu-item href="/docs">Documentation</x-mega-menu-item>
        <x-mega-menu-item href="/blog">Blog</x-mega-menu-item>
        <x-mega-menu-item href="/support">Support</x-mega-menu-item>
    </x-mega-menu-column>
</x-mega-menu>
```

## Accessibility

The MegaMenuColumn component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Arrow keys)
- Works with screen readers
- Provides clear column organization
- Announces column title to screen readers
- Supports proper list structure

