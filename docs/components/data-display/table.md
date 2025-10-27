# Table

Table component for displaying tabular data in a structured format.

## Basic Usage

```blade
<x-table>
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
            <x-table-head>Role</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
            <x-table-cell>Admin</x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>Jane Smith</x-table-cell>
            <x-table-cell>jane@example.com</x-table-cell>
            <x-table-cell>User</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## Props

### Table Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'simple'` | Variant: `simple`, `striped`, `bordered` |
| `hover` | `boolean` | `false` | Enable hover effect |

## Variants

### Simple (Default)

```blade
<x-table variant="simple">
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

### Striped

```blade
<x-table variant="striped">
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>Jane Smith</x-table-cell>
            <x-table-cell>jane@example.com</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

### Bordered

```blade
<x-table variant="bordered">
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## With Hover Effect

```blade
<x-table hover>
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>Jane Smith</x-table-cell>
            <x-table-cell>jane@example.com</x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## Sizes

```blade
<x-table size="xs">
    <!-- Extra small table -->
</x-table>

<x-table size="sm">
    <!-- Small table -->
</x-table>

<x-table size="md">
    <!-- Medium table (default) -->
</x-table>

<x-table size="lg">
    <!-- Large table -->
</x-table>

<x-table size="xl">
    <!-- Extra large table -->
</x-table>
```

## With Custom Content

```blade
<x-table variant="striped" hover>
    <x-table-header>
        <x-table-row>
            <x-table-head>User</x-table-head>
            <x-table-head>Status</x-table-head>
            <x-table-head>Role</x-table-head>
            <x-table-head>Actions</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>
                <div class="flex items-center gap-3">
                    <img src="/avatar.jpg" class="w-8 h-8 rounded-full" />
                    <div>
                        <div class="font-medium">John Doe</div>
                        <div class="text-sm text-gray-500">john@example.com</div>
                    </div>
                </div>
            </x-table-cell>
            <x-table-cell>
                <x-badge color="success">Active</x-badge>
            </x-table-cell>
            <x-table-cell>Admin</x-table-cell>
            <x-table-cell>
                <x-button size="sm">Edit</x-button>
            </x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

## Common Patterns

### User List

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Users</x-heading>
    
    <x-table variant="striped" hover>
        <x-table-header>
            <x-table-row>
                <x-table-head>Name</x-table-head>
                <x-table-head>Email</x-table-head>
                <x-table-head>Role</x-table-head>
                <x-table-head>Status</x-table-head>
                <x-table-head>Actions</x-table-head>
            </x-table-row>
        </x-table-header>
        
        <x-table-body>
            <x-table-row>
                <x-table-cell>John Doe</x-table-cell>
                <x-table-cell>john@example.com</x-table-cell>
                <x-table-cell>Admin</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">Active</x-badge>
                </x-table-cell>
                <x-table-cell>
                    <x-button size="sm" variant="ghost">Edit</x-button>
                </x-table-cell>
            </x-table-row>
            <x-table-row>
                <x-table-cell>Jane Smith</x-table-cell>
                <x-table-cell>jane@example.com</x-table-cell>
                <x-table-cell>User</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">Active</x-badge>
                </x-table-cell>
                <x-table-cell>
                    <x-button size="sm" variant="ghost">Edit</x-button>
                </x-table-cell>
            </x-table-row>
        </x-table-body>
    </x-table>
</x-card>
```

