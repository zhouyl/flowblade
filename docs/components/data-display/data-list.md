# DataList Components

Data list component family for displaying key-value pairs in a structured format. DataList provides a flexible way to display data with support for various orientations and layouts. Perfect for displaying structured data, metadata, and information panels.

## Overview

The DataList component system consists of:
- **DataList** - Container component for data list items
- **DataListItem** - Individual key-value pair item within a data list

## Basic Usage

```blade
<x-data-list>
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
    <x-data-list-item label="Phone" value="+1 234 567 8900" />
</x-data-list>
```

## Props

### DataList Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | `string` | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `divider` | `boolean` | `false` | Show divider between items |
| `labelWidth` | `string` | `null` | Label width: `'1/4'`, `'1/3'`, `'1/2'`, `'auto'` |

### DataListItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Label text |
| `value` | `string` | `null` | Value text |

## Style Props

DataList and DataListItem support all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Vertical Orientation

```blade
<x-data-list orientation="vertical">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
    <x-data-list-item label="Phone" value="+1 234 567 8900" />
</x-data-list>
```

## With Divider

```blade
<x-data-list orientation="vertical" divider>
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
    <x-data-list-item label="Phone" value="+1 234 567 8900" />
</x-data-list>
```

## Sizes

```blade
<x-data-list size="xs">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>

<x-data-list size="sm">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>

<x-data-list size="md">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>

<x-data-list size="lg">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>

<x-data-list size="xl">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>
```

## Custom Label Width

```blade
<x-data-list label-width="1/4">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>

<x-data-list label-width="1/2">
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
</x-data-list>
```

## With Slot Content

```blade
<x-data-list>
    <x-data-list-item label="Name">
        <strong>John Doe</strong>
    </x-data-list-item>
    
    <x-data-list-item label="Email">
        <a href="mailto:john@example.com" class="text-blue-600 hover:underline">
            john@example.com
        </a>
    </x-data-list-item>
    
    <x-data-list-item label="Status">
        <x-badge color="success">Active</x-badge>
    </x-data-list-item>
</x-data-list>
```

## Common Patterns

### User Profile

```blade
<x-card>
    <x-heading size="lg" class="mb-4">User Profile</x-heading>
    
    <x-data-list orientation="vertical" divider>
        <x-data-list-item label="Full Name" value="John Doe" />
        <x-data-list-item label="Email" value="john@example.com" />
        <x-data-list-item label="Phone" value="+1 234 567 8900" />
        <x-data-list-item label="Location" value="San Francisco, CA" />
        <x-data-list-item label="Joined" value="January 15, 2024" />
    </x-data-list>
</x-card>
```

### Product Details

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Product Information</x-heading>
    
    <x-data-list label-width="1/3">
        <x-data-list-item label="SKU" value="PRD-12345" />
        <x-data-list-item label="Category" value="Electronics" />
        <x-data-list-item label="Price" value="$299.99" />
        <x-data-list-item label="Stock" value="In Stock (45 units)" />
        <x-data-list-item label="Manufacturer" value="TechCorp Inc." />
    </x-data-list>
</x-card>
```

### Order Summary

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Order Summary</x-heading>
    
    <x-data-list orientation="vertical" divider size="sm">
        <x-data-list-item label="Order ID" value="#ORD-2024-001" />
        <x-data-list-item label="Date" value="October 27, 2024" />
        <x-data-list-item label="Status">
            <x-badge color="success">Delivered</x-badge>
        </x-data-list-item>
        <x-data-list-item label="Subtotal" value="$250.00" />
        <x-data-list-item label="Shipping" value="$15.00" />
        <x-data-list-item label="Tax" value="$22.50" />
        <x-data-list-item label="Total">
            <strong class="text-lg">$287.50</strong>
        </x-data-list-item>
    </x-data-list>
</x-card>
```

### System Information

```blade
<x-card>
    <x-heading size="lg" class="mb-4">System Info</x-heading>
    
    <x-data-list size="sm">
        <x-data-list-item label="OS" value="Ubuntu 22.04 LTS" />
        <x-data-list-item label="PHP Version" value="8.3.12" />
        <x-data-list-item label="Laravel Version" value="11.x" />
        <x-data-list-item label="Database" value="MySQL 8.0" />
        <x-data-list-item label="Server" value="Nginx 1.24" />
    </x-data-list>
</x-card>
```

### Contact Information

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Contact Details</x-heading>
    
    <x-data-list orientation="vertical" divider>
        <x-data-list-item label="Company">
            <strong>Acme Corporation</strong>
        </x-data-list-item>
        
        <x-data-list-item label="Address">
            123 Main Street<br>
            Suite 100<br>
            San Francisco, CA 94105
        </x-data-list-item>
        
        <x-data-list-item label="Phone">
            <a href="tel:+12345678900" class="text-blue-600 hover:underline">
                +1 (234) 567-8900
            </a>
        </x-data-list-item>
        
        <x-data-list-item label="Email">
            <a href="mailto:info@acme.com" class="text-blue-600 hover:underline">
                info@acme.com
            </a>
        </x-data-list-item>
        
        <x-data-list-item label="Website">
            <a href="https://acme.com" target="_blank" class="text-blue-600 hover:underline">
                www.acme.com
            </a>
        </x-data-list-item>
    </x-data-list>
</x-card>
```

## Livewire Integration

```blade
<x-card>
    <x-heading size="lg" class="mb-4">User Details</x-heading>
    
    <x-data-list orientation="vertical" divider>
        <x-data-list-item label="Name" :value="$user->name" />
        <x-data-list-item label="Email" :value="$user->email" />
        <x-data-list-item label="Role" :value="$user->role" />
        <x-data-list-item label="Status">
            <x-badge :color="$user->is_active ? 'success' : 'danger'">
                {{ $user->is_active ? 'Active' : 'Inactive' }}
            </x-badge>
        </x-data-list-item>
    </x-data-list>
</x-card>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    user: {
        name: 'John Doe',
        email: 'john@example.com',
        phone: '+1 234 567 8900',
        status: 'active'
    }
}">
    <x-card>
        <x-heading size="lg" class="mb-4">User Information</x-heading>
        
        <x-data-list orientation="vertical" divider>
            <x-data-list-item label="Name">
                <span x-text="user.name"></span>
            </x-data-list-item>
            
            <x-data-list-item label="Email">
                <span x-text="user.email"></span>
            </x-data-list-item>
            
            <x-data-list-item label="Phone">
                <span x-text="user.phone"></span>
            </x-data-list-item>
            
            <x-data-list-item label="Status">
                <x-badge 
                    :color="user.status === 'active' ? 'success' : 'danger'"
                    x-text="user.status"
                ></x-badge>
            </x-data-list-item>
        </x-data-list>
    </x-card>
</div>
```

## Accessibility

The DataList component:
- Uses semantic HTML (`<dl>`, `<dt>`, `<dd>`)
- Provides clear visual hierarchy
- Supports screen readers
- Maintains proper text contrast
- Responsive layout options
- Properly announces key-value pairs to screen readers
- Supports proper ARIA attributes for data structure

