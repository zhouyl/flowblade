# Tabs Components

Tabs component family for organizing content into separate views that can be easily navigated. Tabs provides a flexible way to organize content with support for various sizes and variants. Perfect for content organization, settings panels, and multi-step forms.

## Overview

The Tabs component system consists of:
- **Tabs** - Container component for tabs
- **TabsList** - List container for tab triggers
- **TabsTrigger** - Individual tab trigger/button
- **TabsContent** - Content panel for each tab

## Basic Usage

```blade
<x-tabs default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Tab 1</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
        <x-tabs-trigger value="tab3">Tab 3</x-tabs-trigger>
    </x-tabs-list>

    <x-tabs-content value="tab1">
        <x-text as="p">Content for Tab 1</x-text>
    </x-tabs-content>

    <x-tabs-content value="tab2">
        <x-text as="p">Content for Tab 2</x-text>
    </x-tabs-content>

    <x-tabs-content value="tab3">
        <x-text as="p">Content for Tab 3</x-text>
    </x-tabs-content>
</x-tabs>
```

## Props

### Tabs

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `'line'` | Variant: `line`, `enclosed`, `pills` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `defaultValue` | `string` | `null` | Default active tab value |

### TabsTrigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | required | Tab value identifier |
| `icon` | `string` | `null` | Icon name |
| `disabled` | `bool` | `false` | Whether the tab is disabled |

### TabsContent

| Prop | Type | Default | Description |
|------|------|---------|-------------|

### Style Props

Tabs, TabsTrigger, and TabsContent support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `value` | `string` | required | Tab value identifier (must match trigger) |

## Variants

### Line Variant (Default)

```blade
<x-tabs variant="line" default-value="overview">
    <x-tabs-list>
        <x-tabs-trigger value="overview">Overview</x-tabs-trigger>
        <x-tabs-trigger value="details">Details</x-tabs-trigger>
        <x-tabs-trigger value="settings">Settings</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="overview">
        <p>Overview content</p>
    </x-tabs-content>
    
    <x-tabs-content value="details">
        <p>Details content</p>
    </x-tabs-content>
    
    <x-tabs-content value="settings">
        <p>Settings content</p>
    </x-tabs-content>
</x-tabs>
```

### Enclosed Variant

```blade
<x-tabs variant="enclosed" default-value="profile">
    <x-tabs-list>
        <x-tabs-trigger value="profile">Profile</x-tabs-trigger>
        <x-tabs-trigger value="account">Account</x-tabs-trigger>
        <x-tabs-trigger value="security">Security</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="profile">
        <p>Profile settings</p>
    </x-tabs-content>
    
    <x-tabs-content value="account">
        <p>Account settings</p>
    </x-tabs-content>
    
    <x-tabs-content value="security">
        <p>Security settings</p>
    </x-tabs-content>
</x-tabs>
```

### Pills Variant

```blade
<x-tabs variant="pills" default-value="all">
    <x-tabs-list>
        <x-tabs-trigger value="all">All</x-tabs-trigger>
        <x-tabs-trigger value="active">Active</x-tabs-trigger>
        <x-tabs-trigger value="completed">Completed</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="all">
        <p>All items</p>
    </x-tabs-content>
    
    <x-tabs-content value="active">
        <p>Active items</p>
    </x-tabs-content>
    
    <x-tabs-content value="completed">
        <p>Completed items</p>
    </x-tabs-content>
</x-tabs>
```

## Sizes

```blade
<x-tabs size="xs" default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Extra Small</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
</x-tabs>

<x-tabs size="sm" default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Small</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
</x-tabs>

<x-tabs size="md" default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Medium</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
</x-tabs>

<x-tabs size="lg" default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Large</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
</x-tabs>

<x-tabs size="xl" default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Extra Large</x-tabs-trigger>
        <x-tabs-trigger value="tab2">Tab 2</x-tabs-trigger>
    </x-tabs-list>
    <x-tabs-content value="tab1">Content 1</x-tabs-content>
    <x-tabs-content value="tab2">Content 2</x-tabs-content>
</x-tabs>
```

## With Icons

```blade
<x-tabs default-value="home">
    <x-tabs-list>
        <x-tabs-trigger value="home" icon="heroicons:home">Home</x-tabs-trigger>
        <x-tabs-trigger value="profile" icon="heroicons:user">Profile</x-tabs-trigger>
        <x-tabs-trigger value="settings" icon="heroicons:cog-6-tooth">Settings</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="home">
        <p>Home content</p>
    </x-tabs-content>
    
    <x-tabs-content value="profile">
        <p>Profile content</p>
    </x-tabs-content>
    
    <x-tabs-content value="settings">
        <p>Settings content</p>
    </x-tabs-content>
</x-tabs>
```

## Disabled Tabs

