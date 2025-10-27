# Radio

Radio button component.

## Basic Usage

```blade
<x-radio name="option" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Size: `sm`, `md`, `lg` |
| `color` | `string` | `'primary'` | Color: `primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `disabled` | `boolean` | `false` | Disabled state |
| `invalid` | `boolean` | `false` | Invalid state |
| `value` | `string` | `null` | Value |

## Sizes

```blade
<x-radio size="sm" name="size" />
<x-radio size="md" name="size" />
<x-radio size="lg" name="size" />
```

## Colors

```blade
<x-radio color="primary" name="color" checked />
<x-radio color="success" name="color" />
<x-radio color="warning" name="color" />
<x-radio color="danger" name="color" />
```

## States

```blade
<!-- Disabled -->
<x-radio disabled name="option" />

<!-- Invalid -->
<x-radio invalid name="option" />
```

## Common Patterns

### Radio Group

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="free" />
        <span>Free</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="pro" />
        <span>Pro</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="enterprise" />
        <span>Enterprise</span>
    </label>
</div>
```

### With Description

```blade
<div class="space-y-3">
    <label class="flex items-start gap-3">
        <x-radio name="plan" value="basic" class="mt-1" />
        <div>
            <div class="font-medium">Basic</div>
            <div class="text-sm text-gray-500">For personal use</div>
        </div>
    </label>
    <label class="flex items-start gap-3">
        <x-radio name="plan" value="pro" class="mt-1" />
        <div>
            <div class="font-medium">Pro</div>
            <div class="text-sm text-gray-500">For team use</div>
        </div>
    </label>
</div>
```

### Form Field

```blade
<div>
    <label class="block text-sm font-medium mb-2">Select payment method</label>
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="credit_card" />
            <span>Credit Card</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="paypal" />
            <span>PayPal</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="alipay" />
            <span>Alipay</span>
        </label>
    </div>
</div>
```

## Livewire Integration

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-radio wire:model="selectedPlan" value="free" />
        <span>Free</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio wire:model="selectedPlan" value="pro" />
        <span>Pro</span>
    </label>
</div>

<p class="mt-4">
    Selected: {{ $selectedPlan }}
</p>
```

## Alpine.js Integration

```blade
<div x-data="{ selected: 'option1' }">
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-radio x-model="selected" value="option1" />
            <span>Option 1</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio x-model="selected" value="option2" />
            <span>Option 2</span>
        </label>
    </div>
    <p class="mt-4" x-text="'Selected: ' + selected"></p>
</div>
```

