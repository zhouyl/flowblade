# Flowblade

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11+-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 11+">
  <img src="https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php" alt="PHP 8.3+">
  <img src="https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT License">
</p>

A modern Laravel Blade component library based on **Flowbite + Tailwind CSS**, with an intuitive Style Props API for elegant component styling.

## ✨ Features

- 🎨 **138+ Components** - Comprehensive UI component library
- 🚀 **Style Props System** - Intuitive props like `color="primary"` and `size="lg"` for flexible styling
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

## 🎨 Style Props System

Flowblade includes a powerful **Style Props** system that allows you to style components using intuitive props instead of writing Tailwind classes directly:

### Spacing Props

```blade
{{-- Padding --}}
<x-box p="6">All sides</x-box>
<x-box px="4" py="8">Horizontal and vertical</x-box>
<x-box pt="2" pr="4" pb="6" pl="8">Individual sides</x-box>

{{-- Margin --}}
<x-box m="4">All sides</x-box>
<x-box mx="auto">Horizontal centering</x-box>
<x-box my="6">Vertical margin</x-box>
```

### Sizing Props

```blade
{{-- Width and Height --}}
<x-box w="full" h="64">Full width, 16rem height</x-box>
<x-box w="1/2" h="auto">Half width, auto height</x-box>
<x-box minW="xs" maxW="2xl">Min/max width constraints</x-box>
<x-box minH="screen" maxH="96">Min/max height constraints</x-box>
```

### Color Props

```blade
{{-- Background and Text Colors --}}
<x-box bg="primary" color="white">Primary background</x-box>
<x-box bg="blue.500" color="gray.700">Using color scales</x-box>
<x-box borderColor="red.300">Border color</x-box>
```

### Layout Props

```blade
{{-- Display and Position --}}
<x-box display="flex" position="relative">Flex layout</x-box>
<x-box display="grid" zIndex="10">Grid layout</x-box>
<x-box overflow="hidden" overflowY="auto">Overflow control</x-box>
```

### Flexbox Props

```blade
{{-- Flex Container --}}
<x-box flex="1" flexDirection="column" alignItems="center" justifyContent="between" gap="4">
    Flex layout with gap
</x-box>
```

### Typography Props

```blade
{{-- Text Styling --}}
<x-box fontSize="lg" fontWeight="bold" textAlign="center" lineHeight="tight">
    Styled text
</x-box>
```

### Border and Radius Props

```blade
{{-- Borders and Rounded Corners --}}
<x-box border="2" borderColor="gray.300" rounded="lg">Bordered box</x-box>
<x-box rounded="full">Fully rounded</x-box>
<x-box borderRadius="xl">Large radius</x-box>
```

### Shadow and Effects Props

```blade
{{-- Shadows and Effects --}}
<x-box shadow="md" opacity="75">Box with shadow</x-box>
<x-box shadow="lg" cursor="pointer" transition="all">Interactive box</x-box>
```

### Available Color Scales

`primary` `secondary` `success` `warning` `danger` `info` `gray` `blue` `red` `green` `yellow` `purple` `pink` `indigo` `cyan` `teal`

Each color supports scales: `50`, `100`, `200`, `300`, `400`, `500`, `600`, `700`, `800`, `900`

### Available Sizes

`2xs` `xs` `sm` `md` `lg` `xl` `2xl` `3xl` `4xl`

### Button Variants

`solid` `outline` `ghost` `link` `subtle`

## 💡 Advanced Examples

### Form with Validation

```blade
<x-box p="8" shadow="lg" rounded="xl" maxW="md" mx="auto">
    <x-vstack spacing="md">
        <x-heading size="lg">Contact Form</x-heading>

        <div>
            <label class="block text-sm font-medium mb-2">Name</label>
            <x-input placeholder="Your name" />
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Email</label>
            <x-input type="email" placeholder="your@email.com" />
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Message</label>
            <x-textarea placeholder="Your message" rows="4" />
        </div>

        <x-hstack spacing="md" justify="end">
            <x-button variant="outline">Cancel</x-button>
            <x-button color="primary">Send</x-button>
        </x-hstack>
    </x-vstack>
</x-box>
```

