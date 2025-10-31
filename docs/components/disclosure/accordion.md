# Accordion Components

Accordion component family for organizing collapsible content sections in a vertical stack. Accordion provides a flexible way to display collapsible content. Perfect for FAQs, documentation, and content organization.

## Overview

The Accordion component system consists of:
- **Accordion** - Container component for accordion items
- **AccordionItem** - Individual collapsible item within an accordion

## Basic Usage

```blade
<x-accordion>
    <x-accordion-item value="item1" title="What is Flowblade?">
        Flowblade is a comprehensive Laravel Blade component library built with Tailwind CSS.
    </x-accordion-item>

    <x-accordion-item value="item2" title="How do I install it?">
        You can install Flowblade via Composer: composer require mellivora/flowblade
    </x-accordion-item>

    <x-accordion-item value="item3" title="Is it free?">
        Yes, Flowblade is completely free and open source.
    </x-accordion-item>
</x-accordion>
```

## Props

### Accordion

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `'default'` | Variant: `default`, `separated`, `contained` |
| `size` | `string` | `'md'` | Size: `xs`, `sm`, `md`, `lg`, `xl` |
| `multiple` | `bool` | `false` | Allow multiple items to be open |
| `defaultValue` | `string` | `null` | Default open item value |

### AccordionItem

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | required | Item value identifier |
| `title` | `string` | `null` | Item title |
| `icon` | `string` | `null` | Icon name |

### Style Props

Accordion and AccordionItem support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).
| `disabled` | `bool` | `false` | Whether the item is disabled |

## Variants

### Default Variant

```blade
<x-accordion variant="default">
    <x-accordion-item value="item1" title="Section 1">
        Content for section 1
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Section 2">
        Content for section 2
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Section 3">
        Content for section 3
    </x-accordion-item>
</x-accordion>
```

### Separated Variant

```blade
<x-accordion variant="separated">
    <x-accordion-item value="item1" title="Section 1">
        Content for section 1
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Section 2">
        Content for section 2
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Section 3">
        Content for section 3
    </x-accordion-item>
</x-accordion>
```

### Contained Variant

```blade
<x-accordion variant="contained">
    <x-accordion-item value="item1" title="Section 1">
        Content for section 1
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Section 2">
        Content for section 2
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Section 3">
        Content for section 3
    </x-accordion-item>
</x-accordion>
```

## Sizes

```blade
<x-accordion size="xs">
    <x-accordion-item value="item1" title="Extra Small">Content</x-accordion-item>
</x-accordion>

<x-accordion size="sm">
    <x-accordion-item value="item1" title="Small">Content</x-accordion-item>
</x-accordion>

<x-accordion size="md">
    <x-accordion-item value="item1" title="Medium">Content</x-accordion-item>
</x-accordion>

<x-accordion size="lg">
    <x-accordion-item value="item1" title="Large">Content</x-accordion-item>
</x-accordion>

<x-accordion size="xl">
    <x-accordion-item value="item1" title="Extra Large">Content</x-accordion-item>
</x-accordion>
```

## Multiple Open Items

```blade
<x-accordion :multiple="true">
    <x-accordion-item value="item1" title="Section 1">
        Content for section 1
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Section 2">
        Content for section 2
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Section 3">
        Content for section 3
    </x-accordion-item>
</x-accordion>
```

## Default Open Item

```blade
<x-accordion default-value="item2">
    <x-accordion-item value="item1" title="Section 1">
        Content for section 1
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Section 2">
        This section is open by default
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Section 3">
        Content for section 3
    </x-accordion-item>
</x-accordion>
```

## With Icons

```blade
<x-accordion variant="separated">
    <x-accordion-item value="item1" title="Profile" icon="heroicons:user">
        Manage your profile information
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Security" icon="heroicons:lock-closed">
        Update your security settings
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Notifications" icon="heroicons:bell">
        Configure notification preferences
    </x-accordion-item>
</x-accordion>
```

## Disabled Items

```blade
<x-accordion>
    <x-accordion-item value="item1" title="Active Section">
        This section is active
    </x-accordion-item>
    
    <x-accordion-item value="item2" title="Disabled Section" :disabled="true">
        This section is disabled
    </x-accordion-item>
    
    <x-accordion-item value="item3" title="Another Active Section">
        This section is active
    </x-accordion-item>
</x-accordion>
```

