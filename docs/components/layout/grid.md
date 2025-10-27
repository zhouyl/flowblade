# Grid

CSS Grid layout component.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `columns` | string | `null` | Number of columns (1-12, none, subgrid) |
| `rows` | string | `null` | Number of rows (1-6, none, subgrid) |
| `gap` | string | `null` | Gap between items (0-16) |
| `gap-x` | string | `null` | Horizontal gap (0-16) |
| `gap-y` | string | `null` | Vertical gap (0-16) |
| `auto-flow` | string | `null` | Grid auto flow (row, col, dense, row-dense, col-dense) |

## Basic Usage

```blade
<x-grid columns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>
```

## Examples

### 2 Columns

```blade
<x-grid columns="2" gap="4">
    <div>Column 1</div>
    <div>Column 2</div>
</x-grid>
```

### 3 Columns

```blade
<x-grid columns="3" gap="6">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
    <div>Item 4</div>
    <div>Item 5</div>
    <div>Item 6</div>
</x-grid>
```

### 4 Columns

```blade
<x-grid columns="4" gap="4">
    @foreach($items as $item)
        <x-box p="4" shadow="md" rounded="lg">
            {{ $item->name }}
        </x-box>
    @endforeach
</x-grid>
```

### Different Gaps

```blade
<x-grid columns="3" gap-x="8" gap-y="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>
```

### Rows and Columns

```blade
<x-grid columns="3" rows="2" gap="4">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
</x-grid>
```

### Auto Flow

```blade
<x-grid columns="3" auto-flow="dense" gap="4">
    <div class="col-span-2">Wide item</div>
    <div>Item 2</div>
    <div>Item 3</div>
    <div class="col-span-2">Another wide item</div>
</x-grid>
```

## Common Patterns

### Card Grid

```blade
<x-grid columns="3" gap="6">
    @foreach($products as $product)
        <x-box p="6" shadow="lg" rounded="xl">
            <img src="{{ $product->image }}" class="w-full h-48 object-cover rounded-lg">
            <h3 class="mt-4 font-semibold">{{ $product->name }}</h3>
            <p class="mt-2 text-gray-600">{{ $product->price }}</p>
            <x-button class="mt-4 w-full">Add to Cart</x-button>
        </x-box>
    @endforeach
</x-grid>
```

### Dashboard Layout

```blade
<x-grid columns="4" gap="4">
    {{-- Stat Cards --}}
    <x-box p="6" shadow="md" rounded="lg">
        <div class="text-sm text-gray-600">Total Users</div>
        <div class="text-3xl font-bold mt-2">1,234</div>
    </x-box>
    
    <x-box p="6" shadow="md" rounded="lg">
        <div class="text-sm text-gray-600">Revenue</div>
        <div class="text-3xl font-bold mt-2">$12,345</div>
    </x-box>
    
    <x-box p="6" shadow="md" rounded="lg">
        <div class="text-sm text-gray-600">Orders</div>
        <div class="text-3xl font-bold mt-2">567</div>
    </x-box>
    
    <x-box p="6" shadow="md" rounded="lg">
        <div class="text-sm text-gray-600">Growth</div>
        <div class="text-3xl font-bold mt-2">+23%</div>
    </x-box>
</x-grid>
```

### Image Gallery

```blade
<x-grid columns="4" gap="2">
    @foreach($images as $image)
        <img 
            src="{{ $image }}" 
            class="w-full h-48 object-cover rounded cursor-pointer hover:opacity-75"
        >
    @endforeach
</x-grid>
```

### Form Layout

```blade
<x-grid columns="2" gap="4">
    <div>
        <label>First Name</label>
        <x-input />
    </div>
    
    <div>
        <label>Last Name</label>
        <x-input />
    </div>
    
    <div class="col-span-2">
        <label>Email</label>
        <x-input type="email" />
    </div>
    
    <div class="col-span-2">
        <label>Message</label>
        <x-textarea rows="4" />
    </div>
</x-grid>
```

### Responsive Grid

```blade
<x-grid 
    columns="1" 
    gap="4" 
    class="md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
>
    @foreach($items as $item)
        <x-box p="4" shadow="md" rounded="lg">
            {{ $item->name }}
        </x-box>
    @endforeach
</x-grid>
```

### Masonry-like Layout

```blade
<x-grid columns="3" auto-flow="dense" gap="4">
    <div class="row-span-2">Tall item</div>
    <div>Normal item</div>
    <div>Normal item</div>
    <div class="col-span-2">Wide item</div>
    <div>Normal item</div>
</x-grid>
```

