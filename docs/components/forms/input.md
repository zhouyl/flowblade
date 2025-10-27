# Input

Input component for text input.

## Basic Usage

```blade
<x-input placeholder="Enter text" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `type` | `string` | `'text'` | Input type |
| `size` | `string` | `'md'` | Size: `2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'outline'` | Variant: `outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only |
| `required` | `boolean` | `false` | Required |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | 占位text |

## Sizes

```blade
<x-input size="xs" placeholder="Extra small" />
<x-input size="sm" placeholder="Small" />
<x-input size="md" placeholder="Medium" />
<x-input size="lg" placeholder="Large" />
<x-input size="xl" placeholder="Extra large" />
```

## Variants

```blade
<!-- Outline -->
<x-input variant="outline" placeholder="边框样式" />

<!-- Filled -->
<x-input variant="filled" placeholder="填充样式" />

<!-- Flushed -->
<x-input variant="flushed" placeholder="底线样式" />
```

## Input Types

```blade
<x-input type="text" placeholder="text" />
<x-input type="email" placeholder="邮箱" />
<x-input type="password" placeholder="密码" />
<x-input type="number" placeholder="数字" />
<x-input type="tel" placeholder="电话" />
<x-input type="url" placeholder="网址" />
<x-input type="search" placeholder="搜索" />
```

## States

```blade
<!-- Disabled -->
<x-input disabled placeholder="Disabled" />

<!-- 只读 -->
<x-input readonly value="只读内容" />

<!-- Required -->
<x-input required placeholder="Required field" />

<!-- 无效 -->
<x-input invalid placeholder="Invalid input" />
```

## Common Patterns

### 表单字段

```blade
<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium mb-1">用户名</label>
        <x-input name="username" placeholder="Enter username" />
    </div>
    
    <div>
        <label class="block text-sm font-medium mb-1">邮箱</label>
        <x-input type="email" name="email" placeholder="Enter email" />
    </div>
</div>
```

### 搜索框

```blade
<x-input 
    type="search" 
    placeholder="搜索..." 
    class="w-full"
/>
```

### Input with Validation

```blade
<div>
    <x-input 
        name="email"
        type="email"
        :invalid="$errors->has('email')"
        placeholder="Enter email"
    />
    @error('email')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
```

## Livewire 集成

```blade
<x-input 
    wire:model="username"
    placeholder="用户名"
/>

<!-- 实时验证 -->
<x-input 
    wire:model.live="email"
    :invalid="!empty($errors->get('email'))"
    placeholder="邮箱"
/>
```

## Alpine.js 集成

```blade
<div x-data="{ value: '' }">
    <x-input 
        x-model="value"
        placeholder="Enter content"
    />
    <p x-text="value"></p>
</div>
```

