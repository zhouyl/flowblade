# Textarea

多行文本输入组件。

## 基本用法

```blade
<x-textarea placeholder="请输入内容" />
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `size` | `string` | `'md'` | 尺寸：`xs`, `sm`, `md`, `lg`, `xl` |
| `variant` | `string` | `'outline'` | 变体：`outline`, `filled`, `flushed` |
| `disabled` | `boolean` | `false` | 是否禁用 |
| `readonly` | `boolean` | `false` | 是否只读 |
| `required` | `boolean` | `false` | 是否必填 |
| `invalid` | `boolean` | `false` | 是否无效 |
| `placeholder` | `string` | `null` | 占位文本 |
| `rows` | `int` | `3` | 行数 |
| `resize` | `boolean` | `true` | 是否允许调整大小 |

## 尺寸

```blade
<x-textarea size="sm" placeholder="小尺寸" />
<x-textarea size="md" placeholder="中等尺寸" />
<x-textarea size="lg" placeholder="大尺寸" />
```

## 变体

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

## 状态

```blade
<!-- 禁用 -->
<x-textarea disabled placeholder="禁用状态" />

<!-- 只读 -->
<x-textarea readonly>只读内容</x-textarea>

<!-- 必填 -->
<x-textarea required placeholder="必填项" />

<!-- 无效 -->
<x-textarea invalid placeholder="无效输入" />
```

## 常见用法

### 评论输入

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
        placeholder="请输入产品描述"
    />
</div>
```

### 带验证

```blade
<div>
    <x-textarea 
        name="content"
        :invalid="$errors->has('content')"
        placeholder="请输入内容"
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
        placeholder="输入内容"
    />
    <p class="mt-2 text-sm text-gray-500">
        字数: <span x-text="content.length"></span>
    </p>
</div>
```

