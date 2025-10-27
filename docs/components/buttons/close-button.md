# CloseButton

关闭按钮组件，用于对话框、模态框、通知等场景的关闭操作。

## 基本用法

```blade
<x-close-button />
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `size` | `string` | `'md'` | 按钮尺寸：`xs`, `sm`, `md`, `lg`, `xl` |
| `disabled` | `boolean` | `false` | 是否禁用 |
| `ariaLabel` | `string` | `'Close'` | 无障碍标签 |

## 尺寸变体

```blade
<x-close-button size="xs" />
<x-close-button size="sm" />
<x-close-button size="md" />
<x-close-button size="lg" />
<x-close-button size="xl" />
```

## 状态

```blade
<!-- 禁用 -->
<x-close-button disabled />
```

## 常见用法

### 对话框关闭按钮

```blade
<div class="relative p-6 bg-white rounded-lg shadow-lg">
    <x-close-button 
        class="absolute top-4 right-4"
        aria-label="关闭对话框"
    />
    <h2>对话框标题</h2>
    <p>对话框内容...</p>
</div>
```

### 通知关闭按钮

```blade
<div class="flex items-start gap-3 p-4 bg-blue-50 rounded-lg">
    <div class="flex-1">
        <h3 class="font-semibold">通知标题</h3>
        <p class="text-sm">通知内容...</p>
    </div>
    <x-close-button size="sm" />
</div>
```

### Alert 关闭按钮

```blade
<div class="flex items-center justify-between p-4 bg-yellow-50 border border-yellow-200 rounded">
    <span>这是一条警告信息</span>
    <x-close-button size="sm" />
</div>
```

## Alpine.js 集成

```blade
<div x-data="{ show: true }" x-show="show">
    <div class="p-4 bg-white rounded shadow">
        <x-close-button @click="show = false" />
        <p>可关闭的内容</p>
    </div>
</div>
```

## Livewire 集成

```blade
<div>
    @if($showNotification)
        <div class="p-4 bg-green-50 rounded">
            <x-close-button wire:click="$set('showNotification', false)" />
            <p>操作成功！</p>
        </div>
    @endif
</div>
```

