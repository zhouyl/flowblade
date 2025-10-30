# Blockquote

Blockquote component for displaying quoted text. Provides semantic HTML with visual styling to distinguish quoted content.

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

## Accessibility

The Blockquote component:
- Uses semantic HTML `<blockquote>` element
- Maintains proper content hierarchy
- Works with screen readers
- Provides clear visual distinction for quoted content

