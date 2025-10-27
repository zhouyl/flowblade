# Components Documentation

Complete documentation for all Flowblade components.

## Layout Components

Layout components help you structure your page and organize content.

- [Box](layout/box.md) - Flexible layout container with styling options
- [Container](layout/container.md) - Responsive container with max-width constraints
- [Center](layout/center.md) - Centers child elements using flexbox
- [Flex](layout/flex.md) - Flexible box layout with full control
- [Grid](layout/grid.md) - CSS Grid layout component
- [Stack / HStack / VStack](layout/stack.md) - Stack elements with consistent spacing
- [Separator](layout/separator.md) - Visual divider/separator line
- [Spacer](layout/spacer.md) - Flexible space filler in flex layouts

## Button Components

Interactive button components with various styles and states.

- [Button](buttons/button.md) - Versatile button with multiple variants

## Data Display Components

Components for displaying data and content.

- [Icon](data-display/icon.md) - Iconify icon component (100,000+ icons)

## Quick Reference

### Layout

```blade
{{-- Container --}}
<x-container max-width="7xl" px="4">
    Content
</x-container>

{{-- Center --}}
<x-center class="h-screen">
    Centered content
</x-center>

{{-- Flex --}}
<x-flex direction="row" justify="between" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
</x-flex>

{{-- Grid --}}
<x-grid columns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>

{{-- Stack --}}
<x-vstack spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<x-hstack spacing="lg" justify="between">
    <div>Left</div>
    <div>Right</div>
</x-hstack>

{{-- Separator --}}
<x-separator />
<x-separator orientation="vertical" length="6" />

{{-- Spacer --}}
<x-flex>
    <div>Left</div>
    <x-spacer />
    <div>Right</div>
</x-flex>

{{-- Box --}}
<x-box p="6" bg="primary" rounded="lg" shadow="md">
    Content
</x-box>
```

### Buttons

```blade
{{-- Basic Button --}}
<x-button color="primary">Click Me</x-button>

{{-- With Icons --}}
<x-button left-icon="heroicons:home">Home</x-button>

{{-- Loading State --}}
<x-button :loading="true">Processing...</x-button>

{{-- Variants --}}
<x-button variant="solid">Solid</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
```

### Icons

```blade
{{-- Basic Icon --}}
<x-icon name="heroicons:home" />

{{-- Colored Icon --}}
<x-icon name="heroicons:heart" color="danger" size="24px" />

{{-- Different Collections --}}
<x-icon name="mdi:account" />
<x-icon name="fa:github" />
<x-icon name="bi:house" />
```

## Common Patterns

### Page Layout

```blade
<x-container max-width="7xl" px="4" py="8">
    <x-vstack spacing="lg">
        <header>
            <h1 class="text-3xl font-bold">Page Title</h1>
        </header>
        
        <main>
            <x-grid columns="3" gap="6">
                {{-- Content --}}
            </x-grid>
        </main>
        
        <footer>
            <x-separator class="mb-4" />
            <p class="text-gray-600">Footer content</p>
        </footer>
    </x-vstack>
</x-container>
```

### Navigation Bar

```blade
<x-hstack align="center" justify="between" class="p-4 bg-white shadow">
    <div class="text-xl font-bold">Logo</div>
    
    <x-hstack spacing="md">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </x-hstack>
    
    <x-button>Sign In</x-button>
</x-hstack>
```

### Card Grid

```blade
<x-grid columns="3" gap="6">
    @foreach($items as $item)
        <x-box p="6" shadow="lg" rounded="xl">
            <x-vstack spacing="md">
                <x-icon name="heroicons:star" size="32px" color="primary" />
                <h3 class="font-bold">{{ $item->title }}</h3>
                <p class="text-gray-600">{{ $item->description }}</p>
                <x-button color="primary" class="w-full">Learn More</x-button>
            </x-vstack>
        </x-box>
    @endforeach
</x-grid>
```

### Form Layout

```blade
<x-box p="8" shadow="lg" rounded="xl" class="max-w-md mx-auto">
    <x-vstack spacing="md">
        <h2 class="text-2xl font-bold">Sign In</h2>
        
        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <x-input type="email" />
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <x-input type="password" />
        </div>
        
        <x-button color="primary" class="w-full">Sign In</x-button>
        
        <x-separator />
        
        <x-button variant="outline" class="w-full" left-icon="fa-brands:google">
            Continue with Google
        </x-button>
    </x-vstack>
</x-box>
```

### Dashboard Stats

```blade
<x-grid columns="4" gap="4">
    <x-box p="6" shadow="md" rounded="lg">
        <x-vstack spacing="xs">
            <x-hstack align="center" justify="between">
                <span class="text-sm text-gray-600">Total Users</span>
                <x-icon name="heroicons:users" class="text-blue-500" />
            </x-hstack>
            <div class="text-3xl font-bold">1,234</div>
            <div class="text-sm text-green-600">+12% from last month</div>
        </x-vstack>
    </x-box>
    
    {{-- More stat cards... --}}
</x-grid>
```

## Tips

1. **Combine Components**: Mix and match components to create complex layouts
2. **Use Spacing**: Leverage `spacing` props in Stack components for consistent gaps
3. **Responsive Design**: Add Tailwind responsive classes for mobile-first design
4. **Color Consistency**: Use the built-in color system for consistent theming
5. **Icons**: Browse https://icon-sets.iconify.design/ for available icons

## Next Steps

- Explore individual component documentation for detailed examples
- Check out the [Installation Guide](../installation.md)
- Review the [Development Plan](../TODO.md) for upcoming components

