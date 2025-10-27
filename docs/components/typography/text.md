# Text

text组件，用于显示段落text。

## Basic Usage

```blade
<x-text>这是一段text</x-text>
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `as` | `string` | `'p'` | HTML tag |
| `size` | `string` | `null` | 文字尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | 字重：`normal`, `medium`, `semibold`, `bold` |
| `color` | `string` | `null` | 文字颜色 |
| `align` | `string` | `null` | 对齐方式：`left`, `center`, `right`, `justify` |
| `truncate` | `boolean` | `false` | 是否截断 |
| `lineClamp` | `string` | `null` | 行数限制：`1`, `2`, `3`, `4`, `5`, `6` |

## Sizes

```blade
<x-text size="xs">超小text</x-text>
<x-text size="sm">小text</x-text>
<x-text size="md">中等text</x-text>
<x-text size="lg">大text</x-text>
<x-text size="xl">超大text</x-text>
```

## 字重

```blade
<x-text weight="normal">普通字重</x-text>
<x-text weight="medium">中等字重</x-text>
<x-text weight="semibold">半粗体</x-text>
<x-text weight="bold">粗体</x-text>
```

## Colors

```blade
<x-text color="primary">主色text</x-text>
<x-text color="success">成功色text</x-text>
<x-text color="warning">警告色text</x-text>
<x-text color="danger">危险色text</x-text>
<x-text color="gray">灰色text</x-text>
```

## Alignment

```blade
<x-text align="left">左对齐</x-text>
<x-text align="center">居中对齐</x-text>
<x-text align="right">右对齐</x-text>
<x-text align="justify">两端对齐</x-text>
```

## 截断

```blade
<!-- 单行截断 -->
<x-text truncate class="w-64">
    这是一段很长的text，超出容器宽度时会被截断并显示省略号
</x-text>

<!-- 多行截断 -->
<x-text line-clamp="2" class="w-64">
    这是一段很长的text，会在第二行末尾截断并显示省略号。
    超出的内容将被隐藏。
</x-text>
```

## Common Patterns

### 段落text

```blade
<x-text class="mb-4">
    Flowblade 是一个基于 Tailwind CSS 的 Laravel Blade 组件库，
    提供了丰富的 UI 组件，帮助你快速构建现代化的 Web 应用。
</x-text>
```

### 描述text

```blade
<x-text size="sm" color="gray">
    最后更新于 2024-01-01
</x-text>
```

### 引导text

```blade
<x-text size="lg" class="mb-6">
    欢迎使用我们的产品，让我们开始吧！
</x-text>
```

