# Textarea

Multi-line text input component. Textarea provides a flexible way to create multi-line text input fields with support for various sizes, variants, and states. Perfect for comments, descriptions, and long-form text input.

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

### Style Props

Textarea supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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
<x-box>
    <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Comment</x-text>
    <x-textarea
        name="comment"
        rows="4"
        placeholder="Write your comment..."
    />
</x-box>
```

### Description Field

```blade
<x-box>
    <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="1">Product Description</x-text>
    <x-textarea
        name="description"
        rows="6"
        placeholder="Enter product description"
    />
</x-box>
```

### With Validation

```blade
<x-box>
    <x-textarea
        name="content"
        :invalid="$errors->has('content')"
        placeholder="Enter content"
    />
    @error('content')
        <x-text mt="1" fontSize="sm" color="red.600">{{ $message }}</x-text>
    @enderror
</x-box>
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
<x-box x-data="{ content: '' }">
    <x-textarea
        x-model="content"
        rows="4"
        placeholder="Enter content"
    />
    <x-text as="p" mt="2" fontSize="sm" color="gray.500">
        Character count: <x-text as="span" x-text="content.length"></x-text>
    </x-text>
</x-box>
```

## Accessibility

The Textarea component:
- Uses semantic HTML structure with proper `<textarea>` element
- Supports keyboard navigation (Tab, Shift+Tab, Arrow keys)
- Works with screen readers
- Provides clear placeholder text and labels
- Supports required field validation
- Announces state changes to screen readers
- Maintains focus management for keyboard users
- Provides visual feedback for focus and state
- Supports resize control for user preference

