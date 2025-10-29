# Card

Card component for grouping and displaying related content in a contained format. Card provides a flexible way to organize content with support for headers, bodies, and footers.

## Basic Usage

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Card Title</x-heading>
    </x-card-header>

    <x-card-body>
        <x-text>This is the card content.</x-text>
    </x-card-body>

    <x-card-footer>
        <x-button>Action</x-button>
    </x-card-footer>
</x-card>
```

## Props

### Card Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'elevated'` | Variant: `elevated`, `outline`, `filled`, `ghost` |

### CardHeader, CardBody, CardFooter Props

These sub-components support all common style props for flexible styling.

## Style Props

Card, CardHeader, CardBody, and CardFooter support all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See [HasStyleProps trait documentation](../../traits/has-style-props.md)

## Variants

### Elevated (Default)

```blade
<x-card variant="elevated">
    <x-card-body>
        Elevated card with shadow
    </x-card-body>
</x-card>
```

### Outline

```blade
<x-card variant="outline">
    <x-card-body>
        Outlined card
    </x-card-body>
</x-card>
```

### Filled

```blade
<x-card variant="filled">
    <x-card-body>
        Filled card with background
    </x-card-body>
</x-card>
```

### Ghost

```blade
<x-card variant="ghost">
    <x-card-body>
        Ghost card without background
    </x-card-body>
</x-card>
```

## Sizes

```blade
<x-card size="xs">
    <x-card-body>Extra Small Card</x-card-body>
</x-card>

<x-card size="sm">
    <x-card-body>Small Card</x-card-body>
</x-card>

<x-card size="md">
    <x-card-body>Medium Card</x-card-body>
</x-card>

<x-card size="lg">
    <x-card-body>Large Card</x-card-body>
</x-card>

<x-card size="xl">
    <x-card-body>Extra Large Card</x-card-body>
</x-card>
```

## With Header and Footer

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">User Profile</x-heading>
            <x-badge color="success">Active</x-badge>
        </div>
    </x-card-header>
    
    <x-card-body>
        <x-text>User information and details go here.</x-text>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button variant="outline">Cancel</x-button>
            <x-button>Save</x-button>
        </div>
    </x-card-footer>
</x-card>
```

## Simple Card

```blade
<x-card>
    <x-card-body>
        <x-heading size="md" class="mb-2">Simple Card</x-heading>
        <x-text>Just body content without header or footer.</x-text>
    </x-card-body>
</x-card>
```

## Common Patterns

### User Profile Card

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center gap-4">
            <img src="/avatar.jpg" class="w-16 h-16 rounded-full" />
            <div class="flex-1">
                <x-heading size="lg">John Doe</x-heading>
                <x-text color="gray">Software Developer</x-text>
            </div>
            <x-badge color="success" icon="heroicons:check-badge">Verified</x-badge>
        </div>
        
        <x-separator class="my-4" />
        
        <div class="grid grid-cols-3 gap-4 text-center">
            <div>
                <x-heading size="xl">1.2K</x-heading>
                <x-text size="sm" color="gray">Followers</x-text>
            </div>
            <div>
                <x-heading size="xl">543</x-heading>
                <x-text size="sm" color="gray">Following</x-text>
            </div>
            <div>
                <x-heading size="xl">89</x-heading>
                <x-text size="sm" color="gray">Posts</x-text>
            </div>
        </div>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button class="flex-1">Follow</x-button>
            <x-button variant="outline" class="flex-1">Message</x-button>
        </div>
    </x-card-footer>
</x-card>
```

### Product Card

```blade
<x-card>
    <x-card-body class="p-0">
        <img src="/product.jpg" class="w-full h-48 object-cover" />
        
        <div class="p-4">
            <div class="flex items-start justify-between mb-2">
                <x-heading size="lg">Product Name</x-heading>
                <x-badge color="danger" size="sm">Sale</x-badge>
            </div>
            
            <x-text color="gray" class="mb-3">
                High-quality product with amazing features and benefits.
            </x-text>
            
            <div class="flex items-center justify-between">
                <div>
                    <x-text size="sm" color="gray" class="line-through">$99.99</x-text>
                    <x-heading size="xl" color="primary">$79.99</x-heading>
                </div>
                <x-button>Add to Cart</x-button>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Stats Card

```blade
<x-card>
    <x-card-body>
        <div class="flex items-center justify-between">
            <div>
                <x-text size="sm" color="gray">Total Revenue</x-text>
                <x-heading size="2xl">$45,231</x-heading>
                <div class="flex items-center gap-1 mt-1">
                    <x-badge color="success" size="xs" icon="heroicons:arrow-up">12%</x-badge>
                    <x-text size="xs" color="gray">from last month</x-text>
                </div>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <x-icon name="heroicons:currency-dollar" class="w-6 h-6 text-blue-600" />
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Article Card