```blade
<x-tabs default-value="tab1">
    <x-tabs-list>
        <x-tabs-trigger value="tab1">Active Tab</x-tabs-trigger>
        <x-tabs-trigger value="tab2" :disabled="true">Disabled Tab</x-tabs-trigger>
        <x-tabs-trigger value="tab3">Another Tab</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="tab1">
        <p>Active content</p>
    </x-tabs-content>
    
    <x-tabs-content value="tab2">
        <p>This content won't be accessible</p>
    </x-tabs-content>
    
    <x-tabs-content value="tab3">
        <p>Another content</p>
    </x-tabs-content>
</x-tabs>
```

## Common Patterns

### Product Details

```blade
<x-card>
    <x-card-body>
        <x-tabs default-value="description">
            <x-tabs-list>
                <x-tabs-trigger value="description">Description</x-tabs-trigger>
                <x-tabs-trigger value="specifications">Specifications</x-tabs-trigger>
                <x-tabs-trigger value="reviews">Reviews</x-tabs-trigger>
            </x-tabs-list>
            
            <x-tabs-content value="description">
                <x-heading size="lg" class="mb-4">Product Description</x-heading>
                <x-text>{{ $product->description }}</x-text>
            </x-tabs-content>
            
            <x-tabs-content value="specifications">
                <x-heading size="lg" class="mb-4">Specifications</x-heading>
                <x-data-list>
                    <x-data-list-item label="Brand">{{ $product->brand }}</x-data-list-item>
                    <x-data-list-item label="Model">{{ $product->model }}</x-data-list-item>
                    <x-data-list-item label="Weight">{{ $product->weight }}</x-data-list-item>
                </x-data-list>
            </x-tabs-content>
            
            <x-tabs-content value="reviews">
                <x-heading size="lg" class="mb-4">Customer Reviews</x-heading>
                @foreach($product->reviews as $review)
                    <div class="mb-4">
                        <x-text weight="medium">{{ $review->user->name }}</x-text>
                        <x-text size="sm" color="gray">{{ $review->comment }}</x-text>
                    </div>
                @endforeach
            </x-tabs-content>
        </x-tabs>
    </x-card-body>
</x-card>
```

### User Profile

```blade
<x-tabs variant="enclosed" default-value="profile">
    <x-tabs-list>
        <x-tabs-trigger value="profile" icon="heroicons:user">Profile</x-tabs-trigger>
        <x-tabs-trigger value="account" icon="heroicons:cog-6-tooth">Account</x-tabs-trigger>
        <x-tabs-trigger value="security" icon="heroicons:lock-closed">Security</x-tabs-trigger>
        <x-tabs-trigger value="notifications" icon="heroicons:bell">Notifications</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="profile">
        <x-card>
            <x-card-header>
                <x-heading size="lg">Profile Information</x-heading>
            </x-card-header>
            <x-card-body>
                <!-- Profile form -->
            </x-card-body>
        </x-card>
    </x-tabs-content>
    
    <x-tabs-content value="account">
        <x-card>
            <x-card-header>
                <x-heading size="lg">Account Settings</x-heading>
            </x-card-header>
            <x-card-body>
                <!-- Account settings form -->
            </x-card-body>
        </x-card>
    </x-tabs-content>
    
    <x-tabs-content value="security">
        <x-card>
            <x-card-header>
                <x-heading size="lg">Security Settings</x-heading>
            </x-card-header>
            <x-card-body>
                <!-- Security settings form -->
            </x-card-body>
        </x-card>
    </x-tabs-content>
    
    <x-tabs-content value="notifications">
        <x-card>
            <x-card-header>
                <x-heading size="lg">Notification Preferences</x-heading>
            </x-card-header>
            <x-card-body>
                <!-- Notification settings -->
            </x-card-body>
        </x-card>
    </x-tabs-content>
</x-tabs>
```

### Dashboard Analytics

```blade
<x-card>
    <x-card-header>
        <x-heading size="xl">Analytics Dashboard</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-tabs variant="pills" default-value="overview">
            <x-tabs-list>
                <x-tabs-trigger value="overview" icon="heroicons:chart-bar">Overview</x-tabs-trigger>
                <x-tabs-trigger value="traffic" icon="heroicons:arrow-trending-up">Traffic</x-tabs-trigger>
                <x-tabs-trigger value="revenue" icon="heroicons:currency-dollar">Revenue</x-tabs-trigger>
                <x-tabs-trigger value="users" icon="heroicons:users">Users</x-tabs-trigger>
            </x-tabs-list>
            
            <x-tabs-content value="overview">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <x-stat label="Total Views" value="12,345" trend="up" trend-value="+12.5%" />
                    <x-stat label="Total Revenue" value="$45,231" trend="up" trend-value="+8.2%" />
                    <x-stat label="Active Users" value="892" trend="down" trend-value="-3.1%" />
                </div>
            </x-tabs-content>
            
            <x-tabs-content value="traffic">
                <!-- Traffic charts and data -->
            </x-tabs-content>
            
            <x-tabs-content value="revenue">
                <!-- Revenue charts and data -->
            </x-tabs-content>
            
            <x-tabs-content value="users">
                <!-- User analytics -->
            </x-tabs-content>
        </x-tabs>
    </x-card-body>
</x-card>
```

