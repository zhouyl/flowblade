# Component List

## Available Components

### Layout Components (10/18)

- [x] **Box** - Flexible layout container
- [x] **Container** - Responsive container
- [x] **Center** - Centering component
- [ ] AbsoluteCenter
- [x] **Flex** - Flexible box layout
- [x] **Grid** - CSS Grid layout
- [ ] SimpleGrid
- [x] **Stack** - Vertical/horizontal stack
- [x] **HStack** - Horizontal stack
- [x] **VStack** - Vertical stack
- [ ] Wrap
- [x] **Separator** - Visual divider
- [x] **Spacer** - Flexible space
- [ ] Group
- [ ] Bleed
- [ ] Float
- [ ] AspectRatio
- [ ] ScrollArea

### Typography Components (0/12)

- [ ] Heading
- [ ] Text
- [ ] Link
- [ ] Code
- [ ] CodeBlock
- [ ] Kbd
- [ ] Mark
- [ ] Em
- [ ] Strong
- [ ] Blockquote
- [ ] Highlight
- [ ] List

### Button Components (1/4)

- [x] **Button** - Versatile button component
- [ ] IconButton
- [ ] CloseButton
- [ ] ButtonGroup

### Form Components Part 1 (0/9)

- [ ] Input
- [ ] Textarea
- [ ] Checkbox
- [ ] Radio
- [ ] Switch
- [ ] Select
- [ ] NativeSelect
- [ ] PinInput
- [ ] NumberInput

### Form Components Part 2 (0/11)

- [ ] Slider
- [ ] RangeSlider
- [ ] Field
- [ ] Fieldset
- [ ] InputGroup
- [ ] InputAddon
- [ ] InputElement
- [ ] FileUpload
- [ ] Editable
- [ ] PasswordInput
- [ ] SearchInput

### Collection Components (0/4)

- [ ] Table
- [ ] DataList
- [ ] Timeline
- [ ] TreeView

### Overlay Components (0/7)

- [ ] Modal/Dialog
- [ ] Drawer
- [ ] Popover
- [ ] Tooltip
- [ ] Menu
- [ ] HoverCard
- [ ] ContextMenu

### Feedback Components (0/8)

- [ ] Alert
- [ ] Toast
- [ ] Progress
- [ ] ProgressCircle
- [ ] Spinner
- [ ] Skeleton
- [ ] EmptyState
- [ ] Status

### Data Display Components (1/11)

- [ ] Avatar
- [ ] Badge
- [ ] Card
- [x] **Icon** - Iconify icon component
- [ ] Tag
- [ ] TagsInput
- [ ] Stat
- [ ] QrCode
- [ ] Rating
- [ ] ColorSwatch
- [ ] ColorPicker

### Disclosure Components (0/6)

- [ ] Accordion
- [ ] Tabs
- [ ] Breadcrumb
- [ ] Pagination
- [ ] Steps
- [ ] Collapsible

---

## Component Details

### Button

Versatile button component with multiple variants and states.

**Props:**
- `color`: primary, secondary, success, warning, danger, info, gray
- `size`: 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
- `variant`: solid, outline, ghost, link, subtle
- `disabled`: boolean
- `loading`: boolean
- `left-icon`: icon name
- `right-icon`: icon name
- `type`: button, submit, reset

**Example:**
```blade
<x-button color="primary" size="lg">Click Me</x-button>
<x-button left-icon="heroicons:home" color="success">Home</x-button>
<x-button :loading="true">Processing...</x-button>
```

### Icon

Iconify icon component with access to 100,000+ icons.

**Props:**
- `name`: icon name (required) - format: `collection:icon-name`
- `size`: icon size (default: 1.2em)
- `color`: icon color

**Example:**
```blade
<x-icon name="heroicons:heart" color="danger" size="24px" />
<x-icon name="mdi:account" />
<x-icon name="fa:github" />
```