```blade
<x-card>
    <x-card-body class="p-0">
        <img src="/article.jpg" class="w-full h-48 object-cover" />
        
        <div class="p-4">
            <div class="flex gap-2 mb-3">
                <x-badge size="sm" variant="subtle" color="primary">Technology</x-badge>
                <x-badge size="sm" variant="subtle" color="info">Tutorial</x-badge>
            </div>
            
            <x-heading size="xl" class="mb-2">
                Getting Started with Laravel Blade Components
            </x-heading>
            
            <x-text color="gray" class="mb-4">
                Learn how to create reusable Blade components in Laravel and improve your development workflow.
            </x-text>
            
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img src="/author.jpg" class="w-8 h-8 rounded-full" />
                    <div>
                        <x-text size="sm" weight="medium">Jane Smith</x-text>
                        <x-text size="xs" color="gray">Oct 27, 2024</x-text>
                    </div>
                </div>
                <x-button variant="ghost" size="sm">Read More</x-button>
            </div>
        </div>
    </x-card-body>
</x-card>
```

### Notification Card

```blade
<x-card variant="outline">
    <x-card-body>
        <div class="flex gap-3">
            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <x-icon name="heroicons:bell" class="w-5 h-5 text-blue-600" />
            </div>
            <div class="flex-1">
                <x-heading size="md" class="mb-1">New Message</x-heading>
                <x-text color="gray">You have a new message from John Doe</x-text>
                <x-text size="xs" color="gray" class="mt-2">2 minutes ago</x-text>
            </div>
            <x-button variant="ghost" size="sm">
                <x-icon name="heroicons:x-mark" class="w-4 h-4" />
            </x-button>
        </div>
    </x-card-body>
</x-card>
```

### Pricing Card

```blade
<x-card>
    <x-card-header>
        <div class="text-center">
            <x-heading size="xl">Pro Plan</x-heading>
            <x-text color="gray">For growing teams</x-text>
        </div>
    </x-card-header>
    
    <x-card-body>
        <div class="text-center mb-6">
            <x-heading size="4xl">$29</x-heading>
            <x-text color="gray">per month</x-text>
        </div>
        
        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
                <x-text>Unlimited projects</x-text>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
                <x-text>Priority support</x-text>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
                <x-text>Advanced analytics</x-text>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="heroicons:check-circle" class="w-5 h-5 text-green-600" />
                <x-text>Custom integrations</x-text>
            </div>
        </div>
    </x-card-body>
    
    <x-card-footer>
        <x-button class="w-full">Get Started</x-button>
    </x-card-footer>
</x-card>
```

### Dashboard Widget

```blade
<x-card>
    <x-card-header>
        <div class="flex items-center justify-between">
            <x-heading size="lg">Recent Activity</x-heading>
            <x-button variant="ghost" size="sm">View All</x-button>
        </div>
    </x-card-header>
    
    <x-card-body class="p-0">
        <div class="divide-y">
            <div class="px-4 py-3 hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                    <div class="flex-1">
                        <x-text weight="medium">New user registered</x-text>
                        <x-text size="sm" color="gray">2 minutes ago</x-text>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                    <div class="flex-1">
                        <x-text weight="medium">Order completed</x-text>
                        <x-text size="sm" color="gray">15 minutes ago</x-text>
                    </div>
                </div>
            </div>
        </div>
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Edit Profile</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="space-y-4">
            <x-field label="Name">
                <x-input wire:model="name" />
            </x-field>
            
            <x-field label="Email">
                <x-input type="email" wire:model="email" />
            </x-field>
        </div>
    </x-card-body>
    
    <x-card-footer>
        <div class="flex gap-2">
            <x-button variant="outline" wire:click="cancel">Cancel</x-button>
            <x-button wire:click="save">Save Changes</x-button>
        </div>
    </x-card-footer>
</x-card>
```

## Alpine.js Integration

```blade
<div x-data="{ expanded: false }">
    <x-card>
        <x-card-body>
            <x-heading size="lg" class="mb-2">Expandable Card</x-heading>
            
            <div x-show="!expanded">
                <x-text>Click to see more content...</x-text>
            </div>
            
            <div x-show="expanded" x-collapse>
                <x-text class="mb-2">
                    This is the expanded content that shows when you click the button.
                </x-text>
                <x-text color="gray">
                    You can add any content here that should be hidden by default.
                </x-text>
            </div>
            
            <x-button 
                size="sm" 
                variant="ghost" 
                class="mt-3"
                @click="expanded = !expanded"
                x-text="expanded ? 'Show Less' : 'Show More'"
            ></x-button>
        </x-card-body>
    </x-card>
</div>
```

## Accessibility

The Card component:
- Uses semantic HTML structure
- Supports keyboard navigation
- Maintains proper heading hierarchy
- Provides clear visual boundaries
- Works with screen readers

