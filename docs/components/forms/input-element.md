# InputElement

InputElement component for adding custom elements inside an input group. Useful for buttons, icons, or other interactive elements.

## Basic Usage

```blade
<x-input-group>
    <x-input placeholder="Search..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">Search</x-button>
    </x-input-element>
</x-input-group>
```

## Props

InputElement supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### With Button

```blade
<x-input-group>
    <x-input placeholder="Enter email" type="email" />
    <x-input-element>
        <x-button size="sm">Subscribe</x-button>
    </x-input-element>
</x-input-group>
```

### With Icon Button

```blade
<x-input-group>
    <x-input placeholder="Search..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:magnifying-glass" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

### With Clear Button

```blade
<x-input-group>
    <x-input placeholder="Type something..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:x-mark" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

### With Multiple Elements

```blade
<x-input-group>
    <x-input placeholder="Enter amount" type="number" />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:arrow-up" class="w-4 h-4" />
        </x-button>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:arrow-down" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

### With Dropdown

```blade
<x-input-group>
    <x-input placeholder="Select option..." />
    <x-input-element>
        <x-button variant="ghost" size="sm">
            <x-icon name="heroicons:chevron-down" class="w-4 h-4" />
        </x-button>
    </x-input-element>
</x-input-group>
```

## Accessibility

The InputElement component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation
- Provides clear interactive elements

