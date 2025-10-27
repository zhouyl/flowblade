# Textarea

Multi-line text input component.

## Basic Usage

```blade
<x-textarea placeholder="Enter content" />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | 尺寸：`xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'outline'` | 变体：`outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only |
| `required` | `boolean` | `false` | Required |
| `invalid` | `boolean` | `false` | Invalid state |
| `placeholder` | `string` | `null` | 占位text |
| `rows` | `int` | `3` | 行数 |
| `resize` | `boolean` | `true` | 是否允许调整大小 |

## Sizes

```blade
<x-textarea size="sm" placeholder="小尺寸" />
<x-textarea size="md" placeholder="中等尺寸" />
<x-textarea size="lg" placeholder="大尺寸" />
```

## Variants

```blade
<!-- Outline -->
<x-textarea variant="outline" placeholder="边框样式" />

<!-- Filled -->
<x-textarea variant="filled" placeholder="填充样式" />

<!-- Flushed -->
<x-textarea variant="flushed" placeholder="底线样式" />
```

## 行数

```blade
<x-textarea rows="3" placeholder="3 行" />
<x-textarea rows="5" placeholder="5 行" />
<x-textarea rows="10" placeholder="10 行" />
```

## 调整大小

```blade
<!-- 允许调整 -->
<x-textarea resize placeholder="可调整大小" />

<!-- 禁止调整 -->
<x-textarea :resize="false" placeholder="固定大小" />
```

## States

```blade
<!-- 禁用 -->
<x-textarea disabled placeholder="禁用状态" />

<!-- 只读 -->
<x-textarea readonly>只读内容</x-textarea>

<!-- Required -->
<x-textarea required placeholder="Required field" />

<!-- 无效 -->
<x-textarea invalid placeholder="Invalid input" />
```

## Common Patterns

### Comment Input

```blade
<div>
    <label class="block text-sm font-medium mb-1">评论</label>
    <x-textarea 
        name="comment"
        rows="4"
        placeholder="写下你的评论..."
    />
</div>
```

### 描述字段

```blade
<div>
    <label class="block text-sm font-medium mb-1">产品描述</label>
    <x-textarea 
        name="description"
        rows="6"
        placeholder="Enter product description"
    />
</div>
```

### 带验证

```blade
<div>
    <x-textarea 
        name="content"
        :invalid="$errors->has('content')"
        placeholder="Enter content"
    />
    @error('content')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
```

## Livewire 集成

```blade
<x-textarea 
    wire:model="description"
    rows="5"
    placeholder="产品描述"
/>
```

## Alpine.js 集成

```blade
<div x-data="{ content: '' }">
    <x-textarea 
        x-model="content"
        rows="4"
        placeholder="Enter content"
    />
    <p class="mt-2 text-sm text-gray-500">
        字数: <span x-text="content.length"></span>
    </p>
</div>
```

