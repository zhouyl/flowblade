# Heading

标题组件，用于显示各级标题。

## 基本用法

```blade
<x-heading>这是一个标题</x-heading>
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `as` | `string` | `'h2'` | HTML 标签：`h1`, `h2`, `h3`, `h4`, `h5`, `h6` |
| `size` | `string` | `null` | 文字尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | 字重：`normal`, `medium`, `semibold`, `bold`, `extrabold` |
| `color` | `string` | `null` | 文字颜色 |

## 标题级别

```blade
<x-heading as="h1">一级标题</x-heading>
<x-heading as="h2">二级标题</x-heading>
<x-heading as="h3">三级标题</x-heading>
<x-heading as="h4">四级标题</x-heading>
<x-heading as="h5">五级标题</x-heading>
<x-heading as="h6">六级标题</x-heading>
```

## 自定义尺寸

```blade
<x-heading size="4xl">超大标题</x-heading>
<x-heading size="3xl">特大标题</x-heading>
<x-heading size="2xl">大标题</x-heading>
<x-heading size="xl">较大标题</x-heading>
<x-heading size="lg">中等标题</x-heading>
```

## 字重

```blade
<x-heading weight="normal">普通字重</x-heading>
<x-heading weight="medium">中等字重</x-heading>
<x-heading weight="semibold">半粗体</x-heading>
<x-heading weight="bold">粗体</x-heading>
<x-heading weight="extrabold">特粗体</x-heading>
```

## 颜色

```blade
<x-heading color="primary">主色标题</x-heading>
<x-heading color="success">成功色标题</x-heading>
<x-heading color="danger">危险色标题</x-heading>
```

## 常见用法

### 页面标题

```blade
<x-heading as="h1" size="4xl" class="mb-4">
    欢迎使用 Flowblade
</x-heading>
<x-text size="lg" color="gray">
    基于 Tailwind CSS 的 Laravel Blade 组件库
</x-text>
```

### 章节标题

```blade
<x-heading as="h2" size="2xl" class="mb-3">
    功能特性
</x-heading>
<x-text>
    Flowblade 提供了丰富的组件...
</x-text>
```

### 卡片标题

```blade
<div class="p-6 bg-white rounded-lg shadow">
    <x-heading as="h3" size="lg" class="mb-2">
        卡片标题
    </x-heading>
    <x-text>卡片内容...</x-text>
</div>
```

