# InputAddon

InputAddon component for adding prefix or suffix content to an input field. Commonly used for currency symbols, units, or icons.

## Basic Usage

```blade
<x-input-group>
    <x-input-addon>$</x-input-addon>
    <x-input placeholder="0.00" />
</x-input-group>
```

## Props

InputAddon supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Examples

### Currency Input

```blade
<x-input-group>
    <x-input-addon>$</x-input-addon>
    <x-input type="number" placeholder="0.00" />
</x-input-group>
```

### Email Input

```blade
<x-input-group>
    <x-input-addon>@</x-input-addon>
    <x-input type="email" placeholder="example" />
    <x-input-addon>.com</x-input-addon>
</x-input-group>
```

### Phone Number

```blade
<x-input-group>
    <x-input-addon>+1</x-input-addon>
    <x-input type="tel" placeholder="(555) 000-0000" />
</x-input-group>
```

### With Icon

```blade
<x-input-group>
    <x-input-addon>
        <x-icon name="heroicons:magnifying-glass" class="w-4 h-4" />
    </x-input-addon>
    <x-input placeholder="Search..." />
</x-input-group>
```

### URL Input

```blade
<x-input-group>
    <x-input-addon>https://</x-input-addon>
    <x-input placeholder="example.com" />
</x-input-group>
```

### Percentage Input

```blade
<x-input-group>
    <x-input type="number" placeholder="0" />
    <x-input-addon>%</x-input-addon>
</x-input-group>
```

## Accessibility

The InputAddon component:
- Uses semantic HTML structure
- Works with screen readers
- Supports keyboard navigation
- Provides clear input context

