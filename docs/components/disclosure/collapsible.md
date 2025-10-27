# Collapsible

Collapsible component for toggling content visibility with a simple expand/collapse interaction.

## Basic Usage

```blade
<x-collapsible title="Click to expand">
    This content can be toggled by clicking the trigger button.
</x-collapsible>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `open` | `bool` | `false` | Whether the collapsible is open by default |
| `title` | `string` | `null` | Collapsible title |
| `icon` | `string` | `null` | Icon name |
| `disabled` | `bool` | `false` | Whether the collapsible is disabled |

## Open by Default

```blade
<x-collapsible title="This is open by default" :open="true">
    This content is visible when the page loads.
</x-collapsible>
```

## With Icon

```blade
<x-collapsible title="Settings" icon="heroicons:cog-6-tooth">
    <div class="space-y-3">
        <x-checkbox name="notifications">Enable notifications</x-checkbox>
        <x-checkbox name="auto_save">Auto-save changes</x-checkbox>
        <x-checkbox name="dark_mode">Dark mode</x-checkbox>
    </div>
</x-collapsible>
```

## Disabled State

```blade
<x-collapsible title="Disabled Section" :disabled="true">
    This content cannot be toggled.
</x-collapsible>
```

## Common Patterns

### Filter Panel

```blade
<x-card>
    <x-card-body>
        <x-collapsible title="Filters" icon="heroicons:funnel">
            <div class="space-y-4 mt-4">
                <x-field label="Category">
                    <x-select name="category">
                        <option value="">All Categories</option>
                        <option value="electronics">Electronics</option>
                        <option value="clothing">Clothing</option>
                        <option value="books">Books</option>
                    </x-select>
                </x-field>
                
                <x-field label="Price Range">
                    <x-slider name="price" :min="0" :max="1000" />
                </x-field>
                
                <x-field label="Brand">
                    <x-input name="brand" placeholder="Search brands..." />
                </x-field>
                
                <div class="flex gap-2">
                    <x-button color="primary">Apply Filters</x-button>
                    <x-button variant="outline">Reset</x-button>
                </div>
            </div>
        </x-collapsible>
    </x-card-body>
</x-card>
```

### Advanced Search

```blade
<div class="space-y-4">
    <x-field label="Search">
        <x-input name="search" placeholder="Search..." />
    </x-field>
    
    <x-collapsible title="Advanced Options" icon="heroicons:adjustments-horizontal">
        <div class="space-y-4 mt-4">
            <x-field label="Date Range">
                <div class="grid grid-cols-2 gap-2">
                    <x-input type="date" name="start_date" />
                    <x-input type="date" name="end_date" />
                </div>
            </x-field>
            
            <x-field label="Status">
                <x-checkbox-group>
                    <x-checkbox name="status[]" value="active">Active</x-checkbox>
                    <x-checkbox name="status[]" value="pending">Pending</x-checkbox>
                    <x-checkbox name="status[]" value="completed">Completed</x-checkbox>
                </x-checkbox-group>
            </x-field>
            
            <x-field label="Sort By">
                <x-select name="sort">
                    <option value="date">Date</option>
                    <option value="name">Name</option>
                    <option value="relevance">Relevance</option>
                </x-select>
            </x-field>
        </div>
    </x-collapsible>
</div>
```

### Product Details

```blade
<x-card>
    <x-card-body>
        <x-heading size="xl" class="mb-4">{{ $product->name }}</x-heading>
        
        <x-text size="2xl" weight="bold" class="mb-6">${{ $product->price }}</x-text>
        
        <div class="space-y-3">
            <x-collapsible title="Description" :open="true" icon="heroicons:document-text">
                <x-text class="mt-3">{{ $product->description }}</x-text>
            </x-collapsible>
            
            <x-collapsible title="Specifications" icon="heroicons:clipboard-document-list">
                <x-data-list class="mt-3">
                    <x-data-list-item label="Brand">{{ $product->brand }}</x-data-list-item>
                    <x-data-list-item label="Model">{{ $product->model }}</x-data-list-item>
                    <x-data-list-item label="Weight">{{ $product->weight }}</x-data-list-item>
                    <x-data-list-item label="Dimensions">{{ $product->dimensions }}</x-data-list-item>
                </x-data-list>
            </x-collapsible>
            
            <x-collapsible title="Shipping Information" icon="heroicons:truck">
                <div class="mt-3 space-y-2">
                    <x-text>Free shipping on orders over $50</x-text>
                    <x-text>Estimated delivery: 5-7 business days</x-text>
                    <x-text>International shipping available</x-text>
                </div>
            </x-collapsible>
            
            <x-collapsible title="Return Policy" icon="heroicons:arrow-uturn-left">
                <x-text class="mt-3">
                    30-day money-back guarantee. Items must be returned in original condition.
                </x-text>
            </x-collapsible>
        </div>
    </x-card-body>
</x-card>
```

### Help Section

```blade
<div class="space-y-3">
    <x-heading size="xl" class="mb-4">Help & Support</x-heading>
    
    <x-collapsible title="How do I reset my password?" icon="heroicons:question-mark-circle">
        <div class="mt-3 space-y-2">
            <x-text>1. Click on "Forgot Password" on the login page</x-text>
            <x-text>2. Enter your email address</x-text>
            <x-text>3. Check your email for a reset link</x-text>
            <x-text>4. Follow the link and create a new password</x-text>
        </div>
    </x-collapsible>
    
    <x-collapsible title="How do I update my billing information?" icon="heroicons:question-mark-circle">
        <x-text class="mt-3">
            Go to Settings > Billing and click "Update Payment Method" to change your billing information.
        </x-text>
    </x-collapsible>
    
    <x-collapsible title="How do I cancel my subscription?" icon="heroicons:question-mark-circle">
        <x-text class="mt-3">
            Navigate to Settings > Subscription and click "Cancel Subscription". Your access will continue until the end of your billing period.
        </x-text>
    </x-collapsible>
    
    <x-collapsible title="How do I contact support?" icon="heroicons:question-mark-circle">
        <div class="mt-3 space-y-2">
            <x-text>Email: support@example.com</x-text>
            <x-text>Phone: 1-800-123-4567</x-text>
            <x-text>Live Chat: Available 24/7</x-text>
        </div>
    </x-collapsible>