### Documentation

```blade
<x-tabs default-value="installation">
    <x-tabs-list>
        <x-tabs-trigger value="installation">Installation</x-tabs-trigger>
        <x-tabs-trigger value="usage">Usage</x-tabs-trigger>
        <x-tabs-trigger value="api">API Reference</x-tabs-trigger>
        <x-tabs-trigger value="examples">Examples</x-tabs-trigger>
    </x-tabs-list>
    
    <x-tabs-content value="installation">
        <x-heading size="lg" class="mb-4">Installation</x-heading>
        <x-code-block language="bash">
composer require mellivora/flowblade
        </x-code-block>
    </x-tabs-content>
    
    <x-tabs-content value="usage">
        <x-heading size="lg" class="mb-4">Basic Usage</x-heading>
        <x-text class="mb-4">Here's how to get started...</x-text>
    </x-tabs-content>
    
    <x-tabs-content value="api">
        <x-heading size="lg" class="mb-4">API Reference</x-heading>
        <!-- API documentation -->
    </x-tabs-content>
    
    <x-tabs-content value="examples">
        <x-heading size="lg" class="mb-4">Examples</x-heading>
        <!-- Code examples -->
    </x-tabs-content>
</x-tabs>
```

## Livewire Integration

```blade
<div>
    <x-tabs default-value="{{ $activeTab }}">
        <x-tabs-list>
            <x-tabs-trigger value="pending" @click="$wire.setTab('pending')">
                Pending ({{ $pendingCount }})
            </x-tabs-trigger>
            <x-tabs-trigger value="approved" @click="$wire.setTab('approved')">
                Approved ({{ $approvedCount }})
            </x-tabs-trigger>
            <x-tabs-trigger value="rejected" @click="$wire.setTab('rejected')">
                Rejected ({{ $rejectedCount }})
            </x-tabs-trigger>
        </x-tabs-list>
        
        <x-tabs-content value="pending">
            @foreach($pendingItems as $item)
                <!-- Pending item -->
            @endforeach
        </x-tabs-content>
        
        <x-tabs-content value="approved">
            @foreach($approvedItems as $item)
                <!-- Approved item -->
            @endforeach
        </x-tabs-content>
        
        <x-tabs-content value="rejected">
            @foreach($rejectedItems as $item)
                <!-- Rejected item -->
            @endforeach
        </x-tabs-content>
    </x-tabs>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class ItemsManager extends Component
{
    public $activeTab = 'pending';
    
    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }
    
    public function render()
    {
        return view('livewire.items-manager', [
            'pendingItems' => Item::where('status', 'pending')->get(),
            'approvedItems' => Item::where('status', 'approved')->get(),
            'rejectedItems' => Item::where('status', 'rejected')->get(),
            'pendingCount' => Item::where('status', 'pending')->count(),
            'approvedCount' => Item::where('status', 'approved')->count(),
            'rejectedCount' => Item::where('status', 'rejected')->count(),
        ]);
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    currentTab: 'tab1',
    tabs: [
        { value: 'tab1', label: 'Tab 1', icon: 'heroicons:home' },
        { value: 'tab2', label: 'Tab 2', icon: 'heroicons:user' },
        { value: 'tab3', label: 'Tab 3', icon: 'heroicons:cog-6-tooth' }
    ]
}">
    <x-tabs x-bind:default-value="currentTab">
        <x-tabs-list>
            <template x-for="tab in tabs" :key="tab.value">
                <x-tabs-trigger 
                    x-bind:value="tab.value"
                    x-bind:icon="tab.icon"
                    x-text="tab.label"
                ></x-tabs-trigger>
            </template>
        </x-tabs-list>
        
        <x-tabs-content value="tab1">
            <p>Dynamic content for Tab 1</p>
        </x-tabs-content>
        
        <x-tabs-content value="tab2">
            <p>Dynamic content for Tab 2</p>
        </x-tabs-content>
        
        <x-tabs-content value="tab3">
            <p>Dynamic content for Tab 3</p>
        </x-tabs-content>
    </x-tabs>
</div>
```

## Accessibility

The Tabs component:
- Uses semantic ARIA roles (`tablist`, `tab`, `tabpanel`)
- Manages `aria-selected` and `aria-hidden` attributes
- Supports keyboard navigation (Tab, Arrow keys, Enter)
- Provides clear visual feedback for active and disabled states
- Announces tab state to screen readers
- Emits `tab-change` event for integration
- Works with screen readers
- Supports proper focus management

