# Badge

Badge component for displaying status, labels, or counts. Badge provides a flexible way to display small pieces of information with support for various sizes, colors, and variants.

## Basic Usage

```blade
<x-badge>Default</x-badge>
<x-badge color="success">Success</x-badge>
<x-badge color="warning">Warning</x-badge>
<x-badge color="danger">Danger</x-badge>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `variant` | `string` | `'solid'` | Variant: `solid`, `subtle`, `outline` |
| `icon` | `string` | `null` | Icon name |

### Style Props

Badge supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Colors

```blade
<x-badge color="primary">Primary</x-badge>
<x-badge color="secondary">Secondary</x-badge>
<x-badge color="success">Success</x-badge>
<x-badge color="warning">Warning</x-badge>
<x-badge color="danger">Danger</x-badge>
<x-badge color="info">Info</x-badge>
<x-badge color="gray">Gray</x-badge>
```

## Variants

### Solid (Default)

```blade
<x-badge variant="solid" color="primary">Solid</x-badge>
<x-badge variant="solid" color="success">Success</x-badge>
<x-badge variant="solid" color="danger">Danger</x-badge>
```

### Subtle

```blade
<x-badge variant="subtle" color="primary">Subtle</x-badge>
<x-badge variant="subtle" color="success">Success</x-badge>
<x-badge variant="subtle" color="danger">Danger</x-badge>
```

### Outline

```blade
<x-badge variant="outline" color="primary">Outline</x-badge>
<x-badge variant="outline" color="success">Success</x-badge>
<x-badge variant="outline" color="danger">Danger</x-badge>
```

## Sizes

```blade
<x-badge size="xs">Extra Small</x-badge>
<x-badge size="sm">Small</x-badge>
<x-badge size="md">Medium</x-badge>
<x-badge size="lg">Large</x-badge>
<x-badge size="xl">Extra Large</x-badge>
```

## With Icons

```blade
<x-badge icon="heroicons:check-circle">Verified</x-badge>
<x-badge icon="heroicons:star" color="warning">Featured</x-badge>
<x-badge icon="heroicons:fire" color="danger">Hot</x-badge>
<x-badge icon="heroicons:sparkles" color="info">New</x-badge>
```

## Common Patterns

### Status Indicators

```blade
<x-badge color="success" icon="heroicons:check-circle">Active</x-badge>
<x-badge color="warning" icon="heroicons:clock">Pending</x-badge>
<x-badge color="danger" icon="heroicons:x-circle">Inactive</x-badge>
<x-badge color="gray" icon="heroicons:pause-circle">Paused</x-badge>
```

### Notification Counts

```blade
<x-flex align="center" gap="2">
    <x-text as="span">Messages</x-text>
    <x-badge size="sm" color="danger">5</x-badge>
</x-flex>

<x-flex align="center" gap="2">
    <x-text as="span">Notifications</x-text>
    <x-badge size="sm" color="primary">12</x-badge>
</x-flex>
```

### User Roles

```blade
<x-badge variant="subtle" color="primary">Admin</x-badge>
<x-badge variant="subtle" color="success">Moderator</x-badge>
<x-badge variant="subtle" color="gray">User</x-badge>
<x-badge variant="subtle" color="warning">Guest</x-badge>
```

### Product Tags

```blade
<x-flex gap="2">
    <x-badge variant="outline" color="success">In Stock</x-badge>
    <x-badge variant="outline" color="warning">Limited</x-badge>
    <x-badge variant="outline" color="danger">Sale</x-badge>
    <x-badge variant="outline" color="info">New Arrival</x-badge>
</x-flex>
```

### Category Labels

```blade
<x-wrap gap="2">
    <x-badge size="sm" variant="subtle" color="primary">Technology</x-badge>
    <x-badge size="sm" variant="subtle" color="success">Business</x-badge>
    <x-badge size="sm" variant="subtle" color="info">Design</x-badge>
    <x-badge size="sm" variant="subtle" color="warning">Marketing</x-badge>
</x-wrap>
```

### Priority Levels

```blade
<x-badge color="danger" icon="heroicons:arrow-up">High Priority</x-badge>
<x-badge color="warning" icon="heroicons:minus">Medium Priority</x-badge>
<x-badge color="success" icon="heroicons:arrow-down">Low Priority</x-badge>
```

### Feature Flags

```blade
<div class="flex items-center gap-2">
    <x-heading size="md">Premium Feature</x-heading>
    <x-badge size="sm" color="warning" icon="heroicons:star">Pro</x-badge>
</div>

<div class="flex items-center gap-2">
    <x-heading size="md">Beta Feature</x-heading>
    <x-badge size="sm" color="info" icon="heroicons:beaker">Beta</x-badge>
</div>
```

### Order Status

```blade
<x-table variant="striped">
    <x-table-header>
        <x-table-row>
            <x-table-head>Order ID</x-table-head>
            <x-table-head>Customer</x-table-head>
            <x-table-head>Status</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>#1001</x-table-cell>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>
                <x-badge color="success" icon="heroicons:check-circle">Delivered</x-badge>
            </x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>#1002</x-table-cell>
            <x-table-cell>Jane Smith</x-table-cell>
            <x-table-cell>
                <x-badge color="warning" icon="heroicons:truck">Shipping</x-badge>
            </x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>#1003</x-table-cell>
            <x-table-cell>Bob Johnson</x-table-cell>
            <x-table-cell>
                <x-badge color="info" icon="heroicons:clock">Processing</x-badge>
            </x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

### User Profile

```blade
<x-card>
    <div class="flex items-center gap-4">
        <img src="/avatar.jpg" class="w-16 h-16 rounded-full" />
        <div>
            <div class="flex items-center gap-2 mb-1">
                <x-heading size="lg">John Doe</x-heading>
                <x-badge size="sm" color="primary" icon="heroicons:check-badge">Verified</x-badge>
            </div>
            <div class="flex gap-2">
                <x-badge size="xs" variant="subtle" color="success">Pro Member</x-badge>
                <x-badge size="xs" variant="subtle" color="info">Developer</x-badge>
            </div>
        </div>
    </div>
</x-card>
```

## Livewire Integration

```blade
<div>
    @foreach($items as $item)
        <div class="flex items-center justify-between p-4 border-b">
            <span>{{ $item->name }}</span>
            <x-badge 
                :color="$item->status === 'active' ? 'success' : 'gray'"
                :icon="$item->status === 'active' ? 'heroicons:check-circle' : 'heroicons:x-circle'"
            >
                {{ ucfirst($item->status) }}
            </x-badge>
        </div>
    @endforeach
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    status: 'pending',
    getStatusColor() {
        return {
            'pending': 'warning',
            'approved': 'success',
            'rejected': 'danger'
        }[this.status] || 'gray';
    }
}">
    <x-badge 
        x-bind:color="getStatusColor()"
        x-text="status.charAt(0).toUpperCase() + status.slice(1)"
    ></x-badge>
    
    <div class="flex gap-2 mt-4">
        <x-button size="sm" @click="status = 'pending'">Pending</x-button>
        <x-button size="sm" @click="status = 'approved'">Approve</x-button>
        <x-button size="sm" @click="status = 'rejected'">Reject</x-button>
    </div>
</div>
```

## Accessibility

The Badge component:
- Uses semantic HTML
- Provides clear visual distinction
- Maintains proper color contrast
- Works with screen readers
- Supports keyboard navigation when interactive

