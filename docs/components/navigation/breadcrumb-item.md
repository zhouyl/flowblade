# BreadcrumbItem

BreadcrumbItem component for displaying individual breadcrumb items within a Breadcrumb. Each item represents a level in the navigation hierarchy. Perfect for creating navigation paths and showing page location context.

## Basic Usage

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
    <x-breadcrumb-item>Current Page</x-breadcrumb-item>
</x-breadcrumb>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `null` | Link URL (if null, item is not clickable) |
| `active` | `boolean` | `false` | Mark as active/current page |

BreadcrumbItem also supports all common style props for flexible styling.

## Examples

### Navigation Breadcrumb

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
    <x-breadcrumb-item href="/products/electronics">Electronics</x-breadcrumb-item>
    <x-breadcrumb-item active>Laptop</x-breadcrumb-item>
</x-breadcrumb>
```

### With Icons

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">
        <div class="flex items-center gap-1">
            <x-icon name="heroicons:home" class="w-4 h-4" />
            Home
        </div>
    </x-breadcrumb-item>
    <x-breadcrumb-item href="/docs">Documentation</x-breadcrumb-item>
    <x-breadcrumb-item active>Components</x-breadcrumb-item>
</x-breadcrumb>
```

### E-commerce Breadcrumb

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop">Shop</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop/mens">Men's</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop/mens/shoes">Shoes</x-breadcrumb-item>
    <x-breadcrumb-item active>Running Shoes</x-breadcrumb-item>
</x-breadcrumb>
```

### Blog Breadcrumb

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog">Blog</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog/category/technology">Technology</x-breadcrumb-item>
    <x-breadcrumb-item active>Getting Started with Laravel</x-breadcrumb-item>
</x-breadcrumb>
```

## Accessibility

The BreadcrumbItem component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear navigation hierarchy
- Marks current page with `aria-current="page"`
- Announces breadcrumb item role to screen readers
- Supports proper link semantics

