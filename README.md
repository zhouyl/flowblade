# Flowblade

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11+-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 11+">
  <img src="https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php" alt="PHP 8.3+">
  <img src="https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT License">
</p>

A modern Laravel Blade component library based on **Flowbite + Tailwind CSS**, inspired by **Chakra UI**'s elegant API design.

## ✨ Features

- 🎨 **60+ Components** - Comprehensive UI component library
- 🚀 **Chakra-UI Inspired** - Intuitive props like `color="primary"` and `size="lg"`
- 🎯 **Tailwind CSS** - Built on Tailwind's utility-first approach
- ⚡ **Alpine.js Ready** - Built-in Alpine.js integration
- 🔌 **Livewire Compatible** - Full support for `wire:model`, `wire:click`, etc.
- 🎭 **Iconify Support** - Access 100,000+ icons with `<x-icon name="heroicons:check" />`
- 🎛️ **Highly Configurable** - Customize colors, sizes, and component prefixes
- 📦 **Zero Config** - Works immediately after `composer require`

## 📦 Installation

```bash
composer require mellivora/flowblade
```

### Configure Tailwind CSS

Add Flowblade views to your `tailwind.config.js`:

```javascript
export default {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/mellivora/flowblade/resources/views/**/*.blade.php",
  ],
}
```

### Compile Assets

```bash
npm run dev
```

## 🚀 Quick Start

### Button Component

```blade
{{-- Basic Button --}}
<x-button color="primary" size="lg">Click Me</x-button>

{{-- With Icons --}}
<x-button left-icon="heroicons:home" color="success">Home</x-button>

{{-- Loading State --}}
<x-button :loading="true">Processing...</x-button>

{{-- Variants --}}
<x-button variant="solid">Solid</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
```

### Icon Component

```blade
<x-icon name="heroicons:heart" color="danger" size="24px" />
<x-icon name="mdi:account" />
<x-icon name="fa:github" />
```

### Box Component

```blade
<x-box p="6" bg="primary" rounded="lg" class="text-white">
    Beautiful box with padding and rounded corners
</x-box>
```

## 🎨 Available Props

### Colors

`primary` `secondary` `success` `warning` `danger` `info` `gray`

### Sizes

`2xs` `xs` `sm` `md` `lg` `xl` `2xl` `3xl` `4xl`

### Button Variants

`solid` `outline` `ghost` `link` `subtle`

## ⚡ Livewire Integration

```blade
<x-button wire:click="save" color="primary">Save</x-button>
<x-input wire:model="name" />
<x-checkbox wire:model="agreed" />
```

## 🏔️ Alpine.js Integration

```blade
<div x-data="{ count: 0 }">
    <x-button @click="count++">Increment</x-button>
    <span x-text="count"></span>
</div>
```

## ⚙️ Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --tag=flowblade-config
```

Edit `config/flowblade.php` to customize:

- Component prefix
- Default colors and sizes
- Color mappings
- Size mappings

## 📚 Documentation

- [Installation Guide](docs/installation.md)
- [Components Documentation](docs/components/README.md)
- [Development Plan](docs/TODO.md)

## 📝 Available Components

### Current (3/60+)

- ✅ Button
- ✅ Icon
- ✅ Box

### Coming Soon

- Layout: Container, Flex, Grid, Stack, etc.
- Typography: Heading, Text, Link, Code, etc.
- Forms: Input, Textarea, Checkbox, Select, etc.
- Overlays: Modal, Drawer, Popover, Tooltip, etc.
- Feedback: Alert, Toast, Progress, Spinner, etc.
- And many more...

See [docs/TODO.md](docs/TODO.md) for the complete development plan.

## 🤝 Contributing

This is a personal project. If you find any issues, please open an issue on GitHub.

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.

## 🔗 Links

- **GitHub**: https://github.com/zhouyl/flowblade
- **Packagist**: https://packagist.org/packages/mellivora/flowblade

