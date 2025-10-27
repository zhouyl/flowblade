# Text

文本组件，用于显示段落文本。

## 基本用法

```blade
<x-text>这是一段文本</x-text>
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `as` | `string` | `'p'` | HTML 标签 |
| `size` | `string` | `null` | 文字尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | 字重：`normal`, `medium`, `semibold`, `bold` |
| `color` | `string` | `null` | 文字颜色 |
| `align` | `string` | `null` | 对齐方式：`left`, `center`, `right`, `justify` |
| `truncate` | `boolean` | `false` | 是否截断 |
| `lineClamp` | `string` | `null` | 行数限制：`1`, `2`, `3`, `4`, `5`, `6` |

## 尺寸

```blade
<x-text size="xs">超小文本</x-text>
<x-text size="sm">小文本</x-text>
<x-text size="md">中等文本</x-text>
<x-text size="lg">大文本</x-text>
<x-text size="xl">超大文本</x-text>
```

## 字重

```blade
<x-text weight="normal">普通字重</x-text>
<x-text weight="medium">中等字重</x-text>
<x-text weight="semibold">半粗体</x-text>
<x-text weight="bold">粗体</x-text>
```

## 颜色

```blade
<x-text color="primary">主色文本</x-text>
<x-text color="success">成功色文本</x-text>
<x-text color="warning">警告色文本</x-text>
<x-text color="danger">危险色文本</x-text>
<x-text color="gray">灰色文本</x-text>
```

## 对齐

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
    这是一段很长的文本，超出容器宽度时会被截断并显示省略号
</x-text>

<!-- 多行截断 -->
<x-text line-clamp="2" class="w-64">
    这是一段很长的文本，会在第二行末尾截断并显示省略号。
    超出的内容将被隐藏。
</x-text>
```

## 常见用法

### 段落文本

```blade
<x-text class="mb-4">
    Flowblade 是一个基于 Tailwind CSS 的 Laravel Blade 组件库，
    提供了丰富的 UI 组件，帮助你快速构建现代化的 Web 应用。
</x-text>
```

### 描述文本

```blade
<x-text size="sm" color="gray">
    最后更新于 2024-01-01
</x-text>
```

### 引导文本

```blade
<x-text size="lg" class="mb-6">
    欢迎使用我们的产品，让我们开始吧！
</x-text>
```

