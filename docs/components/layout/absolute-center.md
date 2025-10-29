# AbsoluteCenter

Absolutely positions and centers its child elements. AbsoluteCenter provides a convenient way to center content within a positioned container with comprehensive style props support.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |
| `axis` | string | `null` | Centering axis (both, horizontal, vertical) |

### Style Props

AbsoluteCenter supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-box position="relative" h="64" bg="gray.100">
    <x-absolute-center>
        <x-box>Centered Content</x-box>
    </x-absolute-center>
</x-box>
```

## Examples

### Center Both Axes (Default)

```blade
<x-box position="relative" h="96" bg="gray.50">
    <x-absolute-center>
        <x-box p="6" shadow="lg" rounded="xl">
            Centered in both directions
        </x-box>
    </x-absolute-center>
</x-box>
```

### Horizontal Center Only

```blade
<x-box position="relative" h="64" bg="gray.50">
    <x-absolute-center axis="horizontal" top="4">
        <x-box>Horizontally centered, top positioned</x-box>
    </x-absolute-center>
</x-box>
```

### Vertical Center Only

```blade
<x-box position="relative" h="64" bg="gray.50">
    <x-absolute-center axis="vertical" left="4">
        <x-box>Vertically centered, left positioned</x-box>
    </x-absolute-center>
</x-box>
```

## Common Patterns

### Modal Overlay

```blade
<x-box position="fixed" inset="0" bg="black" z="50" class="bg-opacity-50">
    <x-absolute-center>
        <x-box p="8" bg="white" rounded="xl" shadow="2xl" class="max-w-md">
            <x-heading as="h2" fontSize="2xl" fontWeight="bold">Modal Title</x-heading>
            <x-text mt="4">Modal content goes here...</x-text>

            <x-hstack spacing="sm" justify="end" mt="6">
                <x-button variant="outline">Cancel</x-button>
                <x-button color="primary">Confirm</x-button>
            </x-hstack>
        </x-box>
    </x-absolute-center>
</x-box>
```

### Loading Overlay

```blade
<x-box position="relative" minH="screen">
    {{-- Content --}}
    <x-box>Page content...</x-box>

    {{-- Loading overlay --}}
    <x-box position="absolute" inset="0" bg="white" class="bg-opacity-75">
        <x-absolute-center>
            <x-vstack spacing="md" align="center">
                <x-icon name="heroicons:arrow-path" size="48px" class="animate-spin text-primary-600" />
                <x-text fontSize="lg" fontWeight="medium">Loading...</x-text>
            </x-vstack>
        </x-absolute-center>
    </x-box>
</x-box>
```

### Badge on Image

```blade
<x-box position="relative" w="64" h="64">
    <x-box as="img" src="/image.jpg" w="full" h="full" class="object-cover rounded-lg" />

    <x-absolute-center>
        <x-box p="3" bg="primary" rounded="full" shadow="lg" color="white">
            <x-icon name="heroicons:play" size="24px" />
        </x-box>
    </x-absolute-center>
</x-box>
```

### Watermark

```blade
<x-box position="relative">
    <x-box as="img" src="/photo.jpg" w="full" />

    <x-absolute-center>
        <x-text fontSize="6xl" fontWeight="bold" color="white" opacity="20" class="rotate-45">
            DRAFT
        </x-text>
    </x-absolute-center>
</x-box>
```

### Hero Section CTA

```blade
<x-box position="relative" h="screen" class="bg-cover bg-center" style="background-image: url('/hero.jpg')">
    <x-box position="absolute" inset="0" bg="black" class="bg-opacity-50"></x-box>

    <x-absolute-center>
        <x-vstack spacing="lg" align="center" color="white">
            <x-heading as="h1" fontSize="6xl" fontWeight="bold">Welcome</x-heading>
            <x-text fontSize="xl">Your amazing tagline here</x-text>
            <x-button color="primary" size="xl">Get Started</x-button>
        </x-vstack>
    </x-absolute-center>
</x-box>
```

### Notification Badge

```blade
<x-box position="relative" display="inline-block">
    <x-button variant="ghost">
        <x-icon name="heroicons:bell" size="24px" />
    </x-button>

    <x-absolute-center axis="horizontal" top="0">
        <x-center w="5" h="5" bg="red.500" color="white" rounded="full" fontSize="xs">
            3
        </x-center>
    </x-absolute-center>
</x-box>
```

## Notes

- The parent element must have `position: relative` or `position: absolute`
- Use `axis` prop to control centering direction
- Combine with other positioning classes for fine-tuned control
- Perfect for overlays, modals, and centered content within containers

