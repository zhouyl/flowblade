# VStack

垂直堆叠布局组件，是 Stack 组件的垂直方向快捷方式。

## 基本用法

```blade
<x-vstack>
    <div>项目 1</div>
    <div>项目 2</div>
    <div>项目 3</div>
</x-vstack>
```

## Props

| 属性 | 类型 | 默认值 | 说明 |
|------|------|--------|------|
| `as` | `string` | `'div'` | HTML 标签 |
| `spacing` | `string` | `null` | 间距：`xs`, `sm`, `md`, `lg`, `xl` |
| `align` | `string` | `null` | 水平对齐：`start`, `center`, `end`, `stretch` |
| `justify` | `string` | `null` | 垂直对齐：`start`, `center`, `end`, `between`, `around`, `evenly` |
| `divider` | `boolean` | `false` | 是否显示分隔线 |

## 间距

```blade
<x-vstack spacing="xs">
    <div>项目 1</div>
    <div>项目 2</div>
</x-vstack>

<x-vstack spacing="md">
    <div>项目 1</div>
    <div>项目 2</div>
</x-vstack>

<x-vstack spacing="xl">
    <div>项目 1</div>
    <div>项目 2</div>
</x-vstack>
```

## 对齐

```blade
<!-- 水平居中 -->
<x-vstack align="center">
    <div>项目 1</div>
    <div>项目 2</div>
</x-vstack>

<!-- 垂直居中 -->
<x-vstack justify="center" class="h-64">
    <div>项目 1</div>
    <div>项目 2</div>
</x-vstack>

<!-- 两端对齐 -->
<x-vstack justify="between" class="h-64">
    <div>顶部</div>
    <div>底部</div>
</x-vstack>
```

## 分隔线

```blade
<x-vstack divider spacing="md">
    <div>项目 1</div>
    <div>项目 2</div>
    <div>项目 3</div>
</x-vstack>
```

## 常见用法

### 表单布局

```blade
<x-vstack spacing="md">
    <div>
        <label class="block text-sm font-medium mb-1">用户名</label>
        <x-input />
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">邮箱</label>
        <x-input type="email" />
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">密码</label>
        <x-input type="password" />
    </div>
</x-vstack>
```

### 卡片列表

```blade
<x-vstack spacing="md">
    <div class="p-4 bg-white rounded-lg shadow">
        <h3 class="font-semibold">卡片 1</h3>
        <p class="text-sm text-gray-600">内容...</p>
    </div>
    <div class="p-4 bg-white rounded-lg shadow">
        <h3 class="font-semibold">卡片 2</h3>
        <p class="text-sm text-gray-600">内容...</p>
    </div>
</x-vstack>
```

### 侧边栏菜单

```blade
<x-vstack spacing="xs" class="w-64 p-4 bg-gray-50">
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">首页</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">产品</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">服务</a>
    <a href="#" class="px-3 py-2 rounded hover:bg-gray-200">关于</a>
</x-vstack>
```

### 时间线

```blade
<x-vstack spacing="lg" divider>
    <div>
        <div class="font-semibold">2024-01-01</div>
        <div class="text-sm text-gray-600">事件 1</div>
    </div>
    <div>
        <div class="font-semibold">2024-01-02</div>
        <div class="text-sm text-gray-600">事件 2</div>
    </div>
</x-vstack>
```

### 页面布局

```blade
<x-vstack spacing="lg" class="min-h-screen">
    <header class="p-4 bg-white shadow">
        导航栏
    </header>
    <main class="flex-1 p-4">
        主要内容
    </main>
    <footer class="p-4 bg-gray-100">
        页脚
    </footer>
</x-vstack>
```