### Dashboard Card Grid

```blade
<x-grid columns="4" gap="6">
    @foreach($stats as $stat)
        <x-card shadow="md" rounded="lg">
            <x-card-body>
                <x-vstack spacing="md">
                    <x-hstack justify="between" align="start">
                        <x-vstack spacing="xs">
                            <x-text color="gray.600" fontSize="sm">{{ $stat['label'] }}</x-text>
                            <x-heading size="2xl">{{ $stat['value'] }}</x-heading>
                        </x-vstack>
                        <x-icon :name="$stat['icon']" size="32px" color="primary" />
                    </x-hstack>
                    <x-text color="green.600" fontSize="sm">{{ $stat['change'] }}</x-text>
                </x-vstack>
            </x-card-body>
        </x-card>
    @endforeach
</x-grid>
```

### Navigation with Dropdown

```blade
<x-navbar bg="white" shadow="md">
    <x-navbar-brand href="/">
        <x-heading size="lg">MyApp</x-heading>
    </x-navbar-brand>

    <x-navbar-collapse>
        <x-navbar-link href="/features">Features</x-navbar-link>
        <x-navbar-link href="/pricing">Pricing</x-navbar-link>
        <x-navbar-link href="/docs">Documentation</x-navbar-link>
    </x-navbar-collapse>

    <x-hstack spacing="md">
        <x-button variant="ghost">Sign In</x-button>
        <x-button color="primary">Get Started</x-button>
    </x-hstack>
</x-navbar>
```

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

- [Quick Start Guide](docs/quick-start.md) - Get started in 5 minutes
- [Installation Guide](docs/installation.md) - Step-by-step setup instructions
- [Components Documentation](docs/components/README.md) - Complete component reference
- [Style Props System](docs/traits/has-style-props.md) - Intuitive styling with props
- [Development Plan](docs/TODO.md) - Project roadmap and progress

## 📝 Available Components

### Current Progress: 138/60+ (230% of Initial Goal! 🎉)

All components include:
- ✅ **Style Props Support** - Intuitive styling system with semantic props
- ✅ **Complete Documentation** - Detailed usage examples and API reference
- ✅ **Accessibility Features** - WCAG 2.1 compliant with keyboard navigation
- ✅ **Responsive Design** - Mobile-first approach with Tailwind CSS
- ✅ **Flowbite Integration** - Built on Flowbite design system

#### Layout Components (19) ✅
- ✅ Box, Container, Center, AbsoluteCenter
- ✅ Flex, Grid, SimpleGrid
- ✅ Stack, HStack, VStack
- ✅ Wrap, Separator, Spacer
- ✅ Group, AspectRatio, ScrollArea
- ✅ Footer, Jumbotron (hero sections with background images/gradients; 4 sizes; 3 alignments; overlay support)
- ✅ Divider (enhanced separator with text/icon support; horizontal/vertical; solid/dashed/dotted styles)

#### Button Components (4)
- ✅ Button, IconButton, CloseButton, ButtonGroup

#### Typography Components (12)
- ✅ Heading, Text, Link
- ✅ Code, CodeBlock, Kbd
- ✅ Mark, Em, Strong
- ✅ Blockquote, Highlight, List

#### Form Components (29) ✅
- ✅ Input, Textarea, PasswordInput, SearchInput
- ✅ Checkbox, Radio, Switch (Flowbite style with 9 colors; 3 sizes; label support)
- ✅ Select (enhanced with search, multi-select, Alpine.js), NativeSelect
- ✅ PhoneInput (country code selector; 30+ countries; auto-formatting; flag emojis)
- ✅ PinInput, NumberInput
- ✅ Field, Fieldset
- ✅ InputGroup, InputAddon, InputElement
- ✅ Editable, FileUpload
- ✅ Slider, RangeSlider
- ✅ Clipboard (copy to clipboard with Flowbite JS; icon/text modes; tooltip support; multiple sizes and variants)
- ✅ FloatingLabel, FloatingTextarea, FloatingSelect (Material Design style; 4 variants; smooth animations; error states)
- ✅ Datepicker, DateRangePicker, InlineDatepicker (Flowbite JS integration; autohide; action buttons; custom formats; min/max dates)
- ✅ Timepicker (HTML5 time input; clock icon; min/max time; step intervals)

