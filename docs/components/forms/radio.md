# Radio

Radio button component for selecting one option from a group. Radio provides a flexible way to create radio button inputs with support for various sizes, colors, and states.

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

### Style Props

Radio supports all style props from the HasStyleProps trait. For a complete list, see the [HasStyleProps trait documentation](../../traits/has-style-props.md).

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
<x-vstack gap="2">
    <x-flex as="label" align="center" gap="2">
        <x-radio name="plan" value="free" />
        <x-text as="span">Free</x-text>
    </x-flex>
    <x-flex as="label" align="center" gap="2">
        <x-radio name="plan" value="pro" />
        <x-text as="span">Pro</x-text>
    </x-flex>
    <x-flex as="label" align="center" gap="2">
        <x-radio name="plan" value="enterprise" />
        <x-text as="span">Enterprise</x-text>
    </x-flex>
</x-vstack>
```

### With Description

```blade
<x-vstack gap="3">
    <x-flex as="label" align="start" gap="3">
        <x-radio name="plan" value="basic" mt="1" />
        <x-box>
            <x-text fontWeight="medium">Basic</x-text>
            <x-text fontSize="sm" color="gray.500">For personal use</x-text>
        </x-box>
    </x-flex>
    <x-flex as="label" align="start" gap="3">
        <x-radio name="plan" value="pro" mt="1" />
        <x-box>
            <x-text fontWeight="medium">Pro</x-text>
            <x-text fontSize="sm" color="gray.500">For team use</x-text>
        </x-box>
    </x-flex>
</x-vstack>
```

### Form Field

```blade
<x-box>
    <x-text as="label" display="block" fontSize="sm" fontWeight="medium" mb="2">Select payment method</x-text>
    <x-vstack gap="2">
        <x-flex as="label" align="center" gap="2">
            <x-radio name="payment" value="credit_card" />
            <x-text as="span">Credit Card</x-text>
        </x-flex>
        <x-flex as="label" align="center" gap="2">
            <x-radio name="payment" value="paypal" />
            <x-text as="span">PayPal</x-text>
        </x-flex>
        <x-flex as="label" align="center" gap="2">
            <x-radio name="payment" value="alipay" />
            <x-text as="span">Alipay</x-text>
        </x-flex>
    </x-vstack>
</x-box>
```

## Livewire Integration

```blade
<x-vstack gap="2">
    <x-flex as="label" align="center" gap="2">
        <x-radio wire:model="selectedPlan" value="free" />
        <x-text as="span">Free</x-text>
    </x-flex>
    <x-flex as="label" align="center" gap="2">
        <x-radio wire:model="selectedPlan" value="pro" />
        <x-text as="span">Pro</x-text>
    </x-flex>
</x-vstack>

<x-text as="p" mt="4">
    Selected: {{ $selectedPlan }}
</x-text>
```

## Alpine.js Integration

```blade
<x-box x-data="{ selected: 'option1' }">
    <x-vstack gap="2">
        <x-flex as="label" align="center" gap="2">
            <x-radio x-model="selected" value="option1" />
            <x-text as="span">Option 1</x-text>
        </x-flex>
        <x-flex as="label" align="center" gap="2">
            <x-radio x-model="selected" value="option2" />
            <x-text as="span">Option 2</x-text>
        </x-flex>
    </x-vstack>
    <x-text as="p" mt="4" x-text="'Selected: ' + selected"></x-text>
</x-box>
```

