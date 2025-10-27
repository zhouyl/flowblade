# Input

输入框组件，用于文本输入。

## 基本用法

```blade
<x-input placeholder="请输入内容" />
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `type` | `string` | `'text'` | 输入类型 |
| `size` | `string` | `'md'` | 尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'outline'` | 变体：`outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | 是否禁用 |
| `readonly` | `boolean` | `false` | 是否只读 |
| `required` | `boolean` | `false` | 是否必填 |
| `invalid` | `boolean` | `false` | 是否无效 |
| `placeholder` | `string` | `null` | 占位文本 |

## 尺寸

```blade
<x-input size="xs" placeholder="超小尺寸" />
<x-input size="sm" placeholder="小尺寸" />
<x-input size="md" placeholder="中等尺寸" />
<x-input size="lg" placeholder="大尺寸" />
<x-input size="xl" placeholder="超大尺寸" />
```

## 变体

```blade
<!-- Outline -->
<x-input variant="outline" placeholder="边框样式" />

<!-- Filled -->
<x-input variant="filled" placeholder="填充样式" />

<!-- Flushed -->
<x-input variant="flushed" placeholder="底线样式" />
```

## 输入类型

```blade
<x-input type="text" placeholder="文本" />
<x-input type="email" placeholder="邮箱" />
<x-input type="password" placeholder="密码" />
<x-input type="number" placeholder="数字" />
<x-input type="tel" placeholder="电话" />
<x-input type="url" placeholder="网址" />
<x-input type="search" placeholder="搜索" />
```

## 状态

```blade
<!-- 禁用 -->
<x-input disabled placeholder="禁用状态" />

<!-- 只读 -->
<x-input readonly value="只读内容" />

<!-- 必填 -->
<x-input required placeholder="必填项" />

<!-- 无效 -->
<x-input invalid placeholder="无效输入" />
```

## 常见用法

### 表单字段

```blade
<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium mb-1">用户名</label>
        <x-input name="username" placeholder="请输入用户名" />
    </div>
    
    <div>
        <label class="block text-sm font-medium mb-1">邮箱</label>
        <x-input type="email" name="email" placeholder="请输入邮箱" />
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

### 带验证的输入

```blade
<div>
    <x-input 
        name="email"
        type="email"
        :invalid="$errors->has('email')"
        placeholder="请输入邮箱"
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
        placeholder="输入内容"
    />
    <p x-text="value"></p>
</div>
```