#### Data Display Components (23) ✅
- ✅ Icon, Avatar, Badge, Tag, Stat
- ✅ Card (with Header, Body, Footer)
- ✅ DataList, DataListItem
- ✅ Timeline, TimelineItem
- ✅ Table (with Header, Body, Row, Head, Cell)
- ✅ TreeView, TreeViewItem
- ✅ Rating (with readonly and interactive modes; half-star support; 8 colors)
- ✅ ColorSwatch (with hex/rgb/hsl support; copyable; square/circle variants)
- ✅ ListGroup, ListGroupItem (interactive lists; links/buttons; active/disabled states; icons; badges)
- ✅ Indicator (status indicators; 8 colors; 5 sizes; 5 positions; ping animation; perfect for online/offline status)
- ✅ ChatBubble (chat messages; left/right alignment; avatars; timestamps; read status; 8 colors; message tail)
- ✅ TagsInput (with keyboard shortcuts; auto-split; max tags; prevent duplicates)

#### Navigation Components (23) ✅
- ✅ Breadcrumb, BreadcrumbItem
- ✅ Pagination (with simple, default, verbose variants, Laravel Paginator support)
- ✅ Tabs, TabsList, TabsTrigger, TabsContent (with line, enclosed, pills variants)
- ✅ Steps, StepItem (with 4 variants: default, progress, detailed, breadcrumb; horizontal/vertical layouts)
- ✅ Navbar, NavbarBrand, NavbarToggle, NavbarCollapse, NavbarLink (responsive mobile menu; Flowbite Collapse integration)
- ✅ Sidebar, SidebarItem, SidebarGroup, SidebarToggle (fixed/off-canvas modes; multi-level menus; Flowbite Drawer and Collapse integration)
- ✅ SpeedDial, SpeedDialItem (floating action buttons; 4 positions; click/hover trigger; tooltip support; perfect for quick actions)
- ✅ MegaMenu, MegaMenuColumn, MegaMenuItem (large dropdown menu; 1-4 column layout; icons and descriptions; perfect for complex navigation)

#### Disclosure Components (3)
- ✅ Accordion, AccordionItem (with default, separated, contained variants)
- ✅ Collapsible (simple expand/collapse component)

#### Overlay Components (9) ✅
- ✅ Tooltip (with top/right/bottom/left placement; hover/click trigger; dark/light styles; Flowbite integration)
- ✅ Popover (with top/right/bottom/left placement; hover/click trigger; 5 width sizes; rich content support; Flowbite integration)
- ✅ HoverCard (hover-only trigger; 4 placements; 5 width sizes; configurable delay; rich content support; Flowbite integration)
- ✅ Modal (dialog with 10 sizes; 9 placements; static/dynamic backdrop; header/body/footer slots; Flowbite integration)
- ✅ Drawer (off-canvas with 4 placements; 7 width/height sizes; backdrop control; body scrolling; edge mode; Flowbite integration)
- ✅ Menu (dropdown menu with 12 placements; click/hover trigger; 6 width sizes; icon support; Flowbite integration)
- ✅ MenuItem (menu item with href, icon, active, disabled, danger states)
- ✅ MenuDivider (horizontal divider for menu sections)
- ✅ MenuHeader (header for menu sections)

#### Feedback Components (9) ✅
- ✅ Alert (with info, success, warning, danger status; solid, subtle, left-accent, top-accent variants)
- ✅ Spinner (with spinner, dots, pulse, ring variants; 8 color options)
- ✅ Progress (with default, striped, animated variants; indeterminate state)
- ✅ ProgressCircle (SVG-based circular progress; customizable thickness; indeterminate state)
- ✅ Status (with dot, badge, pill variants; 8 status types; pulse animation)
- ✅ EmptyState (with icon, title, description; action buttons; 3 sizes)
- ✅ Toast (with auto-dismiss; 6 positions; Alpine.js integration; action buttons)
- ✅ Skeleton (loading placeholder with 8 preset types: text, image, video, card, avatar, button, circle, rectangle)
- ✅ Banner (sticky announcements with top/bottom positioning; dismissible; marketing/newsletter/informational variants; Flowbite Dismiss integration)