## Common Patterns

### FAQ Section

```blade
<x-card>
    <x-card-header>
        <x-heading size="2xl">Frequently Asked Questions</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-accordion variant="separated">
            <x-accordion-item value="q1" title="What payment methods do you accept?">
                We accept all major credit cards, PayPal, and bank transfers.
            </x-accordion-item>
            
            <x-accordion-item value="q2" title="How long does shipping take?">
                Standard shipping takes 5-7 business days. Express shipping is available for 2-3 day delivery.
            </x-accordion-item>
            
            <x-accordion-item value="q3" title="What is your return policy?">
                We offer a 30-day money-back guarantee on all products. Items must be in original condition.
            </x-accordion-item>
            
            <x-accordion-item value="q4" title="Do you ship internationally?">
                Yes, we ship to over 100 countries worldwide. Shipping costs vary by location.
            </x-accordion-item>
        </x-accordion>
    </x-card-body>
</x-card>
```

### Product Features

```blade
<x-accordion variant="contained" default-value="features">
    <x-accordion-item value="features" title="Features" icon="heroicons:star">
        <ul class="list-disc list-inside space-y-2">
            <li>Advanced analytics dashboard</li>
            <li>Real-time collaboration</li>
            <li>Unlimited storage</li>
            <li>24/7 customer support</li>
        </ul>
    </x-accordion-item>
    
    <x-accordion-item value="specs" title="Specifications" icon="heroicons:document-text">
        <x-data-list>
            <x-data-list-item label="Processor">Intel Core i7</x-data-list-item>
            <x-data-list-item label="Memory">16GB RAM</x-data-list-item>
            <x-data-list-item label="Storage">512GB SSD</x-data-list-item>
        </x-data-list>
    </x-accordion-item>
    
    <x-accordion-item value="warranty" title="Warranty" icon="heroicons:shield-check">
        <x-text>This product comes with a 2-year manufacturer warranty covering defects in materials and workmanship.</x-text>
    </x-accordion-item>
</x-accordion>
```

### Settings Panel

```blade
<x-card>
    <x-card-header>
        <x-heading size="xl">Account Settings</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-accordion :multiple="true" variant="separated">
            <x-accordion-item value="profile" title="Profile Settings" icon="heroicons:user">
                <div class="space-y-4">
                    <x-field label="Full Name">
                        <x-input name="name" value="{{ $user->name }}" />
                    </x-field>
                    
                    <x-field label="Email">
                        <x-input type="email" name="email" value="{{ $user->email }}" />
                    </x-field>
                    
                    <x-button color="primary">Save Changes</x-button>
                </div>
            </x-accordion-item>
            
            <x-accordion-item value="security" title="Security" icon="heroicons:lock-closed">
                <div class="space-y-4">
                    <x-field label="Current Password">
                        <x-input type="password" name="current_password" />
                    </x-field>
                    
                    <x-field label="New Password">
                        <x-input type="password" name="new_password" />
                    </x-field>
                    
                    <x-button color="primary">Update Password</x-button>
                </div>
            </x-accordion-item>
            
            <x-accordion-item value="notifications" title="Notifications" icon="heroicons:bell">
                <div class="space-y-3">
                    <x-checkbox name="email_notifications">Email Notifications</x-checkbox>
                    <x-checkbox name="push_notifications">Push Notifications</x-checkbox>
                    <x-checkbox name="sms_notifications">SMS Notifications</x-checkbox>
                </div>
            </x-accordion-item>
        </x-accordion>
    </x-card-body>
</x-card>
```

### Documentation Sections

