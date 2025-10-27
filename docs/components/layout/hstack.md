# HStack

水平堆叠布局组件，是 Stack 组件的水平方向快捷方式。

## 基本用法

```blade
<x-hstack>
    <div>项目 1</div>
    <div>项目 2</div>
    <div>项目 3</div>
</x-hstack>
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `as` | `string` | `'div'` | HTML 标签 |
| `spacing` | `string` | `null` | 间距：`xs`, `sm`, `md`, `lg`, `xl` |
| `align` | `string` | `null` | 垂直对齐：`start`, `center`, `end`, `stretch`, `baseline` |
| `justify` | `string` | `null` | 水平对齐：`start`, `center`, `end`, `between`, `around`, `evenly` |
| `divider` | `boolean` | `false` | 是否显示分隔线 |

## 间距

```blade
<x-hstack spacing="xs">
    <div>项目 1</div>
    <div>项目 2</div>
</x-hstack>

<x-hstack spacing="md">
    <div>项目 1</div>
    <div>项目 2</div>
</x-hstack>

<x-hstack spacing="xl">
    <div>项目 1</div>
    <div>项目 2</div>
</x-hstack>
```

## 对齐

```blade
<!-- 垂直居中 -->
<x-hstack align="center">
    <div class="h-20">高元素</div>
    <div>普通元素</div>
</x-hstack>

<!-- 水平居中 -->
<x-hstack justify="center">
    <div>项目 1</div>
    <div>项目 2</div>
</x-hstack>

<!-- 两端对齐 -->
<x-hstack justify="between">
    <div>左侧</div>
    <div>右侧</div>
</x-hstack>
```

## 分隔线

```blade
<x-hstack divider spacing="md">
    <div>项目 1</div>
    <div>项目 2</div>
    <div>项目 3</div>
</x-hstack>
```

## 常见用法

### 导航栏

```blade
<x-hstack justify="between" align="center" class="p-4 bg-white shadow">
    <div class="font-bold text-xl">Logo</div>
    <x-hstack spacing="md">
        <a href="#">首页</a>
        <a href="#">产品</a>
        <a href="#">关于</a>
    </x-hstack>
</x-hstack>
```

### 按钮组

```blade
<x-hstack spacing="sm">
    <x-button>保存</x-button>
    <x-button variant="outline">取消</x-button>
</x-hstack>
```

### 表单行

```blade
<x-hstack spacing="md" align="end">
    <div class="flex-1">
        <label class="block text-sm font-medium mb-1">姓名</label>
        <x-input />
    </div>
    <div class="flex-1">
        <label class="block text-sm font-medium mb-1">邮箱</label>
        <x-input type="email" />
    </div>
</x-hstack>
```

### 卡片操作栏

```blade
<div class="p-6 bg-white rounded-lg shadow">
    <h3 class="text-lg font-semibold mb-4">卡片标题</h3>
    <p class="mb-4">卡片内容...</p>
    <x-hstack justify="end" spacing="sm">
        <x-button variant="outline">取消</x-button>
        <x-button>确认</x-button>
    </x-hstack>
</div>
```

### 图标和文本

```blade
<x-hstack spacing="sm" align="center">
    <x-icon name="mdi:check-circle" class="text-green-500" />
    <span>操作成功</span>
</x-hstack>
```

