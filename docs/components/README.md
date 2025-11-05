# Components Documentation

Complete documentation for all 98 Flowblade components organized by category. Each component includes:
- ✅ Full Style Props support for flexible styling
- ✅ Comprehensive usage examples
- ✅ Accessibility guidelines
- ✅ Responsive design support
- ✅ Flowbite integration

## Component Categories

- **Layout** (16 components) - Page structure and layout
- **Button** (1 merged file) - Button variants and groups
- **Typography** (11 components) - Text and content display
- **Form** (27 components) - Input and form controls
- **Data Display** (16 components) - Data presentation
- **Navigation** (9 components) - Navigation and menus
- **Media** (5 components) - Images and galleries
- **Overlay** (6 components) - Modals and popovers
- **Feedback** (9 components) - Status and notifications
- **Disclosure** (2 components) - Collapsible content

## Style Props System

All Flowblade components support a powerful **Style Props** system that allows you to style components using intuitive props instead of writing Tailwind classes directly:

```blade
{{-- Traditional Tailwind approach --}}
<div class="p-6 bg-blue-500 rounded-lg text-white">Content</div>

{{-- Flowblade Style Props approach --}}
<x-box p="6" bg="blue.500" rounded="lg" color="white">Content</x-box>
```

### Available Style Props

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor` (supports color scales like `blue.500`)
- **Borders**: `border`, `rounded`, `borderRadius`, `borderStyle`
- **Layout**: `display`, `position`, `zIndex`, `overflow`, `overflowX`, `overflowY`
- **Typography**: `fontSize`, `fontWeight`, `textAlign`, `lineHeight`, `letterSpacing`
- **Flexbox**: `flex`, `flexDirection`, `alignItems`, `justifyContent`, `gap`, `flexWrap`
- **Grid**: `gridTemplateColumns`, `gridColumn`, `gridRow`, `gap`
- **Effects**: `shadow`, `opacity`, `cursor`, `transition`

For detailed information, see [HasStyleProps trait documentation](../traits/has-style-props.md).

## Layout Components

Layout components help you structure your page and organize content.

- [Box](layout/box.md) - Flexible layout container with styling options
- [Container](layout/container.md) - Responsive container with max-width constraints
- [Center](layout/center.md) - Centers child elements using flexbox
- [AbsoluteCenter](layout/absolute-center.md) - Absolutely positions and centers content
- [Flex](layout/flex.md) - Flexible box layout with full control
- [Grid](layout/grid.md) - CSS Grid layout component
- [SimpleGrid](layout/simple-grid.md) - Simplified grid with responsive columns
- [Stack](layout/stack.md) - Stack elements with consistent spacing
- [HStack](layout/hstack.md) - Horizontal stack layout
- [VStack](layout/vstack.md) - Vertical stack layout
- [Wrap](layout/wrap.md) - Flex layout that automatically wraps items
- [Separator](layout/separator.md) - Visual divider/separator line
- [Spacer](layout/spacer.md) - Flexible space filler in flex layouts
- [Group](layout/group.md) - Enables Tailwind group hover/focus states
- [AspectRatio](layout/aspect-ratio.md) - Maintains consistent aspect ratio
- [ScrollArea](layout/scroll-area.md) - Scrollable container with custom scrollbar

## Button Components

Interactive button components with various styles and states.

- [Button](buttons/button.md) - Versatile button with multiple variants, icon buttons, close buttons, and button groups

## Typography Components

Text and typography components for content display.

- [Heading](typography/heading.md) - Heading component (h1-h6)
- [Text](typography/text.md) - Text and paragraph component
- [Link](typography/link.md) - Link component with external support
- [Code](typography/code.md) - Inline code snippets
- [CodeBlock](typography/code-block.md) - Code blocks with syntax highlighting
- [Kbd](typography/kbd.md) - Keyboard key display
- [Mark](typography/mark.md) - Highlighted text
- [Em](typography/em.md) - Italic/emphasis text
- [Strong](typography/strong.md) - Bold text
- [Blockquote](typography/blockquote.md) - Quote blocks
- [Highlight](typography/highlight.md) - Text highlighting with search

## Form Components

Form input components with validation support.

- [Input](forms/input-group.md) - Text input with variants, addons, and groups
- [Textarea](forms/textarea.md) - Multi-line text input
- [Checkbox](forms/checkbox.md) - Checkbox component
- [Radio](forms/radio.md) - Radio button component
- [Select](forms/select.md) - Select dropdown component
- [NativeSelect](forms/native-select.md) - Native HTML select element
- [Datepicker](forms/datepicker.md) - Date picker with range and inline variants
- [Timepicker](forms/timepicker.md) - Time picker component
- [Label](forms/label.md) - Semantic label component for form inputs
- [FloatingLabel](forms/floating-label.md) - Floating label inputs, textareas, and selects
- [Switch](forms/switch_.md) - Toggle switch component
- [PhoneInput](forms/phone-input.md) - Phone number input with country support
- [PinInput](forms/pin-input.md) - PIN/OTP input component
- [NumberInput](forms/number-input.md) - Number input with increment/decrement
- [PasswordInput](forms/password-input.md) - Password input with visibility toggle
- [SearchInput](forms/search-input.md) - Search input component
- [RangeSlider](forms/range-slider.md) - Range slider component
- [Slider](forms/slider.md) - Slider component
- [FileUpload](forms/file-upload.md) - File upload component
- [Clipboard](forms/clipboard.md) - Copy to clipboard component
- [Editable](forms/editable.md) - Inline editable text
- [Field](forms/field.md) - Form field wrapper with label and error
- [Fieldset](forms/fieldset.md) - Form fieldset wrapper
- [Form](forms/form.md) - Form wrapper component
- [TagsInput](forms/tags-input.md) - Tags input component

## Data Display Components

Components for displaying data and content.

- [Card](data-display/card.md) - Card container with header, body, and footer
- [List](data-display/list.md) - List component with items (class: `List_`)
- [Table](data-display/table.md) - Data table component
- [Avatar](data-display/avatar.md) - Avatar component with initials or images
- [Badge](data-display/badge.md) - Badge component for labels and tags
- [Tag](data-display/tag.md) - Tag component
- [Rating](data-display/rating.md) - Star rating component
- [Stat](data-display/stat.md) - Statistics display component
- [Timeline](data-display/timeline.md) - Timeline component with items
- [TreeView](data-display/tree-view.md) - Tree view component
- [DataList](data-display/data-list.md) - Data list component with items
- [ChatBubble](data-display/chat-bubble.md) - Chat bubble component
- [Indicator](data-display/indicator.md) - Status indicator component
- [ColorSwatch](data-display/color-swatch.md) - Color swatch component
- [Icon](data-display/icon.md) - Iconify icon component (100,000+ icons)

## Navigation Components

Navigation and menu components for page structure.

- [Navbar](navigation/navbar.md) - Navigation bar with brand, links, and collapse
- [Sidebar](navigation/sidebar.md) - Sidebar navigation with items and groups
- [Breadcrumb](navigation/breadcrumb.md) - Breadcrumb navigation
- [Steps](navigation/steps.md) - Step indicator component
- [Pagination](navigation/pagination.md) - Pagination component
- [Tabs](navigation/tabs.md) - Tab navigation component
- [Menu](overlay/menu.md) - Dropdown menu component
- [MegaMenu](navigation/mega-menu.md) - Mega menu component
- [SpeedDial](navigation/speed-dial.md) - Speed dial floating action menu

## Media Components

Media display components for images, videos, and galleries.

- [Image](media/image.md) - Image component with lazy loading
- [Gallery](media/gallery.md) - Image gallery component
- [Carousel](media/carousel.md) - Carousel/slider component
- [Video](media/video.md) - Video player component
- [QRCode](media/qrcode.md) - QR code generator component

## Overlay Components

Overlay and modal components for dialogs and popovers.

- [Modal](overlay/modal.md) - Modal dialog component
- [Drawer](overlay/drawer.md) - Drawer/sidebar overlay component
- [Popover](overlay/popover.md) - Popover component
- [Tooltip](overlay/tooltip.md) - Tooltip component
- [HoverCard](overlay/hover-card.md) - Hover card component
- [Menu](overlay/menu.md) - Dropdown menu component

## Feedback Components

Feedback and status components for user feedback.

- [Alert](feedback/alert.md) - Alert component
- [Banner](feedback/banner.md) - Banner component
- [Toast](feedback/toast.md) - Toast notification component
- [Progress](feedback/progress.md) - Progress bar component
- [ProgressCircle](feedback/progress-circle.md) - Circular progress component
- [Spinner](feedback/spinner.md) - Loading spinner component
- [Skeleton](feedback/skeleton.md) - Skeleton loading component
- [Status](feedback/status.md) - Status indicator component
- [Empty](feedback/empty.md) - Empty state component (class: `Empty_`)

## Disclosure Components

Disclosure and collapsible components.

- [Accordion](disclosure/accordion.md) - Accordion component with items
- [Collapsible](disclosure/collapsible.md) - Collapsible component

## Component Reference Table

### Button Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Button | `<button>` | None | [button.md](buttons/button.md) |
| IconButton | `<button>` | None | [button.md](buttons/button.md) |
| CloseButton | `<button>` | None | [button.md](buttons/button.md) |
| ButtonGroup | `<div>` | None | [button.md](buttons/button.md) |

### Form Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Input | `<input>` | None | [input-group.md](forms/input-group.md) |
| Textarea | `<textarea>` | None | [textarea.md](forms/textarea.md) |
| Checkbox | `<input type="checkbox">` | None | [checkbox.md](forms/checkbox.md) |
| Radio | `<input type="radio">` | None | [radio.md](forms/radio.md) |
| Select | `<select>` | None | [select.md](forms/select.md) |
| NativeSelect | `<select>` | None | [native-select.md](forms/native-select.md) |
| Datepicker | `<input>` | Flowbite JS | [datepicker.md](forms/datepicker.md) |
| Timepicker | `<input>` | Flowbite JS | [timepicker.md](forms/timepicker.md) |
| Label | `<label>` | None | [label.md](forms/label.md) |
| FloatingLabel | `<input>` | None | [floating-label.md](forms/floating-label.md) |
| Switch | `<input type="checkbox">` | None | [switch_.md](forms/switch_.md) |
| PhoneInput | `<input>` | None | [phone-input.md](forms/phone-input.md) |
| PinInput | `<input>` | None | [pin-input.md](forms/pin-input.md) |
| NumberInput | `<input type="number">` | None | [number-input.md](forms/number-input.md) |
| PasswordInput | `<input type="password">` | None | [password-input.md](forms/password-input.md) |
| SearchInput | `<input type="search">` | None | [search-input.md](forms/search-input.md) |
| RangeSlider | `<input type="range">` | None | [range-slider.md](forms/range-slider.md) |
| Slider | `<input type="range">` | None | [slider.md](forms/slider.md) |
| FileUpload | `<input type="file">` | None | [file-upload.md](forms/file-upload.md) |
| Clipboard | `<button>` | None | [clipboard.md](forms/clipboard.md) |
| Editable | `<div>` | Alpine.js | [editable.md](forms/editable.md) |
| Field | `<div>` | None | [field.md](forms/field.md) |
| Fieldset | `<fieldset>` | None | [fieldset.md](forms/fieldset.md) |
| Form | `<form>` | None | [form.md](forms/form.md) |
| TagsInput | `<div>` | Alpine.js | [tags-input.md](forms/tags-input.md) |

### Layout Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Box | `<div>` | None | [box.md](layout/box.md) |
| Container | `<div>` | None | [container.md](layout/container.md) |
| Center | `<div>` | None | [center.md](layout/center.md) |
| AbsoluteCenter | `<div>` | None | [absolute-center.md](layout/absolute-center.md) |
| Flex | `<div>` | None | [flex.md](layout/flex.md) |
| Grid | `<div>` | None | [grid.md](layout/grid.md) |
| SimpleGrid | `<div>` | None | [simple-grid.md](layout/simple-grid.md) |
| Stack | `<div>` | None | [stack.md](layout/stack.md) |
| HStack | `<div>` | None | [stack.md](layout/stack.md) |
| VStack | `<div>` | None | [stack.md](layout/stack.md) |
| Wrap | `<div>` | None | [wrap.md](layout/wrap.md) |
| Separator | `<div>` | None | [separator.md](layout/separator.md) |
| Spacer | `<div>` | None | [spacer.md](layout/spacer.md) |
| Group | `<div>` | None | [group.md](layout/group.md) |
| AspectRatio | `<div>` | None | [aspect-ratio.md](layout/aspect-ratio.md) |
| ScrollArea | `<div>` | None | [scroll-area.md](layout/scroll-area.md) |

### Data Display Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Card | `<div>` | None | [card.md](data-display/card.md) |
| List | `<ul>` | None | [list.md](data-display/list.md) |
| Table | `<table>` | Alpine.js | [table.md](data-display/table.md) |
| Avatar | `<div>` | None | [avatar.md](data-display/avatar.md) |
| Badge | `<span>` | None | [badge.md](data-display/badge.md) |
| Tag | `<span>` | Alpine.js | [tag.md](data-display/tag.md) |
| Rating | `<div>` | None | [rating.md](data-display/rating.md) |
| Stat | `<div>` | None | [stat.md](data-display/stat.md) |
| Timeline | `<div>` | Alpine.js | [timeline.md](data-display/timeline.md) |
| TreeView | `<div>` | Alpine.js | [tree-view.md](data-display/tree-view.md) |
| DataList | `<div>` | Alpine.js | [data-list.md](data-display/data-list.md) |
| ChatBubble | `<div>` | None | [chat-bubble.md](data-display/chat-bubble.md) |
| Indicator | `<div>` | None | [indicator.md](data-display/indicator.md) |
| ColorSwatch | `<div>` | None | [color-swatch.md](data-display/color-swatch.md) |
| Icon | `<svg>` | None | [icon.md](data-display/icon.md) |

### Navigation Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Navbar | `<nav>` | None | [navbar.md](navigation/navbar.md) |
| Sidebar | `<aside>` | None | [sidebar.md](navigation/sidebar.md) |
| Breadcrumb | `<nav>` | None | [breadcrumb.md](navigation/breadcrumb.md) |
| Steps | `<div>` | None | [steps.md](navigation/steps.md) |
| Pagination | `<nav>` | None | [pagination.md](navigation/pagination.md) |
| Tabs | `<div>` | None | [tabs.md](navigation/tabs.md) |
| Menu | `<div>` | Flowbite JS | [menu.md](overlay/menu.md) |
| MegaMenu | `<nav>` | None | [mega-menu.md](navigation/mega-menu.md) |
| SpeedDial | `<div>` | None | [speed-dial.md](navigation/speed-dial.md) |

### Media Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Image | `<img>` | None | [image.md](media/image.md) |
| Gallery | `<div>` | None | [gallery.md](media/gallery.md) |
| Carousel | `<div>` | None | [carousel.md](media/carousel.md) |
| Video | `<video>` | None | [video.md](media/video.md) |
| QRCode | `<div>` | None | [qrcode.md](media/qrcode.md) |

### Overlay Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Modal | `<div>` | Flowbite JS | [modal.md](overlay/modal.md) |
| Drawer | `<div>` | Flowbite JS | [drawer.md](overlay/drawer.md) |
| Popover | `<div>` | Flowbite JS | [popover.md](overlay/popover.md) |
| Tooltip | `<div>` | Flowbite JS | [tooltip.md](overlay/tooltip.md) |
| HoverCard | `<div>` | Flowbite JS | [hover-card.md](overlay/hover-card.md) |

### Feedback Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Alert | `<div>` | None | [alert.md](feedback/alert.md) |
| Banner | `<div>` | None | [banner.md](feedback/banner.md) |
| Toast | `<div>` | Flowbite JS | [toast.md](feedback/toast.md) |
| Progress | `<div>` | None | [progress.md](feedback/progress.md) |
| ProgressCircle | `<svg>` | None | [progress-circle.md](feedback/progress-circle.md) |
| Spinner | `<div>` | None | [spinner.md](feedback/spinner.md) |
| Skeleton | `<div>` | None | [skeleton.md](feedback/skeleton.md) |
| Status | `<div>` | None | [status.md](feedback/status.md) |
| Empty | `<div>` | None | [empty.md](feedback/empty.md) |

### Typography Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Heading | `<h1-h6>` | None | [heading.md](typography/heading.md) |
| Text | `<p>` | None | [text.md](typography/text.md) |
| Link | `<a>` | None | [link.md](typography/link.md) |
| Code | `<code>` | None | [code.md](typography/code.md) |
| CodeBlock | `<pre>` | None | [code-block.md](typography/code-block.md) |
| Kbd | `<kbd>` | None | [kbd.md](typography/kbd.md) |
| Mark | `<mark>` | None | [mark.md](typography/mark.md) |
| Em | `<em>` | None | [em.md](typography/em.md) |
| Strong | `<strong>` | None | [strong.md](typography/strong.md) |
| Blockquote | `<blockquote>` | None | [blockquote.md](typography/blockquote.md) |
| Highlight | `<div>` | None | [highlight.md](typography/highlight.md) |

### Disclosure Components

| Component | HTML Tag | Dependencies | Documentation |
|-----------|----------|--------------|----------------|
| Accordion | `<div>` | None | [accordion.md](disclosure/accordion.md) |
| Collapsible | `<div>` | None | [collapsible.md](disclosure/collapsible.md) |

## Quick Reference

### Layout

```blade
{{-- Container --}}
<x-container max-width="7xl" px="4">
    Content
