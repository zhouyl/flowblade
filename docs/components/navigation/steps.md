# Steps

Display step-by-step progress indicator for multi-step processes like forms, wizards, and workflows. Steps provides a flexible way to display progress with support for various orientations and variants.

## Basic Usage

```blade
<x-steps :current="2">
    <x-step-item :number="1" title="Personal Info" status="complete" />
    <x-step-item :number="2" title="Account Info" status="current" />
    <x-step-item :number="3" title="Confirmation" status="pending" />
</x-steps>
```

## Props

### Steps Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | `string\|null` | `'horizontal'` | Orientation: `horizontal`, `vertical` |
| `variant` | `string\|null` | `'default'` | Variant: `default`, `progress`, `detailed`, `breadcrumb` |
| `current` | `int\|null` | `1` | Current step index (1-based) |
| `total` | `int\|null` | `null` | Total number of steps |

### StepItem Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string\|null` | `null` | Step title |
| `description` | `string\|null` | `null` | Step description |
| `status` | `string\|null` | `'pending'` | Status: `pending`, `current`, `complete` |
| `icon` | `string\|null` | `null` | Icon name (via Iconify) |
| `number` | `int\|null` | `null` | Step number |
| `showIcon` | `bool` | `true` | Whether to show icon/checkmark |

### Style Props

Steps and StepItem support all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

## Variants

### Default

```blade
<x-steps variant="default" :current="1">
    <x-step-item :number="1" title="Personal" description="Info" status="complete" />
    <x-step-item :number="2" title="Account" description="Info" status="current" />
    <x-step-item :number="3" title="Confirmation" status="pending" />
</x-steps>
```

### Progress

```blade
<x-steps variant="progress" :current="1">
    <x-step-item :number="1" status="complete" />
    <x-step-item :number="2" status="current" />
    <x-step-item :number="3" status="pending" />
</x-steps>
```

### Detailed

```blade
<x-steps variant="detailed" orientation="vertical">
    <x-step-item :number="1" title="User info" status="complete" />
    <x-step-item :number="2" title="Account info" status="complete" />
    <x-step-item :number="3" title="Social accounts" status="current" />
    <x-step-item :number="4" title="Review" status="pending" />
    <x-step-item :number="5" title="Confirmation" status="pending" />
</x-steps>
```

### Breadcrumb

```blade
<x-steps variant="breadcrumb" :current="1">
    <x-step-item :number="1" title="Personal" description="Info" status="current" />
    <x-step-item :number="2" title="Account" description="Info" status="pending" />
    <x-step-item :number="3" title="Review" status="pending" />
</x-steps>
```

## Orientations

### Horizontal (Default)

```blade
<x-steps orientation="horizontal">
    <x-step-item :number="1" title="Step 1" status="complete" />
    <x-step-item :number="2" title="Step 2" status="current" />
    <x-step-item :number="3" title="Step 3" status="pending" />
</x-steps>
```

### Vertical

```blade
<x-steps orientation="vertical">
    <x-step-item :number="1" title="Personal Info" description="Step details here" status="complete" />
    <x-step-item :number="2" title="Account Info" description="Step details here" status="current" />
    <x-step-item :number="3" title="Review" description="Step details here" status="pending" />
    <x-step-item :number="4" title="Confirmation" description="Step details here" status="pending" />
</x-steps>
```

## Common Patterns

### Multi-Step Form

```blade
<div>
    <x-steps :current="$currentStep" class="mb-8">
        <x-step-item 
            :number="1" 
            title="Personal Info" 
            :status="$currentStep > 1 ? 'complete' : ($currentStep === 1 ? 'current' : 'pending')" 
        />
        <x-step-item 
            :number="2" 
            title="Account Info" 
            :status="$currentStep > 2 ? 'complete' : ($currentStep === 2 ? 'current' : 'pending')" 
        />
        <x-step-item 
            :number="3" 
            title="Confirmation" 
            :status="$currentStep === 3 ? 'current' : 'pending'" 
        />
    </x-steps>
    
    @if($currentStep === 1)
        {{-- Personal Info Form --}}
    @elseif($currentStep === 2)
        {{-- Account Info Form --}}
    @else
        {{-- Confirmation --}}
    @endif
</div>
```

