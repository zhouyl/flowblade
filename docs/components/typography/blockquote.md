# Blockquote

Blockquote component for displaying quoted text. Provides semantic HTML with visual styling to distinguish quoted content from regular text. Perfect for testimonials, quotes, and highlighted passages.

## Basic Usage

```blade
<x-blockquote>
    This is a blockquote with important information.
</x-blockquote>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | `string` | `'gray'` | Border color: `primary`, `success`, `danger`, `warning`, `info`, `gray` |

Blockquote also supports all common style props for flexible styling.

### Style Props

Blockquote supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### With Different Colors

```blade
<x-blockquote color="primary">
    Primary colored blockquote
</x-blockquote>

<x-blockquote color="success">
    Success colored blockquote
</x-blockquote>

<x-blockquote color="danger">
    Danger colored blockquote
</x-blockquote>

<x-blockquote color="warning">
    Warning colored blockquote
</x-blockquote>
```

### With Citation

```blade
<div>
    <x-blockquote>
        The only way to do great work is to love what you do.
    </x-blockquote>
    <x-text size="sm" color="gray" class="mt-2">
        — Steve Jobs
    </x-text>
</div>
```

### With Author Information

```blade
<x-card>
    <x-card-body>
        <x-blockquote color="primary">
            Innovation distinguishes between a leader and a follower.
        </x-blockquote>
        
        <div class="flex items-center gap-3 mt-4">
            <img src="/avatar.jpg" class="w-10 h-10 rounded-full" />
            <div>
                <x-text weight="medium">Steve Jobs</x-text>
                <x-text size="sm" color="gray">Apple Founder</x-text>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### In an Article

```blade
<article>
    <x-heading as="h1" size="3xl" class="mb-4">Article Title</x-heading>
    
    <x-text class="mb-4">
        Introduction paragraph with some context about the topic.
    </x-text>
    
    <x-blockquote color="info" class="my-6">
        This is an important quote from the article that highlights a key point.
    </x-blockquote>
    
    <x-text>
        Continuing with more content after the blockquote.
    </x-text>
</article>
```

## Common Patterns

### Testimonial

```blade
<x-card variant="outline" p="6">
    <x-blockquote color="primary" mb="4">
        Flowblade has transformed how we build Laravel applications. The component library is intuitive and powerful.
    </x-blockquote>

    <div class="flex items-center gap-3">
        <img src="/avatar.jpg" class="w-12 h-12 rounded-full" />
        <div>
            <x-text weight="semibold">John Doe</x-text>
            <x-text size="sm" color="gray">CEO, Tech Company</x-text>
        </div>
    </div>
</x-card>
```

### Blog Post Quote

```blade
<x-blockquote color="info" my="6" p="4" bg="blue.50" rounded="lg">
    <x-text mb="2">
        "The best way to predict the future is to invent it."
    </x-text>
    <x-text size="sm" color="gray">
        — Alan Kay
    </x-text>
</x-blockquote>
```

### Highlighted Information

```blade
<x-blockquote color="warning" p="4" bg="yellow.50" rounded="md">
    <x-text weight="semibold" mb="2">Important Notice</x-text>
    <x-text size="sm">
        This feature is currently in beta and may change in future releases.
    </x-text>
</x-blockquote>
```

### Multiple Quotes

```blade
<x-vstack spacing="4">
    <x-blockquote color="primary">
        First quote goes here.
    </x-blockquote>

    <x-blockquote color="success">
        Second quote goes here.
    </x-blockquote>

    <x-blockquote color="danger">
        Third quote goes here.
    </x-blockquote>
</x-vstack>
```

## Accessibility

The Blockquote component:
- Uses semantic HTML `<blockquote>` element
- Maintains proper content hierarchy
- Works with screen readers
- Provides clear visual distinction for quoted content
- Supports proper citation with `<cite>` elements
- Announces blockquote content to screen readers
- Supports proper ARIA attributes for blockquote context

