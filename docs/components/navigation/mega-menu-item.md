# MegaMenuItem

MegaMenuItem component for displaying individual items within a MegaMenu column. Each item is a clickable link. Perfect for menu items and navigation links.

## Basic Usage

```blade
<x-mega-menu>
    <x-mega-menu-column title="Products">
        <x-mega-menu-item href="/products/electronics">Electronics</x-mega-menu-item>
        <x-mega-menu-item href="/products/clothing">Clothing</x-mega-menu-item>
    </x-mega-menu-column>
</x-mega-menu>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'#'` | Link URL |

MegaMenuItem also supports all common style props for flexible styling.

## Examples

### Menu Items with Icons

```blade
<x-mega-menu>
    <x-mega-menu-column title="Products">
        <x-mega-menu-item href="/products">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:shopping-bag" class="w-4 h-4" />
                All Products
            </div>
        </x-mega-menu-item>
        <x-mega-menu-item href="/electronics">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:computer-desktop" class="w-4 h-4" />
                Electronics
            </div>
        </x-mega-menu-item>
    </x-mega-menu-column>
</x-mega-menu>
```

## Accessibility

The MegaMenuItem component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear menu item indication
- Announces menu item to screen readers
- Supports proper link semantics

