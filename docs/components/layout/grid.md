# Grid

CSS Grid layout component with comprehensive style props support. The Grid component provides a powerful grid layout system for building complex, responsive layouts with full control over columns, rows, gaps, and auto-flow behavior.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `auto-flow` | string | `null` | Grid auto flow (row, col, dense, row-dense, col-dense) |

### Grid-Specific Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `columns` / `templateColumns` | string | `null` | Number of columns (1-12, none, subgrid) |
| `rows` / `templateRows` | string | `null` | Number of rows (1-6, none, subgrid) |
| `gap` | string | `null` | Gap between items (0-96) |
| `gapX` | string | `null` | Horizontal gap (0-96) |
| `gapY` | string | `null` | Vertical gap (0-96) |

### Style Props

Grid component supports all style props from the HasStyleProps trait, including spacing, sizing, colors, borders, and more. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-grid columns="3" gap="4">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-grid>
```

## Examples

### 2 Columns

```blade
<x-grid columns="2" gap="4">
    <x-box>Column 1</x-box>
    <x-box>Column 2</x-box>
</x-grid>
```

### 3 Columns

```blade
<x-grid columns="3" gap="6">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
    <x-box>Item 4</x-box>
    <x-box>Item 5</x-box>
    <x-box>Item 6</x-box>
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
<x-grid columns="3" gapX="8" gapY="4">
    <x-box>Item 1</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
</x-grid>
```

### Rows and Columns

```blade
<x-grid columns="3" rows="2" gap="4">
    <x-box>1</x-box>
    <x-box>2</x-box>
    <x-box>3</x-box>
    <x-box>4</x-box>
    <x-box>5</x-box>
    <x-box>6</x-box>
</x-grid>
```

### Auto Flow

```blade
<x-grid columns="3" auto-flow="dense" gap="4">
    <x-box class="col-span-2">Wide item</x-box>
    <x-box>Item 2</x-box>
    <x-box>Item 3</x-box>
    <x-box class="col-span-2">Another wide item</x-box>
</x-grid>
```

## Common Patterns

### Card Grid

```blade
<x-grid columns="3" gap="6">
    @foreach($products as $product)
        <x-box p="6" shadow="lg" rounded="xl">
            <x-box as="img" src="{{ $product->image }}" w="full" h="48" class="object-cover rounded-lg" />
            <x-heading as="h3" mt="4" fontWeight="semibold">{{ $product->name }}</x-heading>
            <x-text mt="2" color="gray.600">{{ $product->price }}</x-text>
            <x-button mt="4" w="full">Add to Cart</x-button>
        </x-box>
    @endforeach
</x-grid>
```

### Dashboard Layout

```blade
<x-grid columns="4" gap="4">
    {{-- Stat Cards --}}
    <x-box p="6" shadow="md" rounded="lg">
        <x-text fontSize="sm" color="gray.600">Total Users</x-text>
        <x-text fontSize="3xl" fontWeight="bold" mt="2">1,234</x-text>
    </x-box>

    <x-box p="6" shadow="md" rounded="lg">
        <x-text fontSize="sm" color="gray.600">Revenue</x-text>
        <x-text fontSize="3xl" fontWeight="bold" mt="2">$12,345</x-text>
    </x-box>

    <x-box p="6" shadow="md" rounded="lg">
        <x-text fontSize="sm" color="gray.600">Orders</x-text>
        <x-text fontSize="3xl" fontWeight="bold" mt="2">567</x-text>
    </x-box>

    <x-box p="6" shadow="md" rounded="lg">
        <x-text fontSize="sm" color="gray.600">Growth</x-text>
        <x-text fontSize="3xl" fontWeight="bold" mt="2">+23%</x-text>
    </x-box>
</x-grid>
```

### Image Gallery

```blade
<x-grid columns="4" gap="2">
    @foreach($images as $image)
        <x-box
            as="img"
            src="{{ $image }}"
            w="full"
            h="48"
            class="object-cover rounded cursor-pointer hover:opacity-75"
        />
    @endforeach
</x-grid>
```

### Form Layout

```blade
<x-grid columns="2" gap="4">
    <x-box>
        <x-box as="label">First Name</x-box>
        <x-input />
    </x-box>

    <x-box>
        <x-box as="label">Last Name</x-box>
        <x-input />
    </x-box>

    <x-box class="col-span-2">
        <x-box as="label">Email</x-box>
        <x-input type="email" />
    </x-box>

    <x-box class="col-span-2">
        <x-box as="label">Message</x-box>
        <x-textarea rows="4" />
    </x-box>
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
    <x-box class="row-span-2">Tall item</x-box>
    <x-box>Normal item</x-box>
    <x-box>Normal item</x-box>
    <x-box class="col-span-2">Wide item</x-box>
    <x-box>Normal item</x-box>
</x-grid>
```