</div>
```

### Settings Panel

```blade
<x-card>
    <x-card-header>
        <x-heading size="xl">Account Settings</x-heading>
    </x-card-header>
    
    <x-card-body class="space-y-3">
        <x-collapsible title="Profile Information" icon="heroicons:user" :open="true">
            <div class="mt-4 space-y-4">
                <x-field label="Full Name">
                    <x-input name="name" value="{{ $user->name }}" />
                </x-field>
                
                <x-field label="Email">
                    <x-input type="email" name="email" value="{{ $user->email }}" />
                </x-field>
                
                <x-field label="Phone">
                    <x-input type="tel" name="phone" value="{{ $user->phone }}" />
                </x-field>
                
                <x-button color="primary">Save Changes</x-button>
            </div>
        </x-collapsible>
        
        <x-collapsible title="Privacy Settings" icon="heroicons:shield-check">
            <div class="mt-4 space-y-3">
                <x-checkbox name="profile_public">Make profile public</x-checkbox>
                <x-checkbox name="show_email">Show email on profile</x-checkbox>
                <x-checkbox name="allow_messages">Allow messages from other users</x-checkbox>
            </div>
        </x-collapsible>
        
        <x-collapsible title="Notification Preferences" icon="heroicons:bell">
            <div class="mt-4 space-y-3">
                <x-checkbox name="email_notifications">Email notifications</x-checkbox>
                <x-checkbox name="push_notifications">Push notifications</x-checkbox>
                <x-checkbox name="sms_notifications">SMS notifications</x-checkbox>
                <x-checkbox name="marketing_emails">Marketing emails</x-checkbox>
            </div>
        </x-collapsible>
        
        <x-collapsible title="Danger Zone" icon="heroicons:exclamation-triangle">
            <div class="mt-4 space-y-3">
                <x-button color="danger" variant="outline">Delete Account</x-button>
                <x-text size="sm" color="gray">
                    Once you delete your account, there is no going back. Please be certain.
                </x-text>
            </div>
        </x-collapsible>
    </x-card-body>
</x-card>
```

### Code Example

```blade
<x-collapsible title="View Code Example" icon="heroicons:code-bracket">
    <x-code-block language="php" class="mt-3">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('users.index', compact('users'));
    }
}
    </x-code-block>
</x-collapsible>
```

### Shopping Cart Summary

```blade
<x-card>
    <x-card-header>
        <x-heading size="xl">Order Summary</x-heading>
    </x-card-header>
    
    <x-card-body>
        <div class="space-y-4">
            <div class="flex justify-between">
                <x-text>Subtotal</x-text>
                <x-text weight="medium">${{ $subtotal }}</x-text>
            </div>
            
            <div class="flex justify-between">
                <x-text>Shipping</x-text>
                <x-text weight="medium">${{ $shipping }}</x-text>
            </div>
            
            <x-collapsible title="Apply Discount Code" icon="heroicons:ticket">
                <div class="mt-3 flex gap-2">
                    <x-input name="discount_code" placeholder="Enter code" />
                    <x-button variant="outline">Apply</x-button>
                </div>
            </x-collapsible>
            
            <x-separator />
            
            <div class="flex justify-between">
                <x-text size="lg" weight="bold">Total</x-text>
                <x-text size="lg" weight="bold">${{ $total }}</x-text>
            </div>
            
            <x-button color="primary" class="w-full">Proceed to Checkout</x-button>
        </div>
    </x-card-body>
</x-card>
```

## Livewire Integration

```blade
<div>
    <x-collapsible 
        title="Load More Details" 
        icon="heroicons:information-circle"
        x-on:collapsible-change="if ($event.detail.open) $wire.loadDetails()"
    >
        <div wire:loading wire:target="loadDetails">
            <x-spinner size="sm" /> Loading details...
        </div>
        
        <div wire:loading.remove wire:target="loadDetails">
            @if($details)
                {{ $details }}
            @endif
        </div>
    </x-collapsible>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class DetailsPanel extends Component
{
    public $details = null;
    
    public function loadDetails()
    {
        // Simulate loading data
        sleep(1);
        $this->details = 'Detailed information loaded from the server...';
    }
    
    public function render()
    {
        return view('livewire.details-panel');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    sections: [
        { title: 'Section 1', content: 'Content 1', icon: 'heroicons:document' },
        { title: 'Section 2', content: 'Content 2', icon: 'heroicons:folder' },
        { title: 'Section 3', content: 'Content 3', icon: 'heroicons:chart-bar' }
    ]
}">
    <template x-for="section in sections" :key="section.title">
        <x-collapsible 
            x-bind:title="section.title"
            x-bind:icon="section.icon"
        >
            <span x-text="section.content"></span>
        </x-collapsible>
    </template>
</div>
```

## Accessibility

The Collapsible component:
- Uses semantic HTML with proper button elements
- Manages `aria-expanded` attribute for screen readers
- Supports keyboard navigation
- Provides clear visual feedback for open/closed states
- Emits `collapsible-change` event for integration
- Supports disabled state with proper ARIA attributes
- Uses Alpine.js collapse directive for smooth animations
- Includes chevron icon that rotates to indicate state

