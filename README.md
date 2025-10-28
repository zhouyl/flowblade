# Flowblade

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11+-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 11+">
  <img src="https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php" alt="PHP 8.3+">
  <img src="https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT License">
</p>

A modern Laravel Blade component library based on **Flowbite + Tailwind CSS**, inspired by **Chakra UI**'s elegant API design.

## ✨ Features

- 🎨 **95+ Components** - Comprehensive UI component library (158% of initial goal!)
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

### Current Progress: 95/60+ (158% of Initial Goal! 🎉)

#### Layout Components (16)
- ✅ Box, Container, Center, AbsoluteCenter
- ✅ Flex, Grid, SimpleGrid
- ✅ Stack, HStack, VStack
- ✅ Wrap, Separator, Spacer
- ✅ Group, AspectRatio, ScrollArea

#### Button Components (4)
- ✅ Button, IconButton, CloseButton, ButtonGroup

#### Typography Components (12)
- ✅ Heading, Text, Link
- ✅ Code, CodeBlock, Kbd
- ✅ Mark, Em, Strong
- ✅ Blockquote, Highlight, List

#### Form Components (19)
- ✅ Input, Textarea, PasswordInput, SearchInput
- ✅ Checkbox, Radio, Switch
- ✅ NativeSelect, PinInput, NumberInput
- ✅ Field, Fieldset
- ✅ InputGroup, InputAddon, InputElement
- ✅ Editable, FileUpload
- ✅ Slider, RangeSlider

#### Data Display Components (19) ✅
- ✅ Icon, Avatar, Badge, Tag, Stat
- ✅ Card (with Header, Body, Footer)
- ✅ DataList, DataListItem
- ✅ Timeline, TimelineItem
- ✅ Table (with Header, Body, Row, Head, Cell)
- ✅ TreeView, TreeViewItem
- ✅ Rating (with readonly and interactive modes; half-star support; 8 colors)
- ✅ ColorSwatch (with hex/rgb/hsl support; copyable; square/circle variants)
- ✅ TagsInput (with keyboard shortcuts; auto-split; max tags; prevent duplicates)

#### Navigation Components (7)
- ✅ Breadcrumb, BreadcrumbItem
- ✅ Pagination (with simple, default, verbose variants, Laravel Paginator support)
- ✅ Tabs, TabsList, TabsTrigger, TabsContent (with line, enclosed, pills variants)

#### Disclosure Components (3)
- ✅ Accordion, AccordionItem (with default, separated, contained variants)
- ✅ Collapsible (simple expand/collapse component)

#### Overlay Components (8)
- ✅ Tooltip (with top/right/bottom/left placement; hover/click trigger; dark/light styles; Flowbite integration)
- ✅ Popover (with top/right/bottom/left placement; hover/click trigger; 5 width sizes; rich content support; Flowbite integration)
- ✅ HoverCard (hover-only trigger; 4 placements; 5 width sizes; configurable delay; rich content support; Flowbite integration)
- ✅ Modal (dialog with 10 sizes; 9 placements; static/dynamic backdrop; header/body/footer slots; Flowbite integration)
- ✅ Menu (dropdown menu with 12 placements; click/hover trigger; 6 width sizes; icon support; Flowbite integration)
- ✅ MenuItem (menu item with href, icon, active, disabled, danger states)
- ✅ MenuDivider (horizontal divider for menu sections)
- ✅ MenuHeader (header for menu sections)

#### Feedback Components (7) ✅
- ✅ Alert (with info, success, warning, danger status; solid, subtle, left-accent, top-accent variants)
- ✅ Spinner (with spinner, dots, pulse, ring variants; 8 color options)
- ✅ Progress (with default, striped, animated variants; indeterminate state)
- ✅ ProgressCircle (SVG-based circular progress; customizable thickness; indeterminate state)
- ✅ Status (with dot, badge, pill variants; 8 status types; pulse animation)
- ✅ EmptyState (with icon, title, description; action buttons; 3 sizes)
- ✅ Toast (with auto-dismiss; 6 positions; Alpine.js integration; action buttons)

#### Data Display Components (1)
- ✅ Icon (100,000+ icons via Iconify)

### Coming Soon

- Forms: Select, Slider, FileUpload, etc.
- Overlays: Modal, Drawer, Popover, Tooltip, etc.
- Feedback: Alert, Toast, Progress, Spinner, etc.
- Data Display: Badge, Card, Avatar, Tag, Table, etc.
- And many more...

See [docs/TODO.md](docs/TODO.md) for the complete development plan.

## 🤝 Issues

If you find any issues, please open an issue on GitHub.

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.

## 🔗 Links

- **GitHub**: https://github.com/zhouyl/flowblade
- **Packagist**: https://packagist.org/packages/mellivora/flowblade