#### Data Display Components (1)
- ✅ Icon (100,000+ icons via Iconify)

#### Media Components (6) ✅
- ✅ QRCode (with simple-qrcode integration; 6 sizes; 4 error correction levels; SVG/PNG format; label support)
- ✅ Gallery (responsive image grid; 2-6 columns; customizable gaps; mobile-first design; lightbox integration ready)
- ✅ GalleryItem (individual gallery item; supports custom content; lazy loading; image optimization)
- ✅ Carousel (image/content slider; static/slide modes; navigation controls; Flowbite JS integration; responsive heights)
- ✅ CarouselItem (individual carousel slide; customizable animation; active state; duration/easing control)
- ✅ Video (HTML5 video player; autoplay/loop/muted; poster images; multiple sources; subtitles support; responsive)

### Coming Soon

- Forms: Select, Slider, FileUpload, etc.
- Overlays: Modal, Drawer, Popover, Tooltip, etc.
- Feedback: Alert, Toast, Progress, Spinner, etc.
- Data Display: Badge, Card, Avatar, Tag, Table, etc.
- And many more...

See [docs/TODO.md](docs/TODO.md) for the complete development plan.

## 🚀 Getting Help

### Documentation

- [Installation Guide](docs/installation.md) - Step-by-step setup instructions
- [Components Documentation](docs/components/README.md) - Complete component reference
- [Development Plan](docs/TODO.md) - Project roadmap and progress

### Resources

- [Flowbite Documentation](https://flowbite.com/) - Design system reference
- [Tailwind CSS Documentation](https://tailwindcss.com/) - Utility-first CSS framework
- [Laravel Documentation](https://laravel.com/docs) - Laravel framework reference
- [Iconify Icons](https://icon-sets.iconify.design/) - Browse available icons

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Report Issues** - Found a bug? [Open an issue](https://github.com/zhouyl/flowblade/issues)
2. **Suggest Features** - Have an idea? [Create a feature request](https://github.com/zhouyl/flowblade/issues)
3. **Submit Pull Requests** - Want to contribute code? Fork and submit a PR
4. **Improve Documentation** - Help us improve docs and examples

### Development Setup

```bash
# Clone the repository
git clone https://github.com/zhouyl/flowblade.git
cd flowblade

# Install dependencies
composer install
npm install

# Run tests
composer test

# Build documentation
npm run build
```

## 📋 Changelog

### Version 1.0.0 (Latest)

**Features:**
- ✅ 138 components with full Style Props support
- ✅ Complete documentation for all components
- ✅ Accessibility features (WCAG 2.1 compliant)
- ✅ Livewire and Alpine.js integration
- ✅ Flowbite design system integration
- ✅ 100,000+ icons via Iconify

**Improvements:**
- Enhanced component documentation with accessibility guidelines
- Added comprehensive Style Props system
- Improved responsive design support
- Better error handling and validation

**Components Added:**
- Layout: Box, Container, Center, Flex, Grid, Stack, etc.
- Forms: Input, Textarea, Select, Checkbox, Radio, etc.
- Data Display: Card, Table, Avatar, Badge, Icon, etc.
- Navigation: Navbar, Sidebar, Tabs, Breadcrumb, etc.
- Overlay: Modal, Drawer, Popover, Tooltip, etc.
- Feedback: Alert, Toast, Progress, Spinner, etc.
- Media: Image, Gallery, Carousel, Video, QRCode, etc.

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.

## 🔗 Links

- **GitHub**: https://github.com/zhouyl/flowblade
- **Packagist**: https://packagist.org/packages/mellivora/flowblade
- **Issues**: https://github.com/zhouyl/flowblade/issues
- **Discussions**: https://github.com/zhouyl/flowblade/discussions

## 💝 Support

If you find Flowblade helpful, please consider:
- ⭐ Starring the repository
- 🐛 Reporting bugs and suggesting features
- 📝 Contributing to documentation
- 🤝 Sharing with the community

