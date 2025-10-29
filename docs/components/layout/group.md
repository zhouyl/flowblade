# Group

Wrapper component that enables Tailwind's group hover/focus states for child elements. Group provides a flexible container for creating interactive elements with coordinated hover effects across multiple children.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |

### Style Props

Group supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-group p="6" border="1" rounded="lg" cursor="pointer">
    <x-text>Hover over this group to see effects on children</x-text>
</x-group>
```

## Examples

### Hover Effects

```blade
<x-group p="6" border="1" rounded="lg" cursor="pointer">
    <x-heading as="h3" fontWeight="bold" class="group-hover:text-blue-600 transition">Card Title</x-heading>
    <x-text color="gray.600" class="group-hover:text-gray-900 transition">
        Hover over the card to see the text color change
    </x-text>
</x-group>
```

### Image Card with Overlay

```blade
<x-group position="relative" overflow="hidden" rounded="lg" cursor="pointer">
    <x-box as="img" src="/image.jpg" w="full" h="64" class="object-cover group-hover:scale-110 transition duration-300" />

    <x-box position="absolute" inset="0" bg="black" class="bg-opacity-0 group-hover:bg-opacity-50 transition">
        <x-absolute-center>
            <x-button class="opacity-0 group-hover:opacity-100 transition">
                View Details
            </x-button>
        </x-absolute-center>
    </x-box>
</x-group>
```

## Common Patterns

### Card with Hover Effect

```blade
<x-group p="6" border="1" rounded="lg" cursor="pointer" class="hover:shadow-lg transition">
    <x-vstack spacing="md">
        <x-dynamic-component :component="'icon'" name="heroicons:star" size="32px" class="text-gray-400 group-hover:text-yellow-500 transition" />
        <x-heading as="h3" fontSize="xl" fontWeight="bold" class="group-hover:text-blue-600 transition">
            Feature Title
        </x-heading>
        <x-text color="gray.600">
            Feature description goes here
        </x-text>
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
<x-group as="a" href="/page" display="flex" align="center" gap="3" p="3" rounded="lg" class="hover:bg-gray-100">
    <x-dynamic-component :component="'icon'" name="heroicons:home" class="text-gray-600 group-hover:text-blue-600 transition" />
    <x-text as="span" class="group-hover:text-blue-600 transition">Home</x-text>
    <x-dynamic-component :component="'icon'" name="heroicons:chevron-right" class="ml-auto text-gray-400 opacity-0 group-hover:opacity-100 transition" />
</x-group>
```

### Product Card

```blade
<x-group border="1" rounded="lg" overflow="hidden" cursor="pointer" class="hover:shadow-xl transition">
    <x-box position="relative" overflow="hidden">
        <x-box as="img" src="/product.jpg" w="full" h="48" class="object-cover group-hover:scale-105 transition duration-300" />
        <x-box position="absolute" top="2" right="2" class="opacity-0 group-hover:opacity-100 transition">
            <x-button size="sm" rounded="full">
                <x-dynamic-component :component="'icon'" name="heroicons:heart" />
            </x-button>
        </x-box>
    </x-box>

    <x-vstack spacing="sm" p="4">
        <x-heading as="h3" fontWeight="bold" class="group-hover:text-blue-600 transition">Product Name</x-heading>
        <x-text color="gray.600">$99.99</x-text>
        <x-button
            color="primary"
            w="full"
            class="opacity-0 group-hover:opacity-100 transition"
        >
            Add to Cart
        </x-button>
    </x-vstack>
</x-group>
```

### List Item

```blade
<x-group display="flex" align="center" gap="4" p="4" border="b" cursor="pointer" class="hover:bg-gray-50">
    <x-box as="img" src="/avatar.jpg" w="12" h="12" rounded="full" class="group-hover:ring-2 group-hover:ring-blue-500 transition" />

    <x-box flex="1">
        <x-heading as="h4" fontWeight="semibold" class="group-hover:text-blue-600 transition">John Doe</x-heading>
        <x-text fontSize="sm" color="gray.600">john@example.com</x-text>
    </x-box>

    <x-dynamic-component :component="'icon'" name="heroicons:chevron-right" class="text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition" />
</x-group>
```

### Button with Icon

```blade
<x-group
    as="button"
    display="flex"
    align="center"
    gap="2"
    px="4"
    py="2"
    bg="blue.600"
    color="white"
    rounded="lg"
    class="hover:bg-blue-700 transition"
>
    <x-text as="span">Get Started</x-text>
    <x-dynamic-component :component="'icon'" name="heroicons:arrow-right" class="group-hover:translate-x-1 transition" />
</x-group>
```

### Sidebar Menu Item

```blade
<x-group
    as="a"
    href="/dashboard"
    display="flex"
    align="center"
    gap="3"
    px="4"
    py="3"
    rounded="lg"
    class="hover:bg-blue-50"
>
    <x-dynamic-component :component="'icon'" name="heroicons:chart-bar" class="text-gray-600 group-hover:text-blue-600 transition" />
    <x-text as="span" class="group-hover:text-blue-600 group-hover:font-medium transition">
        Dashboard
    </x-text>
</x-group>
```

### Testimonial Card

```blade
<x-group p="6" border="1" rounded="lg" cursor="pointer" class="hover:border-blue-500 hover:shadow-lg transition">
    <x-vstack spacing="md">
        <x-hstack spacing="xs">
            @for($i = 0; $i < 5; $i++)
                <x-dynamic-component :component="'icon'" name="heroicons:star" size="20px" class="text-gray-300 group-hover:text-yellow-500 transition" :style="'transition-delay: ' . ($i * 50) . 'ms'" />
            @endfor
        </x-hstack>

        <x-text color="gray.600" class="group-hover:text-gray-900 transition">
            "This product is amazing! Highly recommended."
        </x-text>

        <x-hstack spacing="sm" align="center">
            <x-box as="img" src="/avatar.jpg" w="10" h="10" rounded="full" />
            <x-box>
                <x-text fontWeight="semibold" class="group-hover:text-blue-600 transition">Jane Smith</x-text>
                <x-text fontSize="sm" color="gray.500">CEO, Company</x-text>
            </x-box>
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

