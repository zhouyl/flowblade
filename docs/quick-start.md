# Quick Start Guide

Get started with Flowblade in 5 minutes!

## Installation

```bash
composer require mellivora/flowblade
```

## Configuration

Update your `tailwind.config.js`:

```javascript
export default {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/mellivora/flowblade/resources/views/**/*.blade.php",
  ],
}
```

Compile assets:

```bash
npm run dev
```

## Basic Components

### Button

```blade
<x-button color="primary">Click Me</x-button>
<x-button color="success" left-icon="heroicons:check">Success</x-button>
<x-button variant="outline">Outline</x-button>
```

### Input

```blade
<x-input placeholder="Enter your name" />
<x-input type="email" placeholder="your@email.com" />
<x-textarea placeholder="Your message" rows="4" />
```

### Box & Layout

```blade
<x-box p="6" bg="blue.500" rounded="lg" color="white">
    Styled box
</x-box>

<x-flex gap="4" justify="between">
    <div>Left</div>
    <div>Right</div>
</x-flex>

<x-grid columns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>
```

### Card

```blade
<x-card shadow="md" rounded="lg">
    <x-card-body>
        <x-heading size="lg">Card Title</x-heading>
        <x-text color="gray.600">Card content</x-text>
    </x-card-body>
</x-card>
```

### Alert

```blade
<x-alert status="success">Success message</x-alert>
<x-alert status="warning">Warning message</x-alert>
<x-alert status="danger">Error message</x-alert>
```

## Style Props

All components support Style Props for flexible styling:

```blade
{{-- Spacing --}}
<x-box p="6" px="8" py="4">Padding</x-box>
<x-box m="4" mx="auto">Margin</x-box>

{{-- Sizing --}}
<x-box w="full" h="64">Width and height</x-box>
<x-box minW="xs" maxW="2xl">Min/max width</x-box>

{{-- Colors --}}
<x-box bg="primary" color="white">Colors</x-box>
<x-box bg="blue.500" color="gray.700">Color scales</x-box>

{{-- Layout --}}
<x-box display="flex" gap="4" justify="between">Flexbox</x-box>
<x-box display="grid" gridTemplateColumns="3" gap="4">Grid</x-box>

{{-- Typography --}}
<x-box fontSize="lg" fontWeight="bold" textAlign="center">Text</x-box>

{{-- Effects --}}
<x-box shadow="md" rounded="lg" opacity="75">Effects</x-box>
```

## Forms

```blade
<x-box p="8" shadow="lg" rounded="xl" maxW="md" mx="auto">
    <x-vstack spacing="md">
        <x-heading size="lg">Sign In</x-heading>
        
        <div>
            <label class="block text-sm font-medium mb-2">Email</label>
            <x-input type="email" placeholder="your@email.com" />
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-2">Password</label>
            <x-input type="password" />
        </div>
        
        <x-checkbox>Remember me</x-checkbox>
        
        <x-button color="primary" class="w-full">Sign In</x-button>
    </x-vstack>
</x-box>
```

## Navigation

```blade
<x-navbar bg="white" shadow="md">
    <x-navbar-brand href="/">MyApp</x-navbar-brand>
    
    <x-navbar-collapse>
        <x-navbar-link href="/features">Features</x-navbar-link>
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
    </x-navbar-collapse>
    
    <x-button color="primary">Sign In</x-button>
</x-navbar>
```

## Icons

```blade
{{-- Basic Icon --}}
<x-icon name="heroicons:home" />

{{-- Colored Icon --}}
<x-icon name="heroicons:heart" color="danger" size="24px" />

{{-- In Button --}}
<x-button left-icon="heroicons:check">Confirm</x-button>
```

Browse icons at: https://icon-sets.iconify.design/

## Livewire Integration

```blade
<x-input wire:model="name" />
<x-button wire:click="save" color="primary">Save</x-button>
<x-checkbox wire:model="agreed" />
```

## Alpine.js Integration

```blade
<div x-data="{ count: 0 }">
    <x-button @click="count++">Increment</x-button>
    <span x-text="count"></span>
</div>
```

## Common Patterns

### Dashboard Stats

```blade
<x-grid columns="4" gap="4">
    <x-card shadow="md">
        <x-card-body>
            <x-vstack spacing="xs">
                <x-text color="gray.600" fontSize="sm">Total Users</x-text>
                <x-heading size="2xl">1,234</x-heading>
                <x-text color="green.600" fontSize="sm">+12% from last month</x-text>
            </x-vstack>
        </x-card-body>
    </x-card>
</x-grid>
```

### Data Table

```blade
<x-table>
    <x-table-head>
        <x-table-row>
            <x-table-cell>Name</x-table-cell>
            <x-table-cell>Email</x-table-cell>
            <x-table-cell>Status</x-table-cell>
        </x-table-row>
    </x-table-head>
    <x-table-body>
        @foreach($users as $user)
            <x-table-row>
                <x-table-cell>{{ $user->name }}</x-table-cell>
                <x-table-cell>{{ $user->email }}</x-table-cell>
                <x-table-cell>
                    <x-badge color="success">Active</x-badge>
                </x-table-cell>
            </x-table-row>
        @endforeach
    </x-table-body>
</x-table>
```

### Modal Dialog

```blade
<x-button @click="open = true">Open Modal</x-button>

<x-modal x-show="open" @close="open = false">
    <x-modal-header>
        <x-heading size="lg">Confirm Action</x-heading>
    </x-modal-header>
    
    <x-modal-body>
        <x-text>Are you sure you want to proceed?</x-text>
    </x-modal-body>
    
    <x-modal-footer>
        <x-button variant="outline" @click="open = false">Cancel</x-button>
        <x-button color="danger">Confirm</x-button>
    </x-modal-footer>
</x-modal>
```

## Next Steps

- Read the [Installation Guide](installation.md)
- Explore [Components Documentation](components/README.md)
- Learn about [Style Props System](traits/has-style-props.md)
- Check [Development Standards](STANDARDS.md)

## Resources

- [Flowbite Documentation](https://flowbite.com/)
- [Tailwind CSS Documentation](https://tailwindcss.com/)
- [Chakra UI Documentation](https://chakra-ui.com/)
- [Iconify Icons](https://icon-sets.iconify.design/)

## Need Help?

- Check the [Components Documentation](components/README.md)
- Review [Installation Guide](installation.md)
- Open an [Issue on GitHub](https://github.com/zhouyl/flowblade/issues)

