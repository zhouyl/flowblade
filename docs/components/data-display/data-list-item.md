# DataListItem

DataListItem component for displaying individual key-value pairs within a DataList. Each item displays a label and corresponding value. Perfect for displaying structured information like user profiles, product details, and order information.

## Basic Usage

```blade
<x-data-list>
    <x-data-list-item label="Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
    <x-data-list-item label="Status" value="Active" />
</x-data-list>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Label text (key) |
| `value` | `string` | `null` | Value text (data) |

DataListItem also supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

### Style Props

DataListItem supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Slot Content

```blade
<x-data-list>
    <x-data-list-item label="Profile">
        <div class="flex items-center gap-2">
            <img src="/avatar.jpg" class="w-8 h-8 rounded-full" />
            <x-text>John Doe</x-text>
        </div>
    </x-data-list-item>
</x-data-list>
```

### With Custom Styling

```blade
<x-data-list>
    <x-data-list-item label="Price" value="$99.99" color="green" />
    <x-data-list-item label="Discount" value="-$10.00" color="red" />
</x-data-list>
```

### With Badge Value

```blade
<x-data-list>
    <x-data-list-item label="Status">
        <x-badge color="success">Active</x-badge>
    </x-data-list-item>
    <x-data-list-item label="Priority">
        <x-badge color="warning">High</x-badge>
    </x-data-list-item>
</x-data-list>
```

### With Icon

```blade
<x-data-list>
    <x-data-list-item label="Website">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:globe-alt" class="w-4 h-4" />
            <x-link href="https://example.com">example.com</x-link>
        </div>
    </x-data-list-item>
</x-data-list>
```

## Common Patterns

### User Profile Information

```blade
<x-data-list>
    <x-data-list-item label="Full Name" value="John Doe" />
    <x-data-list-item label="Email" value="john@example.com" />
    <x-data-list-item label="Phone" value="+1 (555) 000-0000" />
    <x-data-list-item label="Location" value="San Francisco, CA" />
    <x-data-list-item label="Member Since" value="January 2020" />
</x-data-list>
```

### Order Details

```blade
<x-data-list>
    <x-data-list-item label="Order ID" value="#ORD-12345" />
    <x-data-list-item label="Date" value="December 15, 2024" />
    <x-data-list-item label="Status">
        <x-badge color="success">Delivered</x-badge>
    </x-data-list-item>
    <x-data-list-item label="Total" value="$299.99" />
</x-data-list>
```

### Product Specifications

```blade
<x-data-list>
    <x-data-list-item label="SKU" value="PROD-001" />
    <x-data-list-item label="Category" value="Electronics" />
    <x-data-list-item label="Stock" value="45 units" />
    <x-data-list-item label="Price" value="$99.99" />
</x-data-list>
```

## Accessibility

The DataListItem component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation
- Should be used within a DataList component
- Properly announces label and value pairs to screen readers
- Supports proper ARIA attributes for data organization

