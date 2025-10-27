# ButtonGroup

按钮组组件，用于将多个按钮组合在一起显示。

## 基本用法

```blade
<x-button-group>
    <x-button>左</x-button>
    <x-button>中</x-button>
    <x-button>右</x-button>
</x-button-group>
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `orientation` | `string` | `'horizontal'` | 方向：`horizontal`, `vertical` |
| `attached` | `boolean` | `true` | 是否连接按钮（无间隙） |
| `spacing` | `string` | `null` | 间距（仅当 `attached=false` 时）：`xs`, `sm`, `md`, `lg` |

## 水平布局

```blade
<x-button-group>
    <x-button>按钮 1</x-button>
    <x-button>按钮 2</x-button>
    <x-button>按钮 3</x-button>
</x-button-group>
```

## 垂直布局

```blade
<x-button-group orientation="vertical">
    <x-button>按钮 1</x-button>
    <x-button>按钮 2</x-button>
    <x-button>按钮 3</x-button>
</x-button-group>
```

## 分离模式

```blade
<!-- 水平分离 -->
<x-button-group :attached="false" spacing="sm">
    <x-button>按钮 1</x-button>
    <x-button>按钮 2</x-button>
    <x-button>按钮 3</x-button>
</x-button-group>

<!-- 垂直分离 -->
<x-button-group orientation="vertical" :attached="false" spacing="md">
    <x-button>按钮 1</x-button>
    <x-button>按钮 2</x-button>
    <x-button>按钮 3</x-button>
</x-button-group>
```

## 常见用法

### 工具栏

```blade
<x-button-group>
    <x-button variant="outline">
        <x-icon name="mdi:format-bold" />
    </x-button>
    <x-button variant="outline">
        <x-icon name="mdi:format-italic" />
    </x-button>
    <x-button variant="outline">
        <x-icon name="mdi:format-underline" />
    </x-button>
</x-button-group>
```

### 分段控制

```blade
<x-button-group>
    <x-button variant="outline">日</x-button>
    <x-button variant="outline">周</x-button>
    <x-button variant="solid">月</x-button>
    <x-button variant="outline">年</x-button>
</x-button-group>
```

### 操作组

```blade
<x-button-group>
    <x-button color="success">保存</x-button>
    <x-button variant="outline">取消</x-button>
</x-button-group>
```

### 图标按钮组

```blade
<x-button-group>
    <x-icon-button icon="mdi:chevron-left" variant="outline" />
    <x-icon-button icon="mdi:chevron-right" variant="outline" />
</x-button-group>
```

## 与其他变体组合

```blade
<!-- 不同颜色 -->
<x-button-group>
    <x-button color="primary">主要</x-button>
    <x-button color="secondary">次要</x-button>
    <x-button color="success">成功</x-button>
</x-button-group>

<!-- 不同尺寸 -->
<x-button-group>
    <x-button size="sm">小</x-button>
    <x-button size="sm">中</x-button>
    <x-button size="sm">大</x-button>
</x-button-group>
```

## Alpine.js 集成

```blade
<div x-data="{ active: 'tab1' }">
    <x-button-group>
        <x-button 
            @click="active = 'tab1'"
            :variant="active === 'tab1' ? 'solid' : 'outline'"
        >
            标签 1
        </x-button>
        <x-button 
            @click="active = 'tab2'"
            :variant="active === 'tab2' ? 'solid' : 'outline'"
        >
            标签 2
        </x-button>
        <x-button 
            @click="active = 'tab3'"
            :variant="active === 'tab3' ? 'solid' : 'outline'"
        >
            标签 3
        </x-button>
    </x-button-group>
</div>
```

