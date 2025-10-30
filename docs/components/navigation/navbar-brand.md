# NavbarBrand

NavbarBrand component for displaying the brand or logo section of a Navbar. Typically placed at the start of the navigation bar.

## Basic Usage

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <img src="/logo.png" alt="Logo" class="h-8" />
        <x-text weight="bold" class="ml-2">MyApp</x-text>
    </x-navbar-brand>
</x-navbar>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `href` | `string` | `'/'` | Brand link URL |

NavbarBrand also supports all common style props for flexible styling.

## Examples

### With Logo and Text

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <img src="/logo.png" alt="Logo" class="h-8 w-8" />
        <x-text weight="bold" size="lg" class="ml-2">Flowblade</x-text>
    </x-navbar-brand>
</x-navbar>
```

### Logo Only

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <img src="/logo.png" alt="Logo" class="h-10" />
    </x-navbar-brand>
</x-navbar>
```

### Text Only

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-heading as="h1" size="lg">MyBrand</x-heading>
    </x-navbar-brand>
</x-navbar>
```

### With Icon

```blade
<x-navbar>
    <x-navbar-brand href="/">
        <x-icon name="heroicons:rocket-launch" class="w-8 h-8 text-blue-600" />
        <x-text weight="bold" class="ml-2">Rocket</x-text>
    </x-navbar-brand>
</x-navbar>
```

## Accessibility

The NavbarBrand component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Works with screen readers
- Provides clear brand identification

