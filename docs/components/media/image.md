# Image

The Image component is a responsive image wrapper with built-in support for lazy loading, fallback handling, and accessibility features. It provides a consistent way to display images across your application with optional styling and effects. Perfect for product images, hero sections, and galleries.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | string | required | Image source URL |
| `alt` | string | required | Alternative text for accessibility |
| `title` | string\|null | null | Image title attribute |
| `width` | string\|null | null | Image width (CSS value or number) |
| `height` | string\|null | null | Image height (CSS value or number) |
| `lazy` | boolean | true | Enable lazy loading |
| `objectFit` | string | 'cover' | Object fit: 'contain', 'cover', 'fill', 'scale-down' |
| `objectPosition` | string | 'center' | Object position: 'center', 'top', 'bottom', 'left', 'right' |
| `rounded` | string | 'md' | Border radius: 'none', 'sm', 'md', 'lg', 'xl', 'full' |
| `shadow` | boolean | false | Add shadow effect |
| `aspectRatio` | string\|null | null | Aspect ratio: 'square', 'video', 'auto' |

## Style Props

The Image component supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Borders**: `border`, `rounded`, `borderRadius`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See `HasStyleProps` trait documentation

## Basic Usage

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
/>
```

## With Custom Sizing

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
    width="400"
    height="300"
    w="full"
    maxW="md"
/>
```

## With Object Fit

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
    objectFit="contain"
    objectPosition="center"
    w="96"
    h="96"
/>
```

## With Rounded Corners and Shadow

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
    rounded="lg"
    shadow
    w="full"
    maxW="lg"
/>
```

## Disabled Lazy Loading

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
    :lazy="false"
/>
```

## With Style Props

```blade
<x-image
    src="https://example.com/image.jpg"
    alt="Example image"
    p="4"
    bg="gray.100"
    rounded="md"
    shadow
/>
```

## Common Patterns

### Product Image

```blade
<x-image
    src="/products/product-1.jpg"
    alt="Blue Wireless Headphones"
    w="full"
    maxW="sm"
    rounded="lg"
    shadow
/>
```

### Avatar Image

```blade
<x-image
    src="/avatars/user.jpg"
    alt="User Avatar"
    w="12"
    h="12"
    rounded="full"
    objectFit="cover"
/>
```

### Hero Image

```blade
<x-image
    src="/hero.jpg"
    alt="Hero Banner"
    w="full"
    h="96"
    objectFit="cover"
    objectPosition="center"
/>
```

## Accessibility

- Always provide meaningful `alt` text for screen readers
- Use `title` attribute for additional context when needed
- The component automatically sets `loading="lazy"` for performance
- Decorative images should have empty `alt=""` attribute
- Avoid using images as the only way to convey information

## Notes

- Images are responsive by default with `max-w-full` and `h-auto`
- Lazy loading is enabled by default for better performance
- Use `objectFit` to control how the image fills its container
- Combine with style props for flexible layout control

