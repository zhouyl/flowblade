# CardFooter

CardFooter component for displaying the footer section of a Card. Typically used for action buttons, links, or additional information at the bottom of a card.

## Basic Usage

```blade
<x-card>
    <x-card-body>
        <x-text>Card content goes here.</x-text>
    </x-card-body>
    
    <x-card-footer>
        <x-button>Action</x-button>
    </x-card-footer>
</x-card>
```

## Props

CardFooter supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### With Single Action Button

```blade
<x-card>
    <x-card-body>
        <x-text>Confirm this action?</x-text>
    </x-card-body>
    
    <x-card-footer>
        <x-button class="w-full">Confirm</x-button>
    </x-card-footer>
</x-card>
```

### With Multiple Action Buttons

```blade
<x-card>
    <x-card-body>
        <x-text>Save your changes?</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button variant="outline" class="flex-1">Cancel</x-button>
            <x-button class="flex-1">Save</x-button>
        </div>
    </x-card-footer>
</x-card>
```

### With Links

```blade
<x-card>
    <x-card-body>
        <x-text>Learn more about our services</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-4">
            <x-link href="/docs">Documentation</x-link>
            <x-link href="/support">Support</x-link>
            <x-link href="/contact">Contact Us</x-link>
        </div>
    </x-card-footer>
</x-card>
```

### With Custom Background

```blade
<x-card>
    <x-card-body>
        <x-text>Card content here</x-text>
    </x-card-body>
    
    <x-card-footer bg="gray.50">
        <x-button variant="outline" class="w-full">Learn More</x-button>
    </x-card-footer>
</x-card>
```

### With Text Information

```blade
<x-card>
    <x-card-body>
        <x-text>Product details</x-text>
    </x-card-body>
    
    <x-card-footer>
        <x-text size="sm" color="gray">Last updated: 2 hours ago</x-text>
    </x-card-footer>
</x-card>
```

## Accessibility

The CardFooter component:
- Uses semantic HTML structure
- Maintains proper content hierarchy
- Works with screen readers
- Supports keyboard navigation

