# Tag

Tag component for labels, categories, and keywords. Tag provides a flexible way to display tags with support for various sizes, colors, variants, and optional close buttons.

## Basic Usage

```blade
<x-tag>Default</x-tag>
<x-tag color="primary">Primary</x-tag>
<x-tag color="success">Success</x-tag>
<x-tag color="danger">Danger</x-tag>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `color` | `string` | `'gray'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info`, `gray` |
| `variant` | `string` | `'subtle'` | Variant: `solid`, `subtle`, `outline` |
| `icon` | `string` | `null` | Icon name |
| `closable` | `boolean` | `false` | Show close button |

### Style Props

Tag supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Colors

```blade
<x-tag color="primary">Primary</x-tag>
<x-tag color="secondary">Secondary</x-tag>
<x-tag color="success">Success</x-tag>
<x-tag color="warning">Warning</x-tag>
<x-tag color="danger">Danger</x-tag>
<x-tag color="info">Info</x-tag>
<x-tag color="gray">Gray</x-tag>
```

## Variants

### Subtle (Default)

```blade
<x-tag variant="subtle" color="primary">Subtle</x-tag>
<x-tag variant="subtle" color="success">Success</x-tag>
<x-tag variant="subtle" color="danger">Danger</x-tag>
```

### Solid

```blade
<x-tag variant="solid" color="primary">Solid</x-tag>
<x-tag variant="solid" color="success">Success</x-tag>
<x-tag variant="solid" color="danger">Danger</x-tag>
```

### Outline

```blade
<x-tag variant="outline" color="primary">Outline</x-tag>
<x-tag variant="outline" color="success">Success</x-tag>
<x-tag variant="outline" color="danger">Danger</x-tag>
```

## Sizes

```blade
<x-tag size="xs">Extra Small</x-tag>
<x-tag size="sm">Small</x-tag>
<x-tag size="md">Medium</x-tag>
<x-tag size="lg">Large</x-tag>
<x-tag size="xl">Extra Large</x-tag>
```

## With Icons

```blade
<x-tag icon="heroicons:tag">Tagged</x-tag>
<x-tag icon="heroicons:star" color="warning">Featured</x-tag>
<x-tag icon="heroicons:fire" color="danger">Hot</x-tag>
<x-tag icon="heroicons:sparkles" color="info">New</x-tag>
```

## Closable Tags

```blade
<x-tag closable>Closable Tag</x-tag>
<x-tag closable color="primary">Primary</x-tag>
<x-tag closable color="success">Success</x-tag>
```

## Common Patterns

### Article Tags

```blade
<x-wrap gap="2">
    <x-tag size="sm" color="primary">Technology</x-tag>
    <x-tag size="sm" color="success">Tutorial</x-tag>
    <x-tag size="sm" color="info">Laravel</x-tag>
    <x-tag size="sm" color="warning">PHP</x-tag>
</x-wrap>
```

### Product Categories

```blade
<x-wrap gap="2">
    <x-tag variant="outline" color="primary">Electronics</x-tag>
    <x-tag variant="outline" color="success">In Stock</x-tag>
    <x-tag variant="outline" color="danger">Sale</x-tag>
    <x-tag variant="outline" color="info">New Arrival</x-tag>
</x-wrap>
```

### Status Tags

```blade
<x-flex gap="2">
    <x-tag variant="solid" color="success" icon="heroicons:check-circle">Completed</x-tag>
    <x-tag variant="solid" color="warning" icon="heroicons:clock">Pending</x-tag>
    <x-tag variant="solid" color="danger" icon="heroicons:x-circle">Failed</x-tag>
</x-flex>
```

### Skill Tags

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Skills</x-heading>
    </x-card-header>

    <x-card-body>
        <x-wrap gap="2">
            <x-tag color="primary">Laravel</x-tag>
            <x-tag color="primary">PHP</x-tag>
            <x-tag color="success">Vue.js</x-tag>
            <x-tag color="success">JavaScript</x-tag>
            <x-tag color="info">Tailwind CSS</x-tag>
            <x-tag color="warning">MySQL</x-tag>
        </x-wrap>
    </x-card-body>
</x-card>
```

### Filter Tags

```blade
<div class="flex items-center gap-2">
    <x-text weight="medium">Filters:</x-text>
    <x-tag closable color="primary">Category: Tech</x-tag>
    <x-tag closable color="success">Status: Active</x-tag>
    <x-tag closable color="info">Date: This Week</x-tag>
</div>
```

### User Roles