```blade
<x-accordion variant="default" size="lg">
    <x-accordion-item value="installation" title="Installation" icon="heroicons:arrow-down-tray">
        <x-heading size="md" class="mb-3">Install via Composer</x-heading>
        <x-code-block language="bash">
composer require mellivora/flowblade
        </x-code-block>
        
        <x-heading size="md" class="mt-4 mb-3">Publish Configuration</x-heading>
        <x-code-block language="bash">
php artisan vendor:publish --tag=flowblade-config
        </x-code-block>
    </x-accordion-item>
    
    <x-accordion-item value="configuration" title="Configuration" icon="heroicons:cog-6-tooth">
        <x-text class="mb-3">Configure Flowblade in your config/flowblade.php file:</x-text>
        <x-code-block language="php">
return [
    'prefix' => '',
    'size' => 'md',
    'color' => 'primary',
];
        </x-code-block>
    </x-accordion-item>
    
    <x-accordion-item value="usage" title="Usage" icon="heroicons:book-open">
        <x-text class="mb-3">Use components in your Blade templates:</x-text>
        <x-code-block language="blade">
&lt;x-button color="primary"&gt;Click Me&lt;/x-button&gt;
        </x-code-block>
    </x-accordion-item>
</x-accordion>
```

### Pricing Plans

```blade
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($plans as $plan)
    <x-card>
        <x-card-header>
            <x-heading size="xl">{{ $plan->name }}</x-heading>
            <x-text size="3xl" weight="bold" class="mt-2">${{ $plan->price }}/mo</x-text>
        </x-card-header>
        
        <x-card-body>
            <x-accordion variant="separated">
                <x-accordion-item value="features-{{ $plan->id }}" title="Features">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($plan->features as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </x-accordion-item>
                
                <x-accordion-item value="limits-{{ $plan->id }}" title="Limits">
                    <x-data-list>
                        <x-data-list-item label="Users">{{ $plan->max_users }}</x-data-list-item>
                        <x-data-list-item label="Storage">{{ $plan->storage }}</x-data-list-item>
                        <x-data-list-item label="API Calls">{{ $plan->api_calls }}</x-data-list-item>
                    </x-data-list>
                </x-accordion-item>
            </x-accordion>
            
            <x-button color="primary" class="w-full mt-4">Choose Plan</x-button>
        </x-card-body>
    </x-card>
    @endforeach
</div>
```

## Livewire Integration

```blade
<div>
    <x-accordion :multiple="true">
        @foreach($sections as $section)
        <x-accordion-item 
            value="section-{{ $section->id }}" 
            title="{{ $section->title }}"
            icon="{{ $section->icon }}"
        >
            <div wire:loading wire:target="loadContent({{ $section->id }})">
                <x-spinner size="sm" /> Loading...
            </div>
            
            <div wire:loading.remove wire:target="loadContent({{ $section->id }})">
                {{ $section->content }}
            </div>
        </x-accordion-item>
        @endforeach
    </x-accordion>
</div>
```

```php
// Livewire Component
use Livewire\Component;

class AccordionContent extends Component
{
    public $sections;
    
    public function mount()
    {
        $this->sections = Section::all();
    }
    
    public function loadContent($sectionId)
    {
        // Load dynamic content
        return Section::find($sectionId)->loadFullContent();
    }
    
    public function render()
    {
        return view('livewire.accordion-content');
    }
}
```

## Alpine.js Integration

```blade
<div x-data="{ 
    faqs: [
        { id: 1, question: 'Question 1', answer: 'Answer 1' },
        { id: 2, question: 'Question 2', answer: 'Answer 2' },
        { id: 3, question: 'Question 3', answer: 'Answer 3' }
    ]
}">
    <x-accordion variant="separated">
        <template x-for="faq in faqs" :key="faq.id">
            <x-accordion-item 
                x-bind:value="'faq-' + faq.id"
                x-bind:title="faq.question"
            >
                <span x-text="faq.answer"></span>
            </x-accordion-item>
        </template>
    </x-accordion>
</div>
```

## Accessibility

The Accordion component:
- Uses semantic HTML with proper button elements
- Manages `aria-expanded` attribute for screen readers
- Supports keyboard navigation (Tab, Enter, Space, Arrow keys)
- Provides clear visual feedback for open/closed states
- Announces expanded/collapsed state to screen readers
- Emits `accordion-change` event for integration
- Supports disabled state with proper ARIA attributes
- Uses Alpine.js collapse directive for smooth animations
- Supports `aria-controls` for associating headers with content
- Maintains focus management for keyboard users

