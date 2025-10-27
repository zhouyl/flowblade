# Heading

heading组件，用于显示各级heading。

## Basic Usage

```blade
<x-heading>这是一个heading</x-heading>
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `as` | `string` | `'h2'` | HTML tag：`h1`, `h2`, `h3`, `h4`, `h5`, `h6` |
| `size` | `string` | `null` | 文字尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `weight` | `string` | `null` | 字重：`normal`, `medium`, `semibold`, `bold`, `extrabold` |
| `color` | `string` | `null` | 文字颜色 |

## Heading level

```blade
<x-heading as="h1">一级heading</x-heading>
<x-heading as="h2">二级heading</x-heading>
<x-heading as="h3">三级heading</x-heading>
<x-heading as="h4">四级heading</x-heading>
<x-heading as="h5">五级heading</x-heading>
<x-heading as="h6">六级heading</x-heading>
```

## 自定义尺寸

```blade
<x-heading size="4xl">超大heading</x-heading>
<x-heading size="3xl">特大heading</x-heading>
<x-heading size="2xl">大heading</x-heading>
<x-heading size="xl">较大heading</x-heading>
<x-heading size="lg">中等heading</x-heading>
```

## 字重

```blade
<x-heading weight="normal">普通字重</x-heading>
<x-heading weight="medium">中等字重</x-heading>
<x-heading weight="semibold">半粗体</x-heading>
<x-heading weight="bold">粗体</x-heading>
<x-heading weight="extrabold">特粗体</x-heading>
```

## Colors

```blade
<x-heading color="primary">主色heading</x-heading>
<x-heading color="success">成功色heading</x-heading>
<x-heading color="danger">危险色heading</x-heading>
```

## Common Patterns

### 页面heading

```blade
<x-heading as="h1" size="4xl" class="mb-4">
    欢迎使用 Flowblade
</x-heading>
<x-text size="lg" color="gray">
    基于 Tailwind CSS 的 Laravel Blade 组件库
</x-text>
```

### 章节heading

```blade
<x-heading as="h2" size="2xl" class="mb-3">
    功能特性
</x-heading>
<x-text>
    Flowblade 提供了丰富的组件...
</x-text>
```

### 卡片heading

```blade
<div class="p-6 bg-white rounded-lg shadow">
    <x-heading as="h3" size="lg" class="mb-2">
        卡片heading
    </x-heading>
    <x-text>卡片内容...</x-text>
</div>
```

