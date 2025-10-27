# Group

Wrapper component that enables Tailwind's group hover/focus states for child elements.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |

## Basic Usage

```blade
<x-group>
    <div>Hover over this group to see effects on children</div>
</x-group>
```

## Examples

### Hover Effects

```blade
<x-group class="p-6 border rounded-lg cursor-pointer">
    <h3 class="font-bold group-hover:text-blue-600 transition">Card Title</h3>
    <p class="text-gray-600 group-hover:text-gray-900 transition">
        Hover over the card to see the text color change
    </p>
</x-group>
```

### Image Card with Overlay

```blade
<x-group class="relative overflow-hidden rounded-lg cursor-pointer">
    <img src="/image.jpg" class="w-full h-64 object-cover group-hover:scale-110 transition duration-300">
    
    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition">
        <x-absolute-center>
            <x-button class="opacity-0 group-hover:opacity-100 transition">
                View Details
            </x-button>
        </x-absolute-center>
    </div>
</x-group>
```

## Common Patterns

### Card with Hover Effect

```blade
<x-group class="p-6 border rounded-lg hover:shadow-lg transition cursor-pointer">
    <x-vstack spacing="md">
        <x-icon 
            name="heroicons:star" 
            size="32px" 
            class="text-gray-400 group-hover:text-yellow-500 transition"
        />
        <h3 class="text-xl font-bold group-hover:text-blue-600 transition">
            Feature Title
        </h3>
        <p class="text-gray-600">
            Feature description goes here
        </p>
        <x-button 
            variant="link" 
            class="self-start opacity-0 group-hover:opacity-100 transition"
        >
            Learn More →
        </x-button>
    </x-vstack>
</x-group>
```

### Navigation Link

```blade
<x-group as="a" href="/page" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100">
    <x-icon 
        name="heroicons:home" 
        class="text-gray-600 group-hover:text-blue-600 transition"
    />
    <span class="group-hover:text-blue-600 transition">Home</span>
    <x-icon 
        name="heroicons:chevron-right" 
        class="ml-auto text-gray-400 opacity-0 group-hover:opacity-100 transition"
    />
</x-group>
```

### Product Card

```blade
<x-group class="border rounded-lg overflow-hidden hover:shadow-xl transition cursor-pointer">
    <div class="relative overflow-hidden">
        <img 
            src="/product.jpg" 
            class="w-full h-48 object-cover group-hover:scale-105 transition duration-300"
        >
        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition">
            <x-button size="sm" rounded="full">
                <x-icon name="heroicons:heart" />
            </x-button>
        </div>
    </div>
    
    <x-vstack spacing="sm" class="p-4">
        <h3 class="font-bold group-hover:text-blue-600 transition">Product Name</h3>
        <p class="text-gray-600">$99.99</p>
        <x-button 
            color="primary" 
            class="w-full opacity-0 group-hover:opacity-100 transition"
        >
            Add to Cart
        </x-button>
    </x-vstack>
</x-group>
```

### List Item

```blade
<x-group class="flex items-center gap-4 p-4 border-b hover:bg-gray-50 cursor-pointer">
    <img 
        src="/avatar.jpg" 
        class="w-12 h-12 rounded-full group-hover:ring-2 group-hover:ring-blue-500 transition"
    >
    
    <div class="flex-1">
        <h4 class="font-semibold group-hover:text-blue-600 transition">John Doe</h4>
        <p class="text-sm text-gray-600">john@example.com</p>
    </div>
    
    <x-icon 
        name="heroicons:chevron-right" 
        class="text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition"
    />
</x-group>
```

### Button with Icon

```blade
<x-group 
    as="button" 
    class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
>
    <span>Get Started</span>
    <x-icon 
        name="heroicons:arrow-right" 
        class="group-hover:translate-x-1 transition"
    />
</x-group>
```

### Sidebar Menu Item

```blade
<x-group 
    as="a" 
    href="/dashboard" 
    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50"
>
    <x-icon 
        name="heroicons:chart-bar" 
        class="text-gray-600 group-hover:text-blue-600 transition"
    />
    <span class="group-hover:text-blue-600 group-hover:font-medium transition">
        Dashboard
    </span>
</x-group>
```

### Testimonial Card

```blade
<x-group class="p-6 border rounded-lg hover:border-blue-500 hover:shadow-lg transition cursor-pointer">
    <x-vstack spacing="md">
        <x-hstack spacing="xs">
            @for($i = 0; $i < 5; $i++)
                <x-icon 
                    name="heroicons:star" 
                    size="20px" 
                    class="text-gray-300 group-hover:text-yellow-500 transition"
                    style="transition-delay: {{ $i * 50 }}ms"
                />
            @endfor
        </x-hstack>
        
        <p class="text-gray-600 group-hover:text-gray-900 transition">
            "This product is amazing! Highly recommended."
        </p>
        
        <x-hstack spacing="sm" align="center">
            <img src="/avatar.jpg" class="w-10 h-10 rounded-full">
            <div>
                <div class="font-semibold group-hover:text-blue-600 transition">Jane Smith</div>
                <div class="text-sm text-gray-500">CEO, Company</div>
            </div>
        </x-hstack>
    </x-vstack>
</x-group>
```

## Tips

- Use `group-hover:` prefix in child elements to create hover effects
- Combine with transitions for smooth animations
- Perfect for cards, links, and interactive elements
- Can be used with `group-focus:` for focus states
- Use `transition-delay` for staggered animations

