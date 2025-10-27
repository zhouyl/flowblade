# CloseButton

关闭button组件，用于对话框、模态框、通知等场景的关闭操作。

## Basic Usage

```blade
<x-close-button />
```

## Props

| Prop | Type | Default | Description |
|------|------|--------|------|
| `size` | `string` | `'md'` | Button size：`xs`, `sm`, `md`, `lg`, `xl` |
| `disabled` | `boolean` | `false` | Disabled state |
| `ariaLabel` | `string` | `'Close'` | 无障碍标签 |

## Sizes变体

```blade
<x-close-button size="xs" />
<x-close-button size="sm" />
<x-close-button size="md" />
<x-close-button size="lg" />
<x-close-button size="xl" />
```

## States

```blade
<!-- 禁用 -->
<x-close-button disabled />
```

## Common Patterns

### 对话框关闭button

```blade
<div class="relative p-6 bg-white rounded-lg shadow-lg">
    <x-close-button 
        class="absolute top-4 right-4"
        aria-label="关闭对话框"
    />
    <h2>对话框heading</h2>
    <p>对话框内容...</p>
</div>
```

### 通知关闭button

```blade
<div class="flex items-start gap-3 p-4 bg-blue-50 rounded-lg">
    <div class="flex-1">
        <h3 class="font-semibold">通知heading</h3>
        <p class="text-sm">通知内容...</p>
    </div>
    <x-close-button size="sm" />
</div>
```

### Alert 关闭button

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