### Product Inventory

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Inventory</x-heading>
    
    <x-table variant="bordered">
        <x-table-header>
            <x-table-row>
                <x-table-head>Product</x-table-head>
                <x-table-head>SKU</x-table-head>
                <x-table-head>Stock</x-table-head>
                <x-table-head>Price</x-table-head>
                <x-table-head>Status</x-table-head>
            </x-table-row>
        </x-table-header>
        
        <x-table-body>
            <x-table-row>
                <x-table-cell>
                    <div class="font-medium">Laptop Pro</div>
                    <div class="text-sm text-gray-500">15-inch, 512GB</div>
                </x-table-cell>
                <x-table-cell>LPT-001</x-table-cell>
                <x-table-cell>45</x-table-cell>
                <x-table-cell>$1,299.00</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">In Stock</x-badge>
                </x-table-cell>
            </x-table-row>
            <x-table-row>
                <x-table-cell>
                    <div class="font-medium">Wireless Mouse</div>
                    <div class="text-sm text-gray-500">Bluetooth, Ergonomic</div>
                </x-table-cell>
                <x-table-cell>MSE-002</x-table-cell>
                <x-table-cell>5</x-table-cell>
                <x-table-cell>$29.99</x-table-cell>
                <x-table-cell>
                    <x-badge color="warning">Low Stock</x-badge>
                </x-table-cell>
            </x-table-row>
        </x-table-body>
    </x-table>
</x-card>
```

### Transaction History

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Recent Transactions</x-heading>
    
    <x-table size="sm" hover>
        <x-table-header>
            <x-table-row>
                <x-table-head>Date</x-table-head>
                <x-table-head>Description</x-table-head>
                <x-table-head>Amount</x-table-head>
                <x-table-head>Status</x-table-head>
            </x-table-row>
        </x-table-header>
        
        <x-table-body>
            <x-table-row>
                <x-table-cell>Oct 27, 2024</x-table-cell>
                <x-table-cell>Payment received</x-table-cell>
                <x-table-cell class="text-green-600">+$500.00</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">Completed</x-badge>
                </x-table-cell>
            </x-table-row>
            <x-table-row>
                <x-table-cell>Oct 26, 2024</x-table-cell>
                <x-table-cell>Subscription fee</x-table-cell>
                <x-table-cell class="text-red-600">-$29.99</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">Completed</x-badge>
                </x-table-cell>
            </x-table-row>
        </x-table-body>
    </x-table>
</x-card>
```

## Livewire Integration

```blade
<x-card>
    <x-heading size="lg" class="mb-4">Users</x-heading>
    
    <x-table variant="striped" hover>
        <x-table-header>
            <x-table-row>
                <x-table-head>Name</x-table-head>
                <x-table-head>Email</x-table-head>
                <x-table-head>Role</x-table-head>
                <x-table-head>Actions</x-table-head>
            </x-table-row>
        </x-table-header>
        
        <x-table-body>
            @foreach($users as $user)
                <x-table-row>
                    <x-table-cell>{{ $user->name }}</x-table-cell>
                    <x-table-cell>{{ $user->email }}</x-table-cell>
                    <x-table-cell>{{ $user->role }}</x-table-cell>
                    <x-table-cell>
                        <x-button 
                            size="sm" 
                            variant="ghost"
                            wire:click="edit({{ $user->id }})"
                        >
                            Edit
                        </x-button>
                    </x-table-cell>
                </x-table-row>
            @endforeach
        </x-table-body>
    </x-table>
</x-card>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    users: [
        { id: 1, name: 'John Doe', email: 'john@example.com', role: 'Admin' },
        { id: 2, name: 'Jane Smith', email: 'jane@example.com', role: 'User' }
    ]
}">
    <x-table variant="striped" hover>
        <x-table-header>
            <x-table-row>
                <x-table-head>Name</x-table-head>
                <x-table-head>Email</x-table-head>
                <x-table-head>Role</x-table-head>
            </x-table-row>
        </x-table-header>
        
        <x-table-body>
            <template x-for="user in users" :key="user.id">
                <x-table-row>
                    <x-table-cell x-text="user.name"></x-table-cell>
                    <x-table-cell x-text="user.email"></x-table-cell>
                    <x-table-cell x-text="user.role"></x-table-cell>
                </x-table-row>
            </template>
        </x-table-body>
    </x-table>
</div>
```

## Accessibility

The Table component:
- Uses semantic HTML (`<table>`, `<thead>`, `<tbody>`, `<tr>`, `<th>`, `<td>`)
- Provides proper table structure
- Supports screen readers
- Maintains proper text contrast
- Responsive with horizontal scroll on small screens