</x-container>

{{-- Center --}}
<x-center class="h-screen">
    Centered content
</x-center>

{{-- Flex --}}
<x-flex direction="row" justify="between" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
</x-flex>

{{-- Grid --}}
<x-grid columns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>

{{-- Stack --}}
<x-vstack spacing="md">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

<x-hstack spacing="lg" justify="between">
    <div>Left</div>
    <div>Right</div>
</x-hstack>

{{-- Separator --}}
<x-separator />
<x-separator orientation="vertical" length="6" />

{{-- Spacer --}}
<x-flex>
    <div>Left</div>
    <x-spacer />
    <div>Right</div>
</x-flex>

{{-- Box --}}
<x-box p="6" bg="primary" rounded="lg" shadow="md">
    Content
</x-box>
```

### Buttons

```blade
{{-- Basic Button --}}
<x-button color="primary">Click Me</x-button>

{{-- With Icons --}}
<x-button left-icon="heroicons:home">Home</x-button>

{{-- Loading State --}}
<x-button :loading="true">Processing...</x-button>

{{-- Variants --}}
<x-button variant="solid">Solid</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
```

### Icons

```blade
{{-- Basic Icon --}}
<x-icon name="heroicons:home" />

{{-- Colored Icon --}}
<x-icon name="heroicons:heart" color="danger" size="24px" />