### Checkout Process

```blade
<x-steps variant="progress" :current="$checkoutStep">
    <x-step-item 
        :number="1" 
        :status="$checkoutStep > 1 ? 'complete' : 'current'" 
    />
    <x-step-item 
        :number="2" 
        :status="$checkoutStep > 2 ? 'complete' : ($checkoutStep === 2 ? 'current' : 'pending')" 
    />
    <x-step-item 
        :number="3" 
        :status="$checkoutStep === 3 ? 'current' : 'pending'" 
    />
</x-steps>
```

### Onboarding Wizard

```blade
<x-steps variant="detailed" orientation="vertical" class="max-w-md">
    <x-step-item 
        :number="1" 
        title="Create Account" 
        status="complete" 
    />
    <x-step-item 
        :number="2" 
        title="Verify Email" 
        status="complete" 
    />
    <x-step-item 
        :number="3" 
        title="Setup Profile" 
        status="current" 
    />
    <x-step-item 
        :number="4" 
        title="Invite Team" 
        status="pending" 
    />
</x-steps>
```

### Application Process

```blade
<x-steps variant="breadcrumb">
    <x-step-item :number="1" title="Application" status="complete" />
    <x-step-item :number="2" title="Documents" status="complete" />
    <x-step-item :number="3" title="Review" status="current" />
    <x-step-item :number="4" title="Approval" status="pending" />
</x-steps>
```

### Order Tracking

```blade
<x-steps orientation="vertical">
    <x-step-item 
        :number="1" 
        title="Order Placed" 
        description="Your order has been received" 
        status="complete" 
    />
    <x-step-item 
        :number="2" 
        title="Processing" 
        description="We're preparing your order" 
        status="complete" 
    />
    <x-step-item 
        :number="3" 
        title="Shipped" 
        description="Your order is on the way" 
        status="current" 
    />
    <x-step-item 
        :number="4" 
        title="Delivered" 
        description="Order will arrive soon" 
        status="pending" 
    />
</x-steps>
```

## Livewire Integration

```blade
<div>
    <x-steps :current="$currentStep" class="mb-8">
        @foreach($steps as $index => $step)
            <x-step-item 
                :number="$index + 1" 
                :title="$step['title']" 
                :status="$this->getStepStatus($index + 1)" 
            />
        @endforeach
    </x-steps>
    
    <div class="mt-8">
        @if($currentStep < count($steps))
            <x-button wire:click="nextStep">
                Next Step
            </x-button>
        @endif
        
        @if($currentStep > 1)
            <x-button variant="outline" wire:click="previousStep">
                Previous
            </x-button>
        @endif
    </div>
</div>
```

```php
// Livewire Component
public $currentStep = 1;
public $steps = [
    ['title' => 'Personal Info'],
    ['title' => 'Account Info'],
    ['title' => 'Confirmation'],
];

public function getStepStatus($step)
{
    if ($step < $this->currentStep) {
        return 'complete';
    } elseif ($step === $this->currentStep) {
        return 'current';
    }
    return 'pending';
}

public function nextStep()
{
    if ($this->currentStep < count($this->steps)) {
        $this->currentStep++;
    }
}

public function previousStep()
{
    if ($this->currentStep > 1) {
        $this->currentStep--;
    }
}
```

## Accessibility

The Steps component:
- Uses semantic `<ol>` element for step list
- Includes proper ARIA attributes
- Supports keyboard navigation
- Provides screen reader text for status
- Uses semantic HTML structure
- Maintains proper heading hierarchy

## Notes

- Steps automatically calculate connector lines between items
- Status determines visual styling (colors, icons)
- Horizontal orientation works best for 3-5 steps
- Vertical orientation better for detailed steps or many steps
- Progress variant shows only icons/numbers
- Detailed variant shows full cards with descriptions
- Breadcrumb variant includes navigation arrows
- All Tailwind utility classes can be applied via attributes
- Dark mode is automatically supported
- Responsive by default

## Browser Support

- All modern browsers
- No JavaScript required
- Pure CSS styling
- Responsive design
- RTL support

