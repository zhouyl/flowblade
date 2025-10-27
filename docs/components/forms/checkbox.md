# Checkbox

checkbox组件。

## Basic Usage

```blade
<x-checkbox />
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
<x-checkbox size="sm" />
<x-checkbox size="md" />
<x-checkbox size="lg" />
```

## Colors

```blade
<x-checkbox color="primary" checked />
<x-checkbox color="success" checked />
<x-checkbox color="warning" checked />
<x-checkbox color="danger" checked />
```

## States

```blade
<!-- 禁用 -->
<x-checkbox disabled />

<!-- 无效 -->
<x-checkbox invalid />
```

## Common Patterns

### 带标签

```blade
<label class="flex items-center gap-2">
    <x-checkbox name="agree" />
    <span>我同意服务条款</span>
</label>
```

### checkbox组

```blade
<div class="space-y-2">
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="reading" />
        <span>阅读</span>
    </label>
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="music" />
        <span>音乐</span>
    </label>
    <label class="flex items-center gap-2">
        <x-checkbox name="interests[]" value="sports" />
        <span>运动</span>
    </label>
</div>
```

### 表单字段

```blade
<div>
    <label class="block text-sm font-medium mb-2">Select features</label>
    <div class="space-y-2">
        <label class="flex items-center gap-2">
            <x-checkbox name="features[]" value="feature1" />
            <span>功能 1</span>
        </label>
        <label class="flex items-center gap-2">
            <x-checkbox name="features[]" value="feature2" />
            <span>功能 2</span>
        </label>
    </div>
</div>
```

## Livewire 集成

```blade
<label class="flex items-center gap-2">
    <x-checkbox wire:model="agreed" />
    <span>我同意条款</span>
</label>

<!-- 多选 -->
<div class="space-y-2">
    @foreach($options as $option)
        <label class="flex items-center gap-2">
            <x-checkbox 
                wire:model="selected"
                value="{{ $option->id }}"
            />
            <span>{{ $option->name }}</span>
        </label>
    @endforeach
</div>
```

## Alpine.js 集成

```blade
<div x-data="{ checked: false }">
    <label class="flex items-center gap-2">
        <x-checkbox x-model="checked" />
        <span>选项</span>
    </label>
    <p x-show="checked" class="mt-2 text-sm text-green-600">
        已选中
    </p>
</div>
```

