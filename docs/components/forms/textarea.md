# Textarea

Multi-line text input component.

## Basic Usage

```blade
<x-textarea placeholder="Enter content" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only |
| `required` | `boolean` | `false` | Required |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | Placeholder text |
| `rows` | `int` | `3` | Number of rows |
| `resize` | `boolean` | `true` | Allow resize |

## Sizes

```blade
<x-textarea size="sm" placeholder="Small size" />
<x-textarea size="md" placeholder="Medium size" />
<x-textarea size="lg" placeholder="Large size" />
```

## Variants

```blade
<!-- Outline -->
<x-textarea variant="outline" placeholder="Outline style" />

<!-- Filled -->
<x-textarea variant="filled" placeholder="Filled style" />

<!-- Flushed -->
<x-textarea variant="flushed" placeholder="Flushed style" />
```

## Number of rows

```blade
<x-textarea rows="3" placeholder="3 rows" />
<x-textarea rows="5" placeholder="5 rows" />
<x-textarea rows="10" placeholder="10 rows" />
```

## Resize

```blade
<!-- Allow resize -->
<x-textarea resize placeholder="Resizable" />

<!-- Disable resize -->
<x-textarea :resize="false" placeholder="Fixed size" />
```

## States

```blade
<!-- Disabled -->
<x-textarea disabled placeholder="Disabled state" />

<!-- Read-only -->
<x-textarea readonly>Read-only content</x-textarea>

<!-- Required -->
<x-textarea required placeholder="Required field" />

<!-- Invalid -->
<x-textarea invalid placeholder="Invalid input" />
```

## Common Patterns

### Comment Input

```blade
<div>
    <label class="block text-sm font-medium mb-1">Comment</label>
    <x-textarea 
        name="comment"
        rows="4"
        placeholder="Write your comment..."
    />
</div>
```

### Description Field

```blade
<div>
    <label class="block text-sm font-medium mb-1">Product Description</label>
    <x-textarea 
        name="description"
        rows="6"
        placeholder="Enter product description"
    />
</div>
```

### With Validation

```blade
<div>
    <x-textarea 
        name="content"
        :invalid="$errors->has('content')"
        placeholder="Enter content"
    />
    @error('content')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
```

## Livewire Integration

```blade
<x-textarea 
    wire:model="description"
    rows="5"
    placeholder="Product Description"
/>
```

## Alpine.js Integration

```blade
<div x-data="{ content: '' }">
    <x-textarea 
        x-model="content"
        rows="4"
        placeholder="Enter content"
    />
    <p class="mt-2 text-sm text-gray-500">
        Character count: <span x-text="content.length"></span>
    </p>
</div>
```

