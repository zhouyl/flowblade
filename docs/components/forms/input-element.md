# InputElement

InputElement component for adding custom elements inside an input group. Useful for buttons, icons, or other interactive elements. Perfect for search inputs, filters, action buttons, and custom input controls.

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

### Style Props

InputElement supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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

## Common Patterns

### Search with Submit

```blade
<x-field label="Search">
    <x-input-group>
        <x-input placeholder="Search products..." />
        <x-input-element>
            <x-button size="sm" color="primary">Search</x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

### Password Visibility Toggle

```blade
<x-field label="Password">
    <x-input-group>
        <x-input type="password" placeholder="Enter password" />
        <x-input-element>
            <x-button variant="ghost" size="sm">
                <x-icon name="heroicons:eye" class="w-4 h-4" />
            </x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

### Quantity Selector

```blade
<x-field label="Quantity">
    <x-input-group>
        <x-input type="number" value="1" min="1" />
        <x-input-element>
            <x-button variant="ghost" size="sm">
                <x-icon name="heroicons:plus" class="w-4 h-4" />
            </x-button>
        </x-input-element>
    </x-input-group>
</x-field>
```

## Accessibility

The InputElement component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation (Tab, Enter)
- Provides clear interactive elements
- Should be used within InputGroup for proper structure
- Announces element content to screen readers
- Supports proper ARIA attributes for interactive elements