{{-- Different Collections --}}
<x-icon name="mdi:account" />
<x-icon name="fa:github" />
<x-icon name="bi:house" />
```

## Common Patterns

### Page Layout

```blade
<x-container max-width="7xl" px="4" py="8">
    <x-vstack spacing="lg">
        <header>
            <h1 class="text-3xl font-bold">Page Title</h1>
        </header>
        
        <main>
            <x-grid columns="3" gap="6">
                {{-- Content --}}
            </x-grid>
        </main>
        
        <footer>
            <x-separator class="mb-4" />
            <p class="text-gray-600">Footer content</p>
        </footer>
    </x-vstack>
</x-container>
```

### Navigation Bar

```blade
<x-hstack align="center" justify="between" class="p-4 bg-white shadow">
    <div class="text-xl font-bold">Logo</div>
    
    <x-hstack spacing="md">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </x-hstack>
    
    <x-button>Sign In</x-button>
</x-hstack>
```

### Card Grid

```blade
<x-grid columns="3" gap="6">
    @foreach($items as $item)
        <x-box p="6" shadow="lg" rounded="xl">
            <x-vstack spacing="md">
                <x-icon name="heroicons:star" size="32px" color="primary" />
                <h3 class="font-bold">{{ $item->title }}</h3>
                <p class="text-gray-600">{{ $item->description }}</p>
                <x-button color="primary" class="w-full">Learn More</x-button>
            </x-vstack>
        </x-box>
    @endforeach
