# Box

Flexible layout container component with comprehensive style props support. The Box component is the most fundamental layout primitive in Flowblade, providing a flexible foundation for building layouts with full access to spacing, sizing, colors, borders, and more.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `as` | string | `'div'` | HTML element to render |

### Style Props

Box component supports all style props from the HasStyleProps trait. Here are the most commonly used:

**Spacing**
- `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl` - Padding (0-96)
- `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml` - Margin (0-96)

**Sizing**
- `w`, `h` - Width and height
- `minW`, `maxW`, `minH`, `maxH` - Min/max dimensions

**Colors**
- `bg` - Background color (primary, secondary, success, warning, danger, info, gray, or Tailwind colors like 'blue.500')
- `color` - Text color
- `borderColor` - Border color

**Borders**
- `border`, `borderTop`, `borderRight`, `borderBottom`, `borderLeft` - Border width
- `rounded`, `borderRadius` - Border radius (none, sm, md, lg, xl, 2xl, 3xl, full)
- `roundedTop`, `roundedRight`, `roundedBottom`, `roundedLeft` - Individual corner radius

**Layout**
- `display` - Display property
- `position` - Position property (relative, absolute, fixed, sticky)
- `top`, `right`, `bottom`, `left` - Positioning
- `zIndex`, `z` - Z-index
- `overflow`, `overflowX`, `overflowY` - Overflow behavior

**Effects**
- `shadow` - Box shadow (none, sm, md, lg, xl, 2xl)
- `opacity` - Opacity (0-100)

**Typography**
- `fontSize` - Font size
- `fontWeight` - Font weight
- `textAlign` - Text alignment

For a complete list of available style props, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Basic Usage

```blade
<x-box p="6" bg="primary" rounded="lg" class="text-white">
    Content here
</x-box>
```

## Examples

### With Background Color

```blade
<x-box p="4" bg="success" rounded="md" class="text-white">
    Success message
</x-box>

<x-box p="4" bg="danger" rounded="md" class="text-white">
    Error message
</x-box>
```

### With Shadow

```blade
<x-box p="6" shadow="lg" rounded="md">
    Card-like box with shadow
</x-box>
```

### With Border

```blade
<x-box p="4" border="primary" rounded="lg">
    Bordered box
</x-box>
```

### Custom Element

```blade
<x-box as="section" p="8" bg="gray" rounded="xl">
    Section content
</x-box>
```

### Combining Props

```blade
<x-box 
    p="6" 
    m="4" 
    bg="info" 
    rounded="lg" 
    shadow="md" 
    class="text-white"
>
    Fully styled box
</x-box>
```

## With Livewire

```blade
<x-box 
    wire:click="handleClick" 
    p="4" 
    bg="primary" 
    rounded="md"
    class="cursor-pointer hover:bg-blue-700"
>
    Clickable box
</x-box>
```

## With Alpine.js

```blade
<x-box x-data="{ open: false }">
    <x-box
        @click="open = !open"
        p="4"
        bg="secondary"
        rounded="md"
        cursor="pointer"
    >
        Toggle content
    </x-box>

    <x-box x-show="open" p="4" bg="info" rounded="md" mt="2">
        Hidden content
    </x-box>
</x-box>
```

## Card Layout

```blade
<x-box p="6" bg="white" rounded="lg" shadow="md" class="dark:bg-gray-800">
    <x-heading as="h3" mb="4">Card Title</x-heading>
    <x-text color="gray.600" class="dark:text-gray-400">
        Card content goes here. This is a common pattern for creating card-like layouts.
    </x-text>
</x-box>
```

## Dashboard Widget

```blade
<x-box p="6" bg="white" rounded="xl" shadow="lg" class="dark:bg-gray-800">
    <x-flex align="center" justify="between" mb="4">
        <x-heading as="h4">Total Sales</x-heading>
        <x-badge color="success">+12%</x-badge>
    </x-flex>
    <x-text fontSize="3xl" fontWeight="bold">$24,500</x-text>
    <x-text fontSize="sm" color="gray.500">vs last month</x-text>
</x-box>
```

## Alert Box

```blade
<x-box p="4" bg="blue" rounded="lg" border="blue" color="blue.800" class="dark:text-blue-400">
    <x-flex align="center">
        <x-box as="svg" w="5" h="5" mr="2" class="fill-current" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
        </x-box>
        <x-text as="span">This is an informational message.</x-text>
    </x-flex>
</x-box>
```

## Sidebar Section

```blade
<x-box as="aside" p="6" bg="gray" rounded="lg" w="64">
    <x-heading as="h4" mb="4">Navigation</x-heading>
    <x-box as="nav" class="space-y-2">
        <x-box
            as="a"
            href="#"
            display="block"
            px="3"
            py="2"
            rounded="md"
            class="hover:bg-gray-200 dark:hover:bg-gray-700"
        >
            Dashboard
        </x-box>
        <x-box
            as="a"
            href="#"
            display="block"
            px="3"
            py="2"
            rounded="md"
            class="hover:bg-gray-200 dark:hover:bg-gray-700"
        >
            Settings
        </x-box>
    </x-box>
</x-box>
```

## Feature Box

```blade
<x-box p="8" bg="white" rounded="2xl" shadow="xl" textAlign="center" class="dark:bg-gray-800">
    <x-flex w="16" h="16" mx="auto" mb="4" bg="blue.100" rounded="full" align="center" justify="center">
        <x-box as="svg" w="8" h="8" color="blue.600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </x-box>
    </x-flex>
    <x-heading as="h3" mb="2">Fast Performance</x-heading>
    <x-text color="gray.600" class="dark:text-gray-400">
        Lightning-fast load times and optimized for performance.
    </x-text>
</x-box>
```

## Pricing Card

```blade
<x-box p="8" bg="white" rounded="xl" shadow="lg" border="gray" class="dark:bg-gray-800">
    <x-heading as="h3" mb="2">Pro Plan</x-heading>
    <x-box mb="4">
        <x-text as="span" fontSize="4xl" fontWeight="bold">$29</x-text>
        <x-text as="span" color="gray.500">/month</x-text>
    </x-box>
    <x-box as="ul" class="space-y-2" mb="6">
        <x-box as="li">
            <x-flex align="center">
                <x-box as="svg" w="5" h="5" color="green.500" mr="2" class="fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </x-box>
                Unlimited projects
            </x-flex>
        </x-box>
        <x-box as="li">
            <x-flex align="center">
                <x-box as="svg" w="5" h="5" color="green.500" mr="2" class="fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </x-box>
                Priority support
            </x-flex>
        </x-box>
    </x-box>
    <x-button color="primary" w="full">Get Started</x-button>
</x-box>
```

## Notification Box

```blade
<x-flex p="4" bg="green" rounded="lg" align="center" justify="between" color="green.800" class="dark:text-green-200">
    <x-flex align="center">
        <x-box as="svg" w="5" h="5" mr="2" class="fill-current" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </x-box>
        <x-text as="span">Successfully saved!</x-text>
    </x-flex>
    <x-box as="button" color="green.800" class="hover:text-green-900 dark:text-green-200 dark:hover:text-green-100">
        <x-box as="svg" w="4" h="4" class="fill-current" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </x-box>
    </x-box>
</x-flex>
```

## Related Components

- [Container](./container.md) - Responsive container with max-width
- [Card](../data-display/card.md) - Pre-styled card component
- [Flex](./flex.md) - Flexbox layout container
- [Grid](./grid.md) - Grid layout container

