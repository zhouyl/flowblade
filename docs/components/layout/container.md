# Container

Responsive container component that centers content and applies max-width constraints.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `max-width` | string | `'7xl'` | Maximum width (sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full) |
| `center-content` | bool | `true` | Whether to center content horizontally |
| `px` | string | `'4'` | Horizontal padding (0-16) |
| `py` | string | `null` | Vertical padding (0-16) |

## Basic Usage

```blade
<x-container>
    <h1>Page Content</h1>
</x-container>
```

## Examples

### Different Max Widths

```blade
{{-- Small container --}}
<x-container max-width="sm">
    Small container content
</x-container>

{{-- Medium container --}}
<x-container max-width="md">
    Medium container content
</x-container>

{{-- Large container --}}
<x-container max-width="lg">
    Large container content
</x-container>

{{-- Extra large container --}}
<x-container max-width="7xl">
    Extra large container content
</x-container>

{{-- Full width --}}
<x-container max-width="full">
    Full width container
</x-container>
```

### With Padding

```blade
<x-container px="8" py="12">
    Container with custom padding
</x-container>
```

### Without Centering

```blade
<x-container :center-content="false">
    Left-aligned container
</x-container>
```

### Page Layout Example

```blade
<x-container max-width="7xl" px="4" py="8">
    <header>
        <h1 class="text-3xl font-bold">Page Title</h1>
    </header>
    
    <main class="mt-8">
        <p>Page content goes here...</p>
    </main>
    
    <footer class="mt-12">
        <p class="text-gray-600">Footer content</p>
    </footer>
</x-container>
```

### Nested Containers

```blade
<x-container max-width="7xl">
    <x-container max-width="md">
        Nested container for narrower content
    </x-container>
</x-container>
```

## Common Patterns

### Hero Section

```blade
<x-container max-width="7xl" px="4" py="20">
    <div class="text-center">
        <h1 class="text-5xl font-bold">Welcome</h1>
        <p class="mt-4 text-xl text-gray-600">Your tagline here</p>
    </div>
</x-container>
```

### Content Section

```blade
<x-container max-width="4xl" px="4" py="12">
    <article class="prose lg:prose-xl">
        <h2>Article Title</h2>
        <p>Article content...</p>
    </article>
</x-container>
```