</x-grid>
```

### Form Layout

```blade
<x-box p="8" shadow="lg" rounded="xl" class="max-w-md mx-auto">
    <x-vstack spacing="md">
        <h2 class="text-2xl font-bold">Sign In</h2>
        
        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <x-input type="email" />
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <x-input type="password" />
        </div>
        
        <x-button color="primary" class="w-full">Sign In</x-button>
        
        <x-separator />
        
        <x-button variant="outline" class="w-full" left-icon="fa-brands:google">
            Continue with Google
        </x-button>
    </x-vstack>
</x-box>
```

### Dashboard Stats

```blade
<x-grid columns="4" gap="4">
    <x-box p="6" shadow="md" rounded="lg">
        <x-vstack spacing="xs">
            <x-hstack align="center" justify="between">
                <span class="text-sm text-gray-600">Total Users</span>
                <x-icon name="heroicons:users" class="text-blue-500" />
            </x-hstack>
            <div class="text-3xl font-bold">1,234</div>
            <div class="text-sm text-green-600">+12% from last month</div>
        </x-vstack>
    </x-box>
    
    {{-- More stat cards... --}}
</x-grid>
```

## Tips

1. **Combine Components**: Mix and match components to create complex layouts
2. **Use Spacing**: Leverage `spacing` props in Stack components for consistent gaps
3. **Responsive Design**: Add Tailwind responsive classes for mobile-first design
4. **Color Consistency**: Use the built-in color system for consistent theming
5. **Icons**: Browse https://icon-sets.iconify.design/ for available icons

## Next Steps

- Explore individual component documentation for detailed examples
- Check out the [Installation Guide](../installation.md)
- Review the [Development Plan](../TODO.md) for upcoming components

