# Divider Component

Enhanced separator with text/icon support for visually dividing content sections. Divider provides a flexible way to separate content with optional text or icons.

## Basic Usage

```blade
<x-divider />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `variant` | string | `'solid'` | Border style: `solid`, `dashed`, `dotted` |
| `align` | string | `'center'` | Text alignment: `left`, `center`, `right` |
| `icon` | string | `''` | Icon name (Iconify format) |
| `text` | string | `''` | Divider text |

### Style Props

Divider supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Examples

### Basic Divider

```blade
<x-divider />
```

### With Text

```blade
<x-divider text="OR" />
```

### With Icon

```blade
<x-divider icon="heroicons:star" />
```

### With Custom Content

```blade
<x-divider>
    <x-text as="span" fontWeight="bold">Section Break</x-text>
</x-divider>
```

### Text Alignment

```blade
{{-- Left aligned --}}
<x-divider text="Left" align="left" />

{{-- Center aligned (default) --}}
<x-divider text="Center" align="center" />

{{-- Right aligned --}}
<x-divider text="Right" align="right" />
```

### Border Variants

```blade
{{-- Solid (default) --}}
<x-divider variant="solid" />

{{-- Dashed --}}
<x-divider variant="dashed" />

{{-- Dotted --}}
<x-divider variant="dotted" />
```

### Vertical Divider

```blade
<x-flex align="center" gap="4" h="12">
    <x-text as="span">Item 1</x-text>
    <x-divider orientation="vertical" />
    <x-text as="span">Item 2</x-text>
    <x-divider orientation="vertical" />
    <x-text as="span">Item 3</x-text>
</x-flex>
```

### Login Form Example

```blade
<x-box as="form">
    <x-field label="Email">
        <x-input type="email" placeholder="your@email.com" />
    </x-field>

    <x-field label="Password">
        <x-password-input placeholder="••••••••" />
    </x-field>

    <x-button type="submit" w="full">Sign In</x-button>
</x-box>

<x-divider text="OR" my="6" />

<x-button variant="outline" w="full">
    <x-icon name="logos:google-icon" w="5" h="5" mr="2" />
    Continue with Google
</x-button>
```

### Section Dividers

```blade
<x-vstack spacing="6">
    <x-box as="section">
        <x-heading as="h2" fontSize="xl" fontWeight="bold" mb="4">Personal Information</x-heading>
        <x-text>Your personal details...</x-text>
    </x-box>

    <x-divider text="Account Settings" />

    <x-box as="section">
        <x-heading as="h2" fontSize="xl" fontWeight="bold" mb="4">Account Settings</x-heading>
        <x-text>Manage your account...</x-text>
    </x-box>

    <x-divider text="Security" />

    <x-box as="section">
        <x-heading as="h2" fontSize="xl" fontWeight="bold" mb="4">Security</x-heading>
        <x-text>Security settings...</x-text>
    </x-box>
</x-vstack>
```

### With Icons and Text

```blade
<x-divider icon="heroicons:star" text="Featured" />

<x-divider icon="heroicons:fire" text="Hot Deals" />

<x-divider icon="heroicons:sparkles" text="New Arrivals" />
```

### Dashed Dividers

```blade
<x-divider variant="dashed" text="Step 1" />
<x-text>Complete your profile...</x-text>

<x-divider variant="dashed" text="Step 2" />
<x-text>Verify your email...</x-text>

<x-divider variant="dashed" text="Step 3" />
<x-text>Start using the app...</x-text>
```

### Dotted Dividers

```blade
<x-divider variant="dotted" />

<x-divider variant="dotted" text="More Options" />
```

### Custom Styling

```blade
<x-divider
    text="Premium Content"
    my="8"
/>

<x-divider
    text="VIP Section"
    class="border-yellow-500 dark:border-yellow-400"
/>
```

### Sidebar Navigation

```blade
<x-box as="nav" w="64" p="4">
    <x-box as="a" href="#" display="block" py="2">Dashboard</x-box>
    <x-box as="a" href="#" display="block" py="2">Profile</x-box>
    <x-box as="a" href="#" display="block" py="2">Settings</x-box>

    <x-divider my="4" />

    <x-box as="a" href="#" display="block" py="2">Help</x-box>
    <x-box as="a" href="#" display="block" py="2">Logout</x-box>
</x-box>
```

### Content Sections

```blade
<x-box as="article">
    <x-heading as="h1">Article Title</x-heading>
    <x-text>Introduction paragraph...</x-text>

    <x-divider icon="heroicons:document-text" text="Main Content" my="6" />

    <x-text>Main content...</x-text>

    <x-divider icon="heroicons:chat-bubble-left-right" text="Comments" my="6" />

    <x-box class="comments">
        <!-- Comments here -->
    </x-box>
</x-box>
```

### Pricing Table

```blade
<x-grid columns="3" gap="6">
    <x-box border="1" rounded="lg" p="6">
        <x-heading as="h3" fontSize="xl" fontWeight="bold">Basic</x-heading>
        <x-text fontSize="3xl" fontWeight="bold" my="4">$9/mo</x-text>
        <x-divider my="4" />
        <x-box as="ul" class="space-y-2">
            <x-box as="li">Feature 1</x-box>
            <x-box as="li">Feature 2</x-box>
        </x-box>
    </x-box>

    <x-box border="1" rounded="lg" p="6">
        <x-heading as="h3" fontSize="xl" fontWeight="bold">Pro</x-heading>
        <x-text fontSize="3xl" fontWeight="bold" my="4">$29/mo</x-text>
        <x-divider my="4" />
        <x-box as="ul" class="space-y-2">
            <x-box as="li">All Basic features</x-box>
            <x-box as="li">Feature 3</x-box>
            <x-box as="li">Feature 4</x-box>
        </x-box>
    </x-box>

    <x-box border="1" rounded="lg" p="6">
        <x-heading as="h3" fontSize="xl" fontWeight="bold">Enterprise</x-heading>
        <x-text fontSize="3xl" fontWeight="bold" my="4">$99/mo</x-text>
        <x-divider my="4" />
        <x-box as="ul" class="space-y-2">
            <x-box as="li">All Pro features</x-box>
            <x-box as="li">Feature 5</x-box>
            <x-box as="li">Feature 6</x-box>
        </x-box>
    </x-box>
</x-grid>
```

### Timeline with Dividers

```blade
<x-vstack spacing="4">
    <x-box>
        <x-heading as="h3" fontWeight="bold">2024</x-heading>
        <x-text>Current year events...</x-text>
    </x-box>

    <x-divider variant="dashed" />

    <x-box>
        <x-heading as="h3" fontWeight="bold">2023</x-heading>
        <x-text>Last year events...</x-text>
    </x-box>

    <x-divider variant="dashed" />

    <x-box>
        <x-heading as="h3" fontWeight="bold">2022</x-heading>
        <x-text>Previous events...</x-text>
    </x-box>
</x-vstack>
```

## Accessibility

The Divider component:
- Uses semantic HTML with proper border styling
- Supports dark mode
- Text content is readable by screen readers
- Proper contrast ratios

## Browser Support

The Divider component uses:
- CSS Flexbox for layout
- Tailwind CSS utilities
- Border styles (solid, dashed, dotted)

Supported in all modern browsers (Chrome, Firefox, Safari, Edge).

## Related Components

- [Separator](./separator.md) - Simple separator line
- [Card](../data-display/card.md) - Card with dividers
- [List](../typography/list.md) - List with dividers

