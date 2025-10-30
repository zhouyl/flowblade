# AccordionItem

AccordionItem component for displaying individual accordion items within an Accordion. Each item contains a trigger and content that can be expanded or collapsed.

## Basic Usage

```blade
<x-accordion>
    <x-accordion-item title="Item 1">
        Content for item 1
    </x-accordion-item>
    <x-accordion-item title="Item 2">
        Content for item 2
    </x-accordion-item>
</x-accordion>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `null` | Title of the accordion item |
| `disabled` | `boolean` | `false` | Disabled state |

AccordionItem also supports all common style props for flexible styling.

## Examples

### With Multiple Items

```blade
<x-accordion>
    <x-accordion-item title="What is Flowblade?">
        Flowblade is a comprehensive Laravel Blade component library built with Tailwind CSS and Flowbite.
    </x-accordion-item>
    
    <x-accordion-item title="How do I install it?">
        You can install Flowblade via Composer using the command: composer require flowblade/flowblade
    </x-accordion-item>
    
    <x-accordion-item title="Is it free?">
        Yes, Flowblade is open source and free to use.
    </x-accordion-item>
</x-accordion>
```

### With Rich Content

```blade
<x-accordion>
    <x-accordion-item title="Features">
        <div class="space-y-2">
            <x-text>✓ 138+ pre-built components</x-text>
            <x-text>✓ Tailwind CSS integration</x-text>
            <x-text>✓ Flowbite design system</x-text>
            <x-text>✓ Full style props support</x-text>
        </div>
    </x-accordion-item>
</x-accordion>
```

### Disabled Item

```blade
<x-accordion>
    <x-accordion-item title="Available">
        This item is available
    </x-accordion-item>
    
    <x-accordion-item title="Disabled" disabled>
        This item is disabled
    </x-accordion-item>
</x-accordion>
```

### With Icons

```blade
<x-accordion>
    <x-accordion-item title="Documentation">
        <div class="flex items-center gap-2">
            <x-icon name="heroicons:book-open" class="w-4 h-4" />
            <x-text>Read the full documentation</x-text>
        </div>
    </x-accordion-item>
</x-accordion>
```

## Accessibility

The AccordionItem component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear expand/collapse indicators
- Maintains proper heading hierarchy

