# Breadcrumb

Breadcrumb navigation component for showing the current page's location within a navigational hierarchy. Breadcrumb provides a flexible way to display navigation paths with support for various sizes and separators. Perfect for website navigation, product hierarchies, and multi-step processes.

## Basic Usage

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
    <x-breadcrumb-item current>Laptop</x-breadcrumb-item>
</x-breadcrumb>
```

## Props

### Breadcrumb

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `separator` | `string` | `'/'` | Separator character or icon |

### BreadcrumbItem

Component for displaying individual breadcrumb items within a Breadcrumb. Each item represents a level in the navigation hierarchy. Perfect for creating navigation paths and showing page location context.

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `null` | Link URL (if null, item is not clickable) |
| `active` | `boolean` | `false` | Mark as active/current page |
| `icon` | `string` | `null` | Icon name |
| `current` | `bool` | `false` | Whether this is the current page |

BreadcrumbItem also supports all common style props for flexible styling.

#### BreadcrumbItem Examples

**Navigation Breadcrumb**

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
    <x-breadcrumb-item href="/products/electronics">Electronics</x-breadcrumb-item>
    <x-breadcrumb-item active>Laptop</x-breadcrumb-item>
</x-breadcrumb>
```

**With Icons**

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">
        <div class="flex items-center gap-1">
            <x-icon name="heroicons:home" class="w-4 h-4" />
            Home
        </div>
    </x-breadcrumb-item>
    <x-breadcrumb-item href="/docs">Documentation</x-breadcrumb-item>
    <x-breadcrumb-item active>Components</x-breadcrumb-item>
</x-breadcrumb>
```

**E-commerce Breadcrumb**

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop">Shop</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop/mens">Men's</x-breadcrumb-item>
    <x-breadcrumb-item href="/shop/mens/shoes">Shoes</x-breadcrumb-item>
    <x-breadcrumb-item active>Running Shoes</x-breadcrumb-item>
</x-breadcrumb>
```

**Blog Breadcrumb**

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog">Blog</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog/category/technology">Technology</x-breadcrumb-item>
    <x-breadcrumb-item active>Getting Started with Laravel</x-breadcrumb-item>
</x-breadcrumb>
```

### Style Props

Breadcrumb and BreadcrumbItem support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Sizes

```blade
<x-breadcrumb size="xs">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item current>Page</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb size="sm">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item current>Page</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb size="md">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item current>Page</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb size="lg">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item current>Page</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb size="xl">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item current>Page</x-breadcrumb-item>
</x-breadcrumb>
```

## Custom Separator

```blade
<x-breadcrumb separator=">">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/docs">Docs</x-breadcrumb-item>
    <x-breadcrumb-item current>Components</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb separator="•">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog">Blog</x-breadcrumb-item>
    <x-breadcrumb-item current>Article</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb separator="→">
    <x-breadcrumb-item href="/">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
    <x-breadcrumb-item current>Details</x-breadcrumb-item>
</x-breadcrumb>
```

## With Icons

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/" icon="heroicons:home">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/products" icon="heroicons:shopping-bag">Products</x-breadcrumb-item>
    <x-breadcrumb-item current icon="heroicons:computer-desktop">Laptop</x-breadcrumb-item>
</x-breadcrumb>
```

## Common Patterns

### E-commerce Product Page

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/" icon="heroicons:home">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/categories">Categories</x-breadcrumb-item>
    <x-breadcrumb-item href="/categories/electronics">Electronics</x-breadcrumb-item>
    <x-breadcrumb-item href="/categories/electronics/computers">Computers</x-breadcrumb-item>
    <x-breadcrumb-item current>MacBook Pro 16"</x-breadcrumb-item>
</x-breadcrumb>
```

### Blog Post

```blade
<x-breadcrumb separator="→">
    <x-breadcrumb-item href="/" icon="heroicons:home">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog">Blog</x-breadcrumb-item>
    <x-breadcrumb-item href="/blog/category/technology">Technology</x-breadcrumb-item>
    <x-breadcrumb-item current>Getting Started with Laravel</x-breadcrumb-item>
</x-breadcrumb>
```

### Documentation

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/docs" icon="heroicons:book-open">Documentation</x-breadcrumb-item>
    <x-breadcrumb-item href="/docs/components">Components</x-breadcrumb-item>
    <x-breadcrumb-item href="/docs/components/navigation">Navigation</x-breadcrumb-item>
    <x-breadcrumb-item current>Breadcrumb</x-breadcrumb-item>
</x-breadcrumb>
```

### Admin Panel

```blade
<x-breadcrumb separator=">">
    <x-breadcrumb-item href="/admin" icon="heroicons:cog-6-tooth">Admin</x-breadcrumb-item>
    <x-breadcrumb-item href="/admin/users">Users</x-breadcrumb-item>
    <x-breadcrumb-item href="/admin/users/{{ $user->id }}">{{ $user->name }}</x-breadcrumb-item>
    <x-breadcrumb-item current>Edit Profile</x-breadcrumb-item>
</x-breadcrumb>
```

### File Manager

```blade
<x-breadcrumb separator="/">
    <x-breadcrumb-item href="/files" icon="heroicons:folder">Files</x-breadcrumb-item>
    <x-breadcrumb-item href="/files/documents">Documents</x-breadcrumb-item>
    <x-breadcrumb-item href="/files/documents/projects">Projects</x-breadcrumb-item>
    <x-breadcrumb-item current>2024</x-breadcrumb-item>
</x-breadcrumb>
```

