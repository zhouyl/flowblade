# SimpleGrid

Simplified grid layout with responsive columns or auto-fit behavior. SimpleGrid provides an easy way to create responsive grid layouts with support for fixed columns or auto-fit behavior.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `columns` | string | `null` | Number of columns (1-12) |
| `min-child-width` | string | `null` | Minimum width for auto-fit grid (e.g., '200px', '16rem') |
| `spacing` | string | `null` | Gap between items (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `spacing-x` | string | `null` | Horizontal gap |
| `spacing-y` | string | `null` | Vertical gap |

### Style Props

SimpleGrid supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-simple-grid columns="3" spacing="md">
    <x-text>Item 1</x-text>
    <x-text>Item 2</x-text>
    <x-text>Item 3</x-text>
</x-simple-grid>
```

## Examples

### Fixed Columns

```blade
<x-simple-grid columns="4" spacing="lg">
    @foreach($items as $item)
        <x-box p="4" shadow="md" rounded="lg">
            {{ $item->name }}
        </x-box>
    @endforeach
</x-simple-grid>
```

### Auto-Fit Grid

```blade
{{-- Automatically fits as many columns as possible with minimum 200px width --}}
<x-simple-grid min-child-width="200px" spacing="md">
    @foreach($products as $product)
        <x-box p="6" shadow="lg" rounded="xl">
            <x-box as="img" src="{{ $product->image }}" w="full" h="48" class="object-cover rounded-lg" />
            <x-heading as="h3" mt="4" fontWeight="semibold">{{ $product->name }}</x-heading>
            <x-text mt="2" color="gray.600">${{ $product->price }}</x-text>
        </x-box>
    @endforeach
</x-simple-grid>
```

### Different Spacing

```blade
<x-simple-grid columns="3" spacing-x="lg" spacing-y="sm">
    <x-text>Item 1</x-text>
    <x-text>Item 2</x-text>
    <x-text>Item 3</x-text>
</x-simple-grid>
```

## Common Patterns

### Product Grid

```blade
<x-simple-grid min-child-width="250px" spacing="lg">
    @foreach($products as $product)
        <x-box shadow="lg" rounded="xl" overflow="hidden">
            <x-box as="img" src="{{ $product->image }}" w="full" h="56" class="object-cover" />

            <x-vstack spacing="sm" p="6">
                <x-heading as="h3" fontSize="lg" fontWeight="bold">{{ $product->name }}</x-heading>
                <x-text color="gray.600">{{ $product->description }}</x-text>
                <x-text fontSize="2xl" fontWeight="bold" color="primary.600">${{ $product->price }}</x-text>
                <x-button color="primary" w="full">Add to Cart</x-button>
            </x-vstack>
        </x-box>
    @endforeach
</x-simple-grid>
```

### Feature Grid

```blade
<x-simple-grid columns="3" spacing="xl">
    <x-vstack spacing="md" align="center" class="text-center">
        <x-icon name="heroicons:rocket-launch" size="48px" color="primary" />
        <h3 class="text-xl font-bold">Fast</h3>
        <p class="text-gray-600">Lightning fast performance</p>
    </x-vstack>
    
    <x-vstack spacing="md" align="center" class="text-center">
        <x-icon name="heroicons:shield-check" size="48px" color="success" />
        <h3 class="text-xl font-bold">Secure</h3>
        <p class="text-gray-600">Bank-level security</p>
    </x-vstack>
    
    <x-vstack spacing="md" align="center" class="text-center">
        <x-icon name="heroicons:heart" size="48px" color="danger" />
        <h3 class="text-xl font-bold">Loved</h3>
        <p class="text-gray-600">Trusted by thousands</p>
    </x-vstack>
</x-simple-grid>
```

### Image Gallery

```blade
<x-simple-grid min-child-width="200px" spacing="sm">
    @foreach($images as $image)
        <x-aspect-ratio ratio="1/1">
            <img 
                src="{{ $image }}" 
                class="w-full h-full object-cover rounded-lg cursor-pointer hover:opacity-75 transition"
            >
        </x-aspect-ratio>
    @endforeach
</x-simple-grid>
```

### Dashboard Cards

```blade
<x-simple-grid columns="4" spacing="md">
    <x-box p="6" shadow="md" rounded="lg">
        <x-vstack spacing="xs">
            <span class="text-sm text-gray-600">Total Users</span>
            <span class="text-3xl font-bold">1,234</span>
            <span class="text-sm text-green-600">+12%</span>
        </x-vstack>
    </x-box>
    
    <x-box p="6" shadow="md" rounded="lg">
        <x-vstack spacing="xs">
            <span class="text-sm text-gray-600">Revenue</span>
            <span class="text-3xl font-bold">$12,345</span>
            <span class="text-sm text-green-600">+8%</span>
        </x-vstack>
    </x-box>
    
    {{-- More cards... --}}
</x-simple-grid>
```

### Blog Posts

```blade
<x-simple-grid min-child-width="300px" spacing="lg">
    @foreach($posts as $post)
        <article>
            <img src="{{ $post->image }}" class="w-full h-48 object-cover rounded-t-lg">
            
            <x-box p="6" shadow="md" rounded="b-lg">
                <x-vstack spacing="sm">
                    <span class="text-xs text-gray-500">{{ $post->date }}</span>
                    <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->excerpt }}</p>
                    <x-button variant="link" class="self-start">Read More →</x-button>
                </x-vstack>
            </x-box>
        </article>
    @endforeach
</x-simple-grid>
```

### Team Members

```blade
<x-simple-grid columns="4" spacing="lg">
    @foreach($team as $member)
        <x-vstack spacing="md" align="center" class="text-center">
            <img 
                src="{{ $member->avatar }}" 
                class="w-32 h-32 rounded-full object-cover"
            >
            <div>
                <h3 class="font-bold">{{ $member->name }}</h3>
                <p class="text-sm text-gray-600">{{ $member->role }}</p>
            </div>
            
            <x-hstack spacing="sm">
                <a href="{{ $member->twitter }}">
                    <x-icon name="fa-brands:twitter" size="20px" />
                </a>
                <a href="{{ $member->linkedin }}">
                    <x-icon name="fa-brands:linkedin" size="20px" />
                </a>
            </x-hstack>
        </x-vstack>
    @endforeach
</x-simple-grid>
```

## Tips

- Use `columns` for fixed grid layouts
- Use `min-child-width` for responsive grids that automatically adjust
- `min-child-width` is perfect for card grids that should adapt to screen size
- Combine with `spacing` props for consistent gaps

