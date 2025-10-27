# AbsoluteCenter

Absolutely positions and centers its child elements.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `axis` | string | `null` | Centering axis (both, horizontal, vertical) |

## Basic Usage

```blade
<div class="relative h-64 bg-gray-100">
    <x-absolute-center>
        <div>Centered Content</div>
    </x-absolute-center>
</div>
```

## Examples

### Center Both Axes (Default)

```blade
<div class="relative h-96 bg-gray-50">
    <x-absolute-center>
        <x-box p="6" shadow="lg" rounded="xl">
            Centered in both directions
        </x-box>
    </x-absolute-center>
</div>
```

### Horizontal Center Only

```blade
<div class="relative h-64 bg-gray-50">
    <x-absolute-center axis="horizontal" class="top-4">
        <div>Horizontally centered, top positioned</div>
    </x-absolute-center>
</div>
```

### Vertical Center Only

```blade
<div class="relative h-64 bg-gray-50">
    <x-absolute-center axis="vertical" class="left-4">
        <div>Vertically centered, left positioned</div>
    </x-absolute-center>
</div>
```

## Common Patterns

### Modal Overlay

```blade
<div class="fixed inset-0 bg-black bg-opacity-50 z-50">
    <x-absolute-center>
        <x-box p="8" bg="white" rounded="xl" shadow="2xl" class="max-w-md">
            <h2 class="text-2xl font-bold">Modal Title</h2>
            <p class="mt-4">Modal content goes here...</p>
            
            <x-hstack spacing="sm" justify="end" class="mt-6">
                <x-button variant="outline">Cancel</x-button>
                <x-button color="primary">Confirm</x-button>
            </x-hstack>
        </x-box>
    </x-absolute-center>
</div>
```

### Loading Overlay

```blade
<div class="relative min-h-screen">
    {{-- Content --}}
    <div>Page content...</div>
    
    {{-- Loading overlay --}}
    <div class="absolute inset-0 bg-white bg-opacity-75">
        <x-absolute-center>
            <x-vstack spacing="md" align="center">
                <x-icon name="heroicons:arrow-path" size="48px" class="animate-spin text-primary-600" />
                <span class="text-lg font-medium">Loading...</span>
            </x-vstack>
        </x-absolute-center>
    </div>
</div>
```

### Badge on Image

```blade
<div class="relative w-64 h-64">
    <img src="/image.jpg" class="w-full h-full object-cover rounded-lg">
    
    <x-absolute-center>
        <x-box p="3" bg="primary" rounded="full" shadow="lg" class="text-white">
            <x-icon name="heroicons:play" size="24px" />
        </x-box>
    </x-absolute-center>
</div>
```

### Watermark

```blade
<div class="relative">
    <img src="/photo.jpg" class="w-full">
    
    <x-absolute-center>
        <div class="text-6xl font-bold text-white opacity-20 rotate-45">
            DRAFT
        </div>
    </x-absolute-center>
</div>
```

### Hero Section CTA

```blade
<div class="relative h-screen bg-cover bg-center" style="background-image: url('/hero.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    
    <x-absolute-center>
        <x-vstack spacing="lg" align="center" class="text-white">
            <h1 class="text-6xl font-bold">Welcome</h1>
            <p class="text-xl">Your amazing tagline here</p>
            <x-button color="primary" size="xl">Get Started</x-button>
        </x-vstack>
    </x-absolute-center>
</div>
```

### Notification Badge

```blade
<div class="relative inline-block">
    <x-button variant="ghost">
        <x-icon name="heroicons:bell" size="24px" />
    </x-button>
    
    <x-absolute-center axis="horizontal" class="top-0">
        <span class="bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
            3
        </span>
    </x-absolute-center>
</div>
```

## Notes

- The parent element must have `position: relative` or `position: absolute`
- Use `axis` prop to control centering direction
- Combine with other positioning classes for fine-tuned control
- Perfect for overlays, modals, and centered content within containers

