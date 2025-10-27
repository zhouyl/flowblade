# Radio

radio组件。

## Basic Usage

```blade
<x-radio name="option" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | 尺寸：`sm`, `md`, `lg` |
| `color` | `string` | `'primary'` | 颜色：`primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `disabled` | `boolean` | `false` | Disabled state |
| `invalid` | `boolean` | `false` | Invalid state |
| `value` | `string` | `null` | 值 |

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
<!-- 禁用 -->
<x-radio disabled name="option" />

<!-- 无效 -->
<x-radio invalid name="option" />
```

## Common Patterns

### Radio Group

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="free" />
        <span>免费版</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="pro" />
        <span>专业版</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio name="plan" value="enterprise" />
        <span>企业版</span>
    </label>
</div>
```

### 带描述

```blade
<div class="space-y-3">
    <label class="flex items-start gap-3">
        <x-radio name="plan" value="basic" class="mt-1" />
        <div>
            <div class="font-medium">基础版</div>
            <div class="text-sm text-gray-500">适合个人使用</div>
        </div>
    </label>
    <label class="flex items-start gap-3">
        <x-radio name="plan" value="pro" class="mt-1" />
        <div>
            <div class="font-medium">专业版</div>
            <div class="text-sm text-gray-500">适合团队使用</div>
        </div>
    </label>
</div>
```

### 表单字段

```blade
<div>
    <label class="block text-sm font-medium mb-2">Select payment method</label>
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="credit_card" />
            <span>信用卡</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="paypal" />
            <span>PayPal</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio name="payment" value="alipay" />
            <span>支付宝</span>
        </label>
    </div>
</div>
```

## Livewire 集成

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-radio wire:model="selectedPlan" value="free" />
        <span>免费版</span>
    </label>
    <label class="flex items-center gap-2">
        <x-radio wire:model="selectedPlan" value="pro" />
        <span>专业版</span>
    </label>
</div>

<p class="mt-4">
    Selected: {{ $selectedPlan }}
</p>
```

## Alpine.js 集成

```blade
<div x-data="{ selected: 'option1' }">
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-radio x-model="selected" value="option1" />
            <span>选项 1</span>
        </label>
        <label class="flex items-center gap-2">
            <x-radio x-model="selected" value="option2" />
            <span>选项 2</span>
        </label>
    </div>
    <p class="mt-4" x-text="'Selected: ' + selected"></p>
</div>
```

