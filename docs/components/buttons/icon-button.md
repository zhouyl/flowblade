# IconButton

图标按钮组件，用于显示仅包含图标的按钮。

## 基本用法

```blade
<x-icon-button icon="mdi:home" />
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `icon` | `string` | - | 图标名称（必填） |
| `size` | `string` | `'md'` | 按钮尺寸：`2xs`, `xs`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `4xl` |
| `variant` | `string` | `'solid'` | 按钮变体：`solid`, `outline`, `ghost`, `link` |
| `color` | `string` | `'primary'` | 颜色主题：`primary`, `secondary`, `success`, `warning`, `danger`, `info` |
| `rounded` | `boolean` | `false` | 是否为圆形按钮 |
| `disabled` | `boolean` | `false` | 是否禁用 |
| `loading` | `boolean` | `false` | 是否显示加载状态 |
| `type` | `string` | `'button'` | 按钮类型 |
| `ariaLabel` | `string` | `null` | 无障碍标签 |

## 尺寸变体

```blade
<x-icon-button icon="mdi:home" size="xs" />
<x-icon-button icon="mdi:home" size="sm" />
<x-icon-button icon="mdi:home" size="md" />
<x-icon-button icon="mdi:home" size="lg" />
<x-icon-button icon="mdi:home" size="xl" />
```

## 样式变体

```blade
<!-- Solid -->
<x-icon-button icon="mdi:home" variant="solid" />

<!-- Outline -->
<x-icon-button icon="mdi:home" variant="outline" />

<!-- Ghost -->
<x-icon-button icon="mdi:home" variant="ghost" />

<!-- Link -->
<x-icon-button icon="mdi:home" variant="link" />
```

## 颜色主题

```blade
<x-icon-button icon="mdi:home" color="primary" />
<x-icon-button icon="mdi:home" color="secondary" />
<x-icon-button icon="mdi:home" color="success" />
<x-icon-button icon="mdi:home" color="warning" />
<x-icon-button icon="mdi:home" color="danger" />
```

## 圆形按钮

```blade
<x-icon-button icon="mdi:home" rounded />
<x-icon-button icon="mdi:plus" rounded color="success" />
```

## 状态

```blade
<!-- 禁用 -->
<x-icon-button icon="mdi:home" disabled />

<!-- 加载中 -->
<x-icon-button icon="mdi:home" loading />
```

## 无障碍

```blade
<x-icon-button 
    icon="mdi:close" 
    aria-label="关闭对话框"
/>
```

## 常见用法

### 工具栏按钮

```blade
<div class="flex gap-2">
    <x-icon-button icon="mdi:content-save" aria-label="保存" />
    <x-icon-button icon="mdi:printer" aria-label="打印" />
    <x-icon-button icon="mdi:share" aria-label="分享" />
</div>
```

### 操作按钮

```blade
<div class="flex gap-1">
    <x-icon-button icon="mdi:pencil" size="sm" variant="ghost" />
    <x-icon-button icon="mdi:delete" size="sm" variant="ghost" color="danger" />
</div>
```

## Livewire 集成

```blade
<x-icon-button 
    icon="mdi:refresh" 
    wire:click="refresh"
    :loading="$isRefreshing"
/>
```

