# HasStyleProps Trait

The `HasStyleProps` trait provides a powerful style props system that allows you to style components using intuitive props instead of writing Tailwind CSS classes directly.

## Overview

The `HasStyleProps` trait converts component props to Tailwind CSS classes automatically. This provides a consistent, intuitive API for styling components across the entire Flowblade library.

## Supported Style Props

### Spacing Props

Control padding and margin with intuitive props:

```blade
{{-- Padding --}}
<x-box p="6">All sides</x-box>
<x-box px="4" py="8">Horizontal and vertical</x-box>
<x-box pt="2" pr="4" pb="6" pl="8">Individual sides</x-box>

{{-- Margin --}}
<x-box m="4">All sides</x-box>
<x-box mx="auto">Horizontal centering</x-box>
<x-box my="6">Vertical margin</x-box>
```

**Available values**: 0-96 (Tailwind spacing scale)

### Sizing Props

Control width and height:

```blade
{{-- Width and Height --}}
<x-box w="full" h="64">Full width, 16rem height</x-box>
<x-box w="1/2" h="auto">Half width, auto height</x-box>
<x-box minW="xs" maxW="2xl">Min/max width constraints</x-box>
<x-box minH="screen" maxH="96">Min/max height constraints</x-box>
```

**Props**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`

### Color Props

Apply colors to backgrounds, text, and borders:

```blade
{{-- Background and Text Colors --}}
<x-box bg="primary" color="white">Primary background</x-box>
<x-box bg="blue.500" color="gray.700">Using color scales</x-box>
<x-box borderColor="red.300">Border color</x-box>
```

**Semantic colors**: `primary`, `secondary`, `success`, `warning`, `danger`, `info`

**Color scales**: `50`, `100`, `200`, `300`, `400`, `500`, `600`, `700`, `800`, `900`

### Border Props

Control borders and border radius:

```blade
{{-- Borders --}}
<x-box border="2" borderColor="gray.300">Bordered box</x-box>
<x-box borderTop="1" borderRight="2">Individual borders</x-box>

{{-- Border Radius --}}
<x-box rounded="lg">Large radius</x-box>
<x-box rounded="full">Fully rounded</x-box>
<x-box roundedTop="md" roundedBottom="lg">Individual corners</x-box>
```

**Props**: `border`, `borderTop`, `borderRight`, `borderBottom`, `borderLeft`, `borderColor`, `rounded`, `borderRadius`, `roundedTop`, `roundedRight`, `roundedBottom`, `roundedLeft`

### Layout Props

Control display, position, and overflow:

```blade
{{-- Display and Position --}}
<x-box display="flex" position="relative">Flex layout</x-box>
<x-box display="grid" zIndex="10">Grid layout</x-box>
<x-box overflow="hidden" overflowY="auto">Overflow control</x-box>
```

**Props**: `display`, `position`, `zIndex`, `overflow`, `overflowX`, `overflowY`

### Typography Props

Control text styling:

```blade
{{-- Text Styling --}}
<x-box fontSize="lg" fontWeight="bold" textAlign="center" lineHeight="tight">
    Styled text
</x-box>
```

**Props**: `fontSize`, `fontWeight`, `textAlign`, `lineHeight`, `letterSpacing`

### Flexbox Props

Control flex layout:

```blade
{{-- Flex Container --}}
<x-box 
    flex="1" 
    flexDirection="column" 
    alignItems="center" 
    justifyContent="between" 
    gap="4"
>
    Flex layout with gap
</x-box>
```

**Props**: `flex`, `flexDirection`, `flexWrap`, `alignItems`, `justifyContent`, `gap`

### Grid Props

Control grid layout:

```blade
{{-- Grid Container --}}
<x-box gridTemplateColumns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-box>
```

**Props**: `gridTemplateColumns`, `gridColumn`, `gridRow`, `gap`

### Effect Props

Control shadows, opacity, and other effects:

```blade
{{-- Effects --}}
<x-box shadow="md" opacity="75">Box with shadow</x-box>
<x-box shadow="lg" cursor="pointer" transition="all">Interactive box</x-box>
```

**Props**: `shadow`, `opacity`, `cursor`, `transition`, `transform`, `visibility`

## Usage Examples

### Basic Component Styling

```blade
<x-box p="6" bg="blue.500" rounded="lg" shadow="md">
    Styled box
</x-box>
```

### Responsive Design

```blade
<x-box w="full" md:w="1/2" lg:w="1/3" p="4" md:p="6" lg:p="8">
    Responsive box
</x-box>
```

### Complex Layouts

```blade
<x-box display="flex" flexDirection="column" gap="4" p="6">
    <x-heading size="lg">Title</x-heading>
    <x-text color="gray.600">Description</x-text>
    <x-button color="primary">Action</x-button>
</x-box>
```

## Color Mapping

The trait automatically maps semantic colors to Tailwind classes:

- `primary` → `blue-600`
- `secondary` → `gray-600`
- `success` → `green-600`
- `warning` → `yellow-500`
- `danger` → `red-600`
- `info` → `cyan-600`

You can also use dot notation for specific color scales:

```blade
<x-box bg="blue.500" color="gray.700" borderColor="red.300">
    Custom colors
</x-box>
```

## Implementation in Components

To use `HasStyleProps` in your component:

```php
<?php

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

class Box extends Component
{
    use HasStyleProps;

    public function __construct(...$styleProps)
    {
        $this->setStyleProps($styleProps);
    }

    public function classes(): string
    {
        $classes = ['base-classes'];
        
        $styleClasses = $this->parseStyleProps();
        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return implode(' ', array_filter($classes));
    }

    public function render()
    {
        return view('flowblade::components.layout.box');
    }
}
```

## Tips and Best Practices

1. **Use semantic colors** for consistency across your application
2. **Combine with Tailwind classes** for advanced styling needs
3. **Use responsive prefixes** (md:, lg:, etc.) for mobile-first design
4. **Leverage color scales** for fine-grained color control
5. **Keep components composable** by using style props instead of hardcoded styles

## See Also

- [Tailwind CSS Documentation](https://tailwindcss.com/)
- [Flowbite Documentation](https://flowbite.com/)
- [Component Development Standards](../STANDARDS.md)