```blade
<x-table variant="striped">
    <x-table-header>
        <x-table-row>
            <x-table-head>Name</x-table-head>
            <x-table-head>Email</x-table-head>
            <x-table-head>Roles</x-table-head>
        </x-table-row>
    </x-table-header>
    
    <x-table-body>
        <x-table-row>
            <x-table-cell>John Doe</x-table-cell>
            <x-table-cell>john@example.com</x-table-cell>
            <x-table-cell>
                <div class="flex gap-1">
                    <x-tag size="sm" variant="solid" color="primary">Admin</x-tag>
                    <x-tag size="sm" variant="solid" color="success">Editor</x-tag>
                </div>
            </x-table-cell>
        </x-table-row>
        <x-table-row>
            <x-table-cell>Jane Smith</x-table-cell>
            <x-table-cell>jane@example.com</x-table-cell>
            <x-table-cell>
                <x-tag size="sm" variant="solid" color="gray">User</x-tag>
            </x-table-cell>
        </x-table-row>
    </x-table-body>
</x-table>
```

### Blog Post Meta

```blade
<x-card>
    <x-card-body>
        <x-heading size="xl" class="mb-2">
            Getting Started with Laravel Blade Components
        </x-heading>
        
        <div class="flex items-center gap-3 mb-4">
            <x-avatar size="sm" name="John Doe" />
            <div>
                <x-text size="sm" weight="medium">John Doe</x-text>
                <x-text size="xs" color="gray">Oct 27, 2024</x-text>
            </div>
        </div>
        
        <div class="flex flex-wrap gap-2 mb-4">
            <x-tag size="sm" icon="heroicons:tag" color="primary">Laravel</x-tag>
            <x-tag size="sm" icon="heroicons:tag" color="success">Tutorial</x-tag>
            <x-tag size="sm" icon="heroicons:tag" color="info">Blade</x-tag>
        </div>
        
        <x-text color="gray">
            Learn how to create reusable Blade components in Laravel...
        </x-text>
    </x-card-body>
</x-card>
```

### Issue Labels

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Issue #123</x-heading>
            <x-badge color="success">Open</x-badge>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-heading size="md" class="mb-2">
            Add dark mode support
        </x-heading>
        
        <div class="flex flex-wrap gap-2 mb-4">
            <x-tag size="sm" color="primary">enhancement</x-tag>
            <x-tag size="sm" color="success">good first issue</x-tag>
            <x-tag size="sm" color="warning">help wanted</x-tag>
        </div>
        
        <x-text color="gray">
            We should add dark mode support to improve user experience...
        </x-text>
    </x-card-body>
</x-card>
```

### E-commerce Product

```blade
<x-card>
    <x-card-body class="p-0">
        <img src="/product.jpg" class="w-full h-48 object-cover" />
        
        <div class="p-4">
            <div class="flex gap-2 mb-3">
                <x-tag size="xs" variant="solid" color="danger">Sale</x-tag>
                <x-tag size="xs" variant="solid" color="info">New</x-tag>
                <x-tag size="xs" variant="outline" color="success">In Stock</x-tag>
            </div>
            
            <x-heading size="lg" class="mb-2">Product Name</x-heading>
            
            <div class="flex flex-wrap gap-1 mb-3">
                <x-tag size="xs">Electronics</x-tag>
                <x-tag size="xs">Gadgets</x-tag>
                <x-tag size="xs">Tech</x-tag>
            </div>
            
            <div class="flex items-center justify-between">
                <x-heading size="xl" color="primary">$79.99</x-heading>
                <x-button>Add to Cart</x-button>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Search Results

```blade
<div class="space-y-4">
    <div class="flex items-center gap-2 mb-4">
        <x-text weight="medium">Active Filters:</x-text>
        <x-tag closable size="sm" color="primary">Category: Tech</x-tag>
        <x-tag closable size="sm" color="success">Price: $0-$100</x-tag>
        <x-tag closable size="sm" color="info">Rating: 4+</x-tag>
    </div>
    
    <x-card>
        <x-card-body>
            <x-heading size="lg" class="mb-2">Search Result Title</x-heading>
            <div class="flex gap-2 mb-2">
                <x-tag size="xs">Technology</x-tag>
                <x-tag size="xs">Tutorial</x-tag>
            </div>
            <x-text color="gray">Description of the search result...</x-text>
        </x-card-body>
    </x-card>
</div>
```

## Livewire Integration

```blade
<div>
    <div class="flex flex-wrap gap-2">
        @foreach($tags as $tag)
            <x-tag 
                closable 
                :color="$tag->color"
                @tag-removed="$wire.removeTag({{ $tag->id }})"
            >
                {{ $tag->name }}
            </x-tag>
        @endforeach
    </div>
</div>
```

## Alpine.js Integration

```blade
<div x-data="{ 
    tags: ['Laravel', 'PHP', 'Vue.js', 'Tailwind'],
    removeTag(index) {
        this.tags.splice(index, 1);
    }
}">
    <div class="flex flex-wrap gap-2">
        <template x-for="(tag, index) in tags" :key="index">
            <x-tag 
                closable 
                color="primary"
                @tag-removed="removeTag(index)"
                x-text="tag"
            ></x-tag>
        </template>
    </div>
</div>
```

## Accessibility

The Tag component:
- Uses semantic HTML
- Provides clear visual distinction
- Maintains proper color contrast
- Works with screen readers
- Supports keyboard navigation for closable tags
- Emits events for tag removal

