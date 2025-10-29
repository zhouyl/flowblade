# Skeleton

Loading placeholder component that mimics the structure of content being loaded. Provides visual feedback during data fetching. Skeleton provides a flexible way to display loading placeholders.

## Basic Usage

```blade
<x-skeleton />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | `string\|null` | `'text'` | Type: `text`, `image`, `video`, `card`, `avatar`, `button`, `circle`, `rectangle` |
| `width` | `string\|null` | varies by type | Width class (e.g., `'w-48'`, `'w-full'`) |
| `height` | `string\|null` | varies by type | Height class (e.g., `'h-4'`, `'h-48'`) |
| `lines` | `int\|null` | `3` | Number of lines for text type |
| `animate` | `bool` | `true` | Whether to animate with pulse effect |
| `rounded` | `bool` | `true` | Whether to use rounded corners |

### Style Props

Skeleton supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Types

### Text (Default)

```blade
{{-- Single line --}}
<x-skeleton type="text" :lines="1" />

{{-- Multiple lines --}}
<x-skeleton type="text" :lines="5" />

{{-- Custom width --}}
<x-skeleton type="text" width="w-48" />
```

### Image

```blade
<x-skeleton type="image" />

{{-- Custom size --}}
<x-skeleton type="image" width="w-96" height="h-64" />
```

### Video

```blade
<x-skeleton type="video" />

{{-- Custom size --}}
<x-skeleton type="video" height="h-80" />
```

### Card

```blade
<x-skeleton type="card" />

{{-- Custom size --}}
<x-skeleton type="card" width="w-80" height="h-96" />
```

### Avatar

```blade
<x-skeleton type="avatar" />

{{-- Different sizes --}}
<x-skeleton type="avatar" width="w-8" height="h-8" />
<x-skeleton type="avatar" width="w-12" height="h-12" />
<x-skeleton type="avatar" width="w-16" height="h-16" />
```

### Button

```blade
<x-skeleton type="button" />

{{-- Custom size --}}
<x-skeleton type="button" width="w-32" height="h-12" />
```

### Circle

```blade
<x-skeleton type="circle" />

{{-- Different sizes --}}
<x-skeleton type="circle" width="w-16" height="h-16" />
<x-skeleton type="circle" width="w-20" height="h-20" />
```

### Rectangle

```blade
<x-skeleton type="rectangle" />

{{-- Custom size --}}
<x-skeleton type="rectangle" width="w-full" height="h-48" />
```

## Without Animation

```blade
<x-skeleton :animate="false" />
```

## Without Rounded Corners

```blade
<x-skeleton :rounded="false" />
```

## Common Patterns

### Article Loading

```blade
<div class="max-w-2xl mx-auto space-y-4">
    {{-- Title --}}
    <x-skeleton type="text" :lines="1" width="w-3/4" height="h-8" />
    
    {{-- Meta info --}}
    <div class="flex items-center gap-4">
        <x-skeleton type="avatar" width="w-10" height="h-10" />
        <div class="flex-1">
            <x-skeleton type="text" :lines="1" width="w-32" height="h-4" />
            <x-skeleton type="text" :lines="1" width="w-24" height="h-3" />
        </div>
    </div>
    
    {{-- Featured image --}}
    <x-skeleton type="image" height="h-64" />
    
    {{-- Content --}}
    <x-skeleton type="text" :lines="8" />
</div>
```

### Product Card Loading

```blade
<div class="max-w-sm">
    <x-skeleton type="image" height="h-48" />
    <div class="p-4 space-y-3">
        <x-skeleton type="text" :lines="1" width="w-3/4" height="h-6" />
        <x-skeleton type="text" :lines="2" height="h-4" />
        <div class="flex items-center justify-between">
            <x-skeleton type="text" :lines="1" width="w-20" height="h-6" />
            <x-skeleton type="button" width="w-24" />
        </div>
    </div>
</div>
```

### User Profile Loading

```blade
<div class="flex items-center gap-4">
    <x-skeleton type="avatar" width="w-16" height="h-16" />
    <div class="flex-1 space-y-2">
        <x-skeleton type="text" :lines="1" width="w-32" height="h-5" />
        <x-skeleton type="text" :lines="1" width="w-48" height="h-4" />
    </div>
</div>
```

### Comment List Loading

```blade
<div class="space-y-4">
    @for($i = 0; $i < 3; $i++)
    <div class="flex gap-4">
        <x-skeleton type="avatar" width="w-10" height="h-10" />
        <div class="flex-1 space-y-2">
            <x-skeleton type="text" :lines="1" width="w-32" height="h-4" />
            <x-skeleton type="text" :lines="2" height="h-3" />
        </div>
    </div>
    @endfor
</div>
```

### Table Loading

```blade
<div class="space-y-2">
    @for($i = 0; $i < 5; $i++)
    <div class="flex items-center gap-4">
        <x-skeleton type="circle" width="w-8" height="h-8" />
        <x-skeleton type="text" :lines="1" width="w-32" />
        <x-skeleton type="text" :lines="1" width="w-48" />
        <x-skeleton type="text" :lines="1" width="w-24" />
        <x-skeleton type="button" width="w-20" height="h-8" />
    </div>
    @endfor
</div>
```

### Dashboard Widget Loading

```blade
<x-card>
    <x-card-header>
        <x-skeleton type="text" :lines="1" width="w-32" height="h-6" />
    </x-card-header>
    <x-card-body>
        <div class="space-y-4">
            <x-skeleton type="text" :lines="1" width="w-48" height="h-10" />
            <x-skeleton type="rectangle" height="h-48" />
        </div>
    </x-card-body>
</x-card>
```

### Form Loading

```blade
<div class="space-y-4">
    @for($i = 0; $i < 4; $i++)
    <div>
        <x-skeleton type="text" :lines="1" width="w-24" height="h-4" class="mb-2" />
        <x-skeleton type="rectangle" height="h-10" />
    </div>
    @endfor
    <x-skeleton type="button" width="w-32" />
</div>
```

## Custom Skeleton

Use the slot for completely custom skeleton layouts:

```blade
<x-skeleton>
    <div class="flex gap-4">
        <div class="w-20 h-20 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        <div class="flex-1 space-y-2">
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-700 w-3/4"></div>
            <div class="h-3 bg-gray-200 rounded dark:bg-gray-700 w-1/2"></div>
        </div>
    </div>
</x-skeleton>
```

## Livewire Integration

```blade
<div>
    @if($loading)
        <x-skeleton type="card" />
    @else
        {{-- Actual content --}}
        <x-card>
            <x-card-body>
                {{ $content }}
            </x-card-body>
        </x-card>
    @endif
</div>
```

## Accessibility

The Skeleton component:
- Uses `role="status"` to indicate loading state
- Includes "Loading..." text for screen readers (visually hidden)
- Provides visual feedback during content loading
- Maintains layout stability to prevent content shift
- Uses semantic HTML structure

## Notes

- Skeleton automatically uses Tailwind's `animate-pulse` utility
- All types have sensible default sizes
- Custom width and height override defaults
- Use skeleton to improve perceived performance
- Match skeleton structure to actual content layout
- Consider using skeleton for initial page load
- Skeleton works well with lazy loading strategies
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported

## Browser Support

- All modern browsers
- No JavaScript required
- Pure CSS animations
- Responsive by default