**Icon Collections:**
- Heroicons: `heroicons:*`
- Material Design: `mdi:*`
- Font Awesome: `fa:*`
- Bootstrap: `bi:*`
- And many more...

Browse icons at: https://icon-sets.iconify.design/

### Box

Flexible layout container component.

**Props:**
- `as`: HTML element (default: div)
- `bg`: background color
- `color`: text color
- `p`: padding (0-16)
- `m`: margin (0-16)
- `rounded`: border radius (none, sm, md, lg, xl, full)
- `shadow`: shadow size (none, sm, md, lg, xl)
- `border`: border color

**Example:**
```blade
<x-box p="6" bg="primary" rounded="lg" class="text-white">
    Content here
</x-box>

<x-box p="4" shadow="lg" rounded="md">
    Card-like box
</x-box>

<x-box p="4" border="primary" rounded="lg">
    Bordered box
</x-box>
```

### Container

Responsive container component that centers content and applies max-width constraints.

**Props:**
- `max-width`: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full
- `center-content`: boolean (default: true)
- `px`: horizontal padding (0-16)
- `py`: vertical padding (0-16)

**Example:**
```blade
<x-container max-width="7xl" px="4">
    <h1>Page Content</h1>
</x-container>
```

### Center

Centers its child elements using flexbox.

**Props:**
- `as`: HTML element (default: div)
- `inline`: boolean - use inline-flex

**Example:**
```blade
<x-center class="h-screen">
    <div>Centered Content</div>
</x-center>
```

### Flex

Flexible box layout component with full control over flex properties.

**Props:**
- `as`: HTML element (default: div)
- `direction`: row, col, row-reverse, col-reverse
- `align`: start, center, end, stretch, baseline
- `justify`: start, center, end, between, around, evenly
- `wrap`: wrap, nowrap, wrap-reverse
- `gap`: gap between items (0-16)
- `inline`: boolean - use inline-flex

**Example:**
```blade
<x-flex direction="row" align="center" justify="between" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-flex>
```

### Grid

CSS Grid layout component.

**Props:**
- `as`: HTML element (default: div)
- `columns`: 1-12, none, subgrid
- `rows`: 1-6, none, subgrid
- `gap`: gap between items (0-16)
- `gap-x`: horizontal gap (0-16)
- `gap-y`: vertical gap (0-16)
- `auto-flow`: row, col, dense, row-dense, col-dense

**Example:**
```blade
<x-grid columns="3" gap="4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</x-grid>
```

### Stack / HStack / VStack

Layout components that stack elements with consistent spacing.

**Props:**
- `as`: HTML element (default: div)
- `direction`: vertical, horizontal (Stack only)
- `spacing`: 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
- `align`: start, center, end, stretch, baseline
- `justify`: start, center, end, between, around, evenly
- `divider`: boolean - show dividers between items

**Example:**
```blade
{{-- Vertical Stack --}}
<x-vstack spacing="md" align="start">
    <div>Item 1</div>
    <div>Item 2</div>
</x-vstack>

{{-- Horizontal Stack --}}
<x-hstack spacing="lg" justify="between">
    <button>Cancel</button>
    <button>Save</button>
</x-hstack>

{{-- With Divider --}}
<x-vstack :divider="true" spacing="sm">
    <div>Section 1</div>
    <div>Section 2</div>
</x-vstack>
```

### Separator

Visual separator / divider line.

**Props:**
- `orientation`: horizontal, vertical
- `color`: primary, secondary, success, warning, danger, info, gray
- `thickness`: 1, 2, 4, 8
- `length`: length for vertical separators

**Example:**
```blade
<x-separator />
<x-separator orientation="vertical" length="12" />
<x-separator color="primary" thickness="2" />
```

### Spacer

Flexible space component that fills available space in flex layouts.

**Example:**
```blade
<x-flex>
    <div>Left</div>
    <x-spacer />
    <div>Right</div>
</x-flex>
```

---

**Total Progress**: 12/60+ components (20%)

