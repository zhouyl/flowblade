# Wrap

Flex layout that automatically wraps items to the next line.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `spacing` | string | `null` | Gap between items (2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl) |
| `spacing-x` | string | `null` | Horizontal gap |
| `spacing-y` | string | `null` | Vertical gap |
| `align` | string | `null` | Align items (start, center, end, stretch, baseline) |
| `justify` | string | `null` | Justify content (start, center, end, between, around, evenly) |

## Basic Usage

```blade
<x-wrap spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
    <div>Item 4</div>
</x-wrap>
```

## Examples

### Tag List

```blade
<x-wrap spacing="sm">
    @foreach($tags as $tag)
        <x-badge>{{ $tag }}</x-badge>
    @endforeach
</x-wrap>
```

### Button Group

```blade
<x-wrap spacing="md">
    <x-button>Action 1</x-button>
    <x-button>Action 2</x-button>
    <x-button>Action 3</x-button>
    <x-button>Action 4</x-button>
    <x-button>Action 5</x-button>
</x-wrap>
```

### With Alignment

```blade
<x-wrap spacing="md" align="center" justify="center">
    <div class="w-32 h-32 bg-blue-500 rounded"></div>
    <div class="w-32 h-32 bg-green-500 rounded"></div>
    <div class="w-32 h-32 bg-red-500 rounded"></div>
</x-wrap>
```

## Common Patterns

### Filter Tags

```blade
<x-box p="4" bg="gray" rounded="lg">
    <x-vstack spacing="sm">
        <span class="text-sm font-medium">Filters:</span>
        
        <x-wrap spacing="xs">
            @foreach($activeFilters as $filter)
                <x-hstack 
                    spacing="xs" 
                    align="center" 
                    class="px-3 py-1 bg-white rounded-full text-sm"
                >
                    <span>{{ $filter }}</span>
                    <button wire:click="removeFilter('{{ $filter }}')">
                        <x-icon name="heroicons:x-mark" size="16px" />
                    </button>
                </x-hstack>
            @endforeach
        </x-wrap>
    </x-vstack>
</x-box>
```

### Skill Badges

```blade
<x-vstack spacing="md">
    <h3 class="font-bold">Skills</h3>
    
    <x-wrap spacing="sm">
        @foreach($skills as $skill)
            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                {{ $skill }}
            </span>
        @endforeach
    </x-wrap>
</x-vstack>
```

### Social Links

```blade
<x-wrap spacing="md" justify="center">
    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">
        <x-icon name="fa-brands:facebook" />
    </a>
    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">
        <x-icon name="fa-brands:twitter" />
    </a>
    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">
        <x-icon name="fa-brands:instagram" />
    </a>
    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">
        <x-icon name="fa-brands:linkedin" />
    </a>
</x-wrap>
```

### Responsive Cards

```blade
<x-wrap spacing="lg">
    @foreach($items as $item)
        <x-box p="6" shadow="md" rounded="lg" class="w-64">
            <x-vstack spacing="sm">
                <h3 class="font-bold">{{ $item->title }}</h3>
                <p class="text-gray-600">{{ $item->description }}</p>
                <x-button size="sm">Learn More</x-button>
            </x-vstack>
        </x-box>
    @endforeach
</x-wrap>
```

### Breadcrumbs

```blade
<x-wrap spacing="xs" align="center">
    <a href="/" class="text-blue-600 hover:underline">Home</a>
    <x-icon name="heroicons:chevron-right" size="16px" class="text-gray-400" />
    <a href="/products" class="text-blue-600 hover:underline">Products</a>
    <x-icon name="heroicons:chevron-right" size="16px" class="text-gray-400" />
    <span class="text-gray-600">Current Page</span>
</x-wrap>
```

### Action Buttons

```blade
<x-wrap spacing="sm" justify="end">
    <x-button variant="outline" size="sm">Cancel</x-button>
    <x-button variant="outline" size="sm">Save Draft</x-button>
    <x-button color="primary" size="sm">Publish</x-button>
</x-wrap>
```

### Image Thumbnails

```blade
<x-wrap spacing="md">
    @foreach($images as $image)
        <img 
            src="{{ $image }}" 
            class="w-24 h-24 object-cover rounded-lg cursor-pointer hover:opacity-75"
        >
    @endforeach
</x-wrap>
```

### Category Pills

```blade
<x-wrap spacing="sm">
    @foreach($categories as $category)
        <a 
            href="/category/{{ $category->slug }}" 
            class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-full text-sm font-medium transition"
        >
            {{ $category->name }}
        </a>
    @endforeach
</x-wrap>
```

## Tips

- Perfect for tags, badges, and chips that need to wrap
- Use `spacing-x` and `spacing-y` for different horizontal and vertical gaps
- Combine with `justify` for alignment control
- Great for responsive layouts that adapt to content width

