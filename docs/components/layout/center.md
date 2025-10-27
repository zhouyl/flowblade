# Center

Centers its child elements using flexbox.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `inline` | bool | `false` | Whether to use inline-flex |

## Basic Usage

```blade
<x-center>
    <div>Centered Content</div>
</x-center>
```

## Examples

### Full Height Centering

```blade
<x-center class="h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold">Welcome</h1>
        <p class="mt-4">Vertically and horizontally centered</p>
    </div>
</x-center>
```

### Inline Center

```blade
<x-center :inline="true" class="w-32 h-32 bg-gray-100">
    <span>Inline</span>
</x-center>
```

### Custom Element

```blade
<x-center as="section" class="min-h-screen bg-gray-50">
    <div>Section content</div>
</x-center>
```

### Loading State

```blade
<x-center class="h-64">
    <x-spinner size="lg" />
</x-center>
```

### Empty State

```blade
<x-center class="h-96">
    <div class="text-center">
        <x-icon name="heroicons:inbox" size="48px" class="text-gray-400" />
        <p class="mt-4 text-gray-600">No items found</p>
    </div>
</x-center>
```

### Modal Content

```blade
<x-center class="fixed inset-0 bg-black bg-opacity-50">
    <x-box p="6" bg="white" rounded="lg" shadow="xl" class="max-w-md">
        <h2 class="text-xl font-bold">Modal Title</h2>
        <p class="mt-2">Modal content...</p>
    </x-box>
</x-center>
```

## Common Patterns

### Hero Section

```blade
<x-center class="h-screen bg-gradient-to-r from-blue-500 to-purple-600">
    <div class="text-center text-white">
        <h1 class="text-6xl font-bold">Your App</h1>
        <p class="mt-4 text-xl">Amazing tagline</p>
        <x-button color="white" size="lg" class="mt-8">
            Get Started
        </x-button>
    </div>
</x-center>
```

### Card Center

```blade
<x-center class="p-8">
    <x-box p="8" shadow="lg" rounded="xl" class="max-w-md w-full">
        <h2 class="text-2xl font-bold">Sign In</h2>
        <form class="mt-6">
            <!-- Form fields -->
        </form>
    </x-box>
</x-center>
```

