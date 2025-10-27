# Spacer

Flexible space component that fills available space in flex layouts.

## Props

No props - Spacer automatically fills available space.

## Basic Usage

```blade
<x-flex>
    <div>Left</div>
    <x-spacer />
    <div>Right</div>
</x-flex>
```

## Examples

### Push Content to Edges

```blade
<x-flex>
    <div>Left Content</div>
    <x-spacer />
    <div>Right Content</div>
</x-flex>
```

### Multiple Spacers

```blade
<x-flex>
    <div>Left</div>
    <x-spacer />
    <div>Center</div>
    <x-spacer />
    <div>Right</div>
</x-flex>
```

### Vertical Spacer

```blade
<x-vstack class="h-screen">
    <header>Header</header>
    <x-spacer />
    <footer>Footer</footer>
</x-vstack>
```

## Common Patterns

### Navigation Bar

```blade
<x-hstack align="center" class="p-4 bg-white shadow">
    <div class="text-xl font-bold">Logo</div>
    
    <x-spacer />
    
    <nav class="flex gap-6">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
    
    <x-spacer />
    
    <x-button>Sign In</x-button>
</x-hstack>
```

### Card Actions

```blade
<x-box p="6" shadow="lg" rounded="xl">
    <h2 class="text-xl font-bold">Card Title</h2>
    <p class="mt-2 text-gray-600">Card description...</p>
    
    <x-hstack class="mt-6">
        <x-button variant="outline">Cancel</x-button>
        <x-spacer />
        <x-button color="primary">Confirm</x-button>
    </x-hstack>
</x-box>
```

### Sticky Footer

```blade
<x-vstack class="min-h-screen">
    <header class="p-4 bg-white shadow">
        Header
    </header>
    
    <main class="flex-1 p-8">
        Main Content
    </main>
    
    <x-spacer />
    
    <footer class="p-4 bg-gray-100">
        Footer
    </footer>
</x-vstack>
```

### List Item Actions

```blade
@foreach($items as $item)
    <x-hstack align="center" class="p-4 border-b">
        <div>
            <h3 class="font-semibold">{{ $item->name }}</h3>
            <p class="text-sm text-gray-600">{{ $item->description }}</p>
        </div>
        
        <x-spacer />
        
        <x-hstack spacing="sm">
            <x-button variant="ghost" size="sm">Edit</x-button>
            <x-button variant="ghost" size="sm" color="danger">Delete</x-button>
        </x-hstack>
    </x-hstack>
@endforeach
```

### Modal Header

```blade
<x-hstack align="center" class="p-6 border-b">
    <h2 class="text-xl font-bold">Modal Title</h2>
    <x-spacer />
    <x-button variant="ghost" size="sm">
        <x-icon name="heroicons:x-mark" />
    </x-button>
</x-hstack>
```

### Toolbar

```blade
<x-hstack align="center" class="p-4 bg-gray-50 border-b">
    <x-hstack spacing="sm">
        <x-button variant="outline" size="sm">
            <x-icon name="heroicons:arrow-left" />
        </x-button>
        <x-button variant="outline" size="sm">
            <x-icon name="heroicons:arrow-right" />
        </x-button>
    </x-hstack>
    
    <x-spacer />
    
    <x-hstack spacing="sm">
        <x-button variant="outline" size="sm">Save</x-button>
        <x-button color="primary" size="sm">Publish</x-button>
    </x-hstack>
</x-hstack>
```

### Split Layout

```blade
<x-hstack class="h-screen">
    <div class="w-1/3 p-8 bg-gray-50">
        Sidebar Content
    </div>
    
    <x-spacer />
    
    <div class="w-2/3 p-8">
        Main Content
    </div>
</x-hstack>
```

### Button Group with Spacer

```blade
<x-hstack>
    <x-button variant="outline">Cancel</x-button>
    <x-button variant="outline">Save Draft</x-button>
    <x-spacer />
    <x-button color="primary">Publish</x-button>
</x-hstack>
```

