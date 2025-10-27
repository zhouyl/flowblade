# Radio

单选框组件。

## 基本用法

```blade
<x-radio name="option" />
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `size` | `string` | `'md'` | 尺寸：`sm`, `md`, `lg` |
| `color` | `string` | `'primary'` | 颜色：`primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `disabled` | `boolean` | `false` | 是否禁用 |
| `invalid` | `boolean` | `false` | 是否无效 |
| `value` | `string` | `null` | 值 |

## 尺寸

```blade
<x-radio size="sm" name="size" />
<x-radio size="md" name="size" />
<x-radio size="lg" name="size" />
```

## 颜色

```blade
<x-radio color="primary" name="color" checked />
<x-radio color="success" name="color" />
<x-radio color="warning" name="color" />
<x-radio color="danger" name="color" />
```

## 状态

```blade
<!-- 禁用 -->
<x-radio disabled name="option" />

<!-- 无效 -->
<x-radio invalid name="option" />
```

## 常见用法

### 单选组

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
    <label class="block text-sm font-medium mb-2">选择支付方式</label>
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
    已选择: {{ $selectedPlan }}
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
    <p class="mt-4" x-text="'已选择: ' + selected"></p>
</div>
```

