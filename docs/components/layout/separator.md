# Separator

Visual separator / divider line component. Separator provides a simple way to create visual dividers between content sections with support for horizontal and vertical orientations.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'horizontal'` | Orientation (horizontal, vertical) |
| `color` | string | `'gray'` | Border color (primary, secondary, success, warning, danger, info, gray) |
| `thickness` | string | `'1'` | Border thickness (1, 2, 4, 8) |
| `length` | string | `null` | Length for vertical separators (0-96) |

### Style Props

Separator supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-separator />
```

## Examples

### Horizontal Separator

```blade
<x-text>Content above</x-text>
<x-separator />
<x-text>Content below</x-text>
```

### Vertical Separator

```blade
<x-flex align="center" gap="4">
    <x-text as="span">Item 1</x-text>
    <x-separator orientation="vertical" length="6" />
    <x-text as="span">Item 2</x-text>
    <x-separator orientation="vertical" length="6" />
    <x-text as="span">Item 3</x-text>
</x-flex>
```

### Different Colors

```blade
<x-separator color="primary" />
<x-separator color="success" />
<x-separator color="danger" />
<x-separator color="gray" />
```

### Different Thickness

```blade
<x-separator thickness="1" />
<x-separator thickness="2" />
<x-separator thickness="4" />
<x-separator thickness="8" />
```

### Custom Length (Vertical)

```blade
<x-flex align="center" gap="4">
    <x-text as="span">Short</x-text>
    <x-separator orientation="vertical" length="4" />
    <x-text as="span">Medium</x-text>
    <x-separator orientation="vertical" length="8" />
    <x-text as="span">Tall</x-text>
    <x-separator orientation="vertical" length="12" />
    <x-text as="span">Extra Tall</x-text>
</x-flex>
```

## Common Patterns

### Section Divider

```blade
<x-box as="section">
    <x-heading as="h2">Section 1</x-heading>
    <p>Content...</p>
</section>

<x-separator class="my-8" />

<section>
    <h2>Section 2</h2>
    <p>Content...</p>
</section>
```

### Card Sections

```blade
<x-box shadow="lg" rounded="xl">
    <div class="p-6">
        <h3 class="font-bold">Header</h3>
    </div>
    
    <x-separator />
    
    <div class="p-6">
        <p>Content goes here...</p>
    </div>
    
    <x-separator />
    
    <div class="p-6">
        <x-button>Action</x-button>
    </div>
</x-box>
```

### Navigation Divider

```blade
<nav class="flex items-center gap-4">
    <a href="#">Home</a>
    <x-separator orientation="vertical" length="4" />
    <a href="#">About</a>
    <x-separator orientation="vertical" length="4" />
    <a href="#">Contact</a>
</nav>
```

### List Divider

```blade
<ul>
    <li class="py-3">Item 1</li>
    <x-separator />
    <li class="py-3">Item 2</li>
    <x-separator />
    <li class="py-3">Item 3</li>
</ul>
```

### Breadcrumb Divider

```blade
<div class="flex items-center gap-2">
    <a href="#">Home</a>
    <x-separator orientation="vertical" length="4" color="gray" />
    <a href="#">Products</a>
    <x-separator orientation="vertical" length="4" color="gray" />
    <span>Item</span>
</div>
```

### Sidebar Divider

```blade
<aside class="w-64 bg-gray-100 p-4">
    <div class="mb-4">
        <h3 class="font-bold">Menu</h3>
    </div>
    
    <x-separator class="mb-4" />
    
    <nav>
        <a href="#" class="block py-2">Link 1</a>
        <a href="#" class="block py-2">Link 2</a>
    </nav>
    
    <x-separator class="my-4" />
    
    <div>
        <h3 class="font-bold">Settings</h3>
    </div>
</aside>
```

### Form Sections

```blade
<form>
    <div class="space-y-4">
        <h3 class="font-bold">Personal Information</h3>
        <x-input placeholder="Name" />
        <x-input placeholder="Email" />
    </div>
    
    <x-separator class="my-6" />
    
    <div class="space-y-4">
        <h3 class="font-bold">Address</h3>
        <x-input placeholder="Street" />
        <x-input placeholder="City" />
    </div>
</form>
```

### Colored Dividers

```blade
<x-box p="6" border="primary" rounded="lg">
    <h3>Important Section</h3>
    <x-separator color="primary" thickness="2" class="my-4" />
    <p>Content...</p>
</x-box>
```

