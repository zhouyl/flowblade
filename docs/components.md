# Component List

## Available Components

### Layout Components (1/18)

- [x] **Box** - Flexible layout container
- [ ] Container
- [ ] Center
- [ ] AbsoluteCenter
- [ ] Flex
- [ ] Grid
- [ ] SimpleGrid
- [ ] Stack
- [ ] HStack
- [ ] VStack
- [ ] Wrap
- [ ] Separator
- [ ] Spacer
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

---

**Total Progress**: 3/60+ components (5%)