### Multi-Step Form

```blade
<x-breadcrumb separator="→">
    <x-breadcrumb-item href="/checkout/cart" icon="heroicons:shopping-cart">Cart</x-breadcrumb-item>
    <x-breadcrumb-item href="/checkout/shipping">Shipping</x-breadcrumb-item>
    <x-breadcrumb-item current>Payment</x-breadcrumb-item>
</x-breadcrumb>
```

### Settings Page

```blade
<x-breadcrumb>
    <x-breadcrumb-item href="/settings" icon="heroicons:cog-6-tooth">Settings</x-breadcrumb-item>
    <x-breadcrumb-item href="/settings/account">Account</x-breadcrumb-item>
    <x-breadcrumb-item current>Security</x-breadcrumb-item>
</x-breadcrumb>
```

### Dynamic Breadcrumbs from Route

```php
// Controller
public function show(Product $product)
{
    $breadcrumbs = [
        ['label' => 'Home', 'url' => route('home'), 'icon' => 'heroicons:home'],
        ['label' => 'Products', 'url' => route('products.index')],
        ['label' => $product->category->name, 'url' => route('categories.show', $product->category)],
        ['label' => $product->name, 'current' => true],
    ];
    
    return view('products.show', compact('product', 'breadcrumbs'));
}
```

```blade
<x-breadcrumb>
    @foreach($breadcrumbs as $crumb)
        <x-breadcrumb-item 
            :href="$crumb['url'] ?? null"
            :icon="$crumb['icon'] ?? null"
            :current="$crumb['current'] ?? false"
        >
            {{ $crumb['label'] }}
        </x-breadcrumb-item>
    @endforeach
</x-breadcrumb>
```

### With Page Header

```blade
<div class="mb-6">
    <x-breadcrumb class="mb-4">
        <x-breadcrumb-item href="/" icon="heroicons:home">Home</x-breadcrumb-item>
        <x-breadcrumb-item href="/products">Products</x-breadcrumb-item>
        <x-breadcrumb-item current>{{ $product->name }}</x-breadcrumb-item>
    </x-breadcrumb>
    
    <x-heading size="2xl">{{ $product->name }}</x-heading>
</div>
```

### Responsive Breadcrumb

```blade
{{-- Show full breadcrumb on desktop, simplified on mobile --}}
<x-breadcrumb class="hidden md:flex">
    <x-breadcrumb-item href="/" icon="heroicons:home">Home</x-breadcrumb-item>
    <x-breadcrumb-item href="/categories">Categories</x-breadcrumb-item>
    <x-breadcrumb-item href="/categories/electronics">Electronics</x-breadcrumb-item>
    <x-breadcrumb-item current>Product</x-breadcrumb-item>
</x-breadcrumb>

<x-breadcrumb class="md:hidden">
    <x-breadcrumb-item href="/categories/electronics">← Back</x-breadcrumb-item>
</x-breadcrumb>
```

### With Card

```blade
<x-card>
    <x-card-header>
        <x-breadcrumb size="sm">
            <x-breadcrumb-item href="/admin">Admin</x-breadcrumb-item>
            <x-breadcrumb-item href="/admin/posts">Posts</x-breadcrumb-item>
            <x-breadcrumb-item current>Edit</x-breadcrumb-item>
        </x-breadcrumb>
    </x-card-header>
    
    <x-card-body>
        <!-- Form content -->
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<div>
    <x-breadcrumb>
        @foreach($this->breadcrumbs as $crumb)
            <x-breadcrumb-item 
                :href="$crumb['url'] ?? null"
                :current="$loop->last"
            >
                {{ $crumb['label'] }}
            </x-breadcrumb-item>
        @endforeach
    </x-breadcrumb>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class ProductShow extends Component
{
    public Product $product;
    
    public function getBreadcrumbsProperty()
    {
        return [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Products', 'url' => route('products.index')],
            ['label' => $this->product->category->name, 'url' => route('categories.show', $this->product->category)],
            ['label' => $this->product->name],
        ];
    }
    
    public function render()
    {
        return view('livewire.product-show');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    breadcrumbs: [
        { label: 'Home', url: '/', icon: 'heroicons:home' },
        { label: 'Products', url: '/products' },
        { label: 'Laptop', current: true }
    ]
}">
    <x-breadcrumb>
        <template x-for="(crumb, index) in breadcrumbs" :key="index">
            <x-breadcrumb-item 
                x-bind:href="crumb.url"
                x-bind:icon="crumb.icon"
                x-bind:current="crumb.current || false"
                x-text="crumb.label"
            ></x-breadcrumb-item>
        </template>
    </x-breadcrumb>
</div>
```

## Accessibility

### Breadcrumb
The Breadcrumb component:
- Uses semantic `<nav>` and `<ol>` elements
- Includes `aria-label="Breadcrumb"` for screen readers
- Marks current page with `aria-current="page"`
- Hides separator from screen readers with `aria-hidden="true"`
- Provides clear visual hierarchy
- Supports keyboard navigation through links (Tab, Enter)
- Announces breadcrumb structure to screen readers
- Provides proper link semantics for navigation

### BreadcrumbItem
The BreadcrumbItem component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides clear navigation hierarchy
- Marks current page with `aria-current="page"`
- Announces breadcrumb item role to screen readers
- Supports proper link semantics

