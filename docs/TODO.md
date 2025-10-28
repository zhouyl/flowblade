# Flowblade 项目工作计划

## 项目概述

**项目名称**: Flowblade - Laravel Blade Component Library
**当前状态**: 137 个组件已完成代码 Review
**当前任务**: 添加 Style Props 支持 & 文档规范化
**开始时间**: 2025-10-28

## 当前进度

**总任务数**: 2 个主要任务
**已完成**: 0 个
**待完成**: 2 个
**完成度**: 0%

**当前阶段**: Phase 1 - Style Props 实现 (待开始)

## 工作目标

### 任务 1: 添加 Style Props 支持

参考 Chakra UI 的 style-props 系统，为 Flowblade 组件添加常用的通用样式属性支持。

#### 核心 Style Props 列表

**间距 (Spacing)**
- `p` - padding (all sides)
- `px` - padding left & right
- `py` - padding top & bottom
- `pt`, `pr`, `pb`, `pl` - padding individual sides
- `m` - margin (all sides)
- `mx` - margin left & right
- `my` - margin top & bottom
- `mt`, `mr`, `mb`, `ml` - margin individual sides

**尺寸 (Sizing)**
- `w` - width
- `h` - height
- `minW` - min-width
- `maxW` - max-width
- `minH` - min-height
- `maxH` - max-height

**颜色 (Colors)**
- `bg` - background color
- `color` - text color
- `borderColor` - border color

**边框 (Borders)**
- `border` - border width
- `borderTop`, `borderRight`, `borderBottom`, `borderLeft` - individual borders
- `rounded` / `borderRadius` - border radius
- `roundedTop`, `roundedRight`, `roundedBottom`, `roundedLeft` - individual corners

**布局 (Layout)**
- `display` - display property
- `position` - position property
- `top`, `right`, `bottom`, `left` - positioning

**阴影 (Shadow)**
- `shadow` - box shadow

**文字 (Typography)**
- `fontSize` - font size
- `fontWeight` - font weight
- `textAlign` - text alignment
- `lineHeight` - line height

#### 实现方案

1. **创建 StyleProps Trait**
   - 位置: `src/Traits/HasStyleProps.php`
   - 功能: 解析 style props 并转换为 Tailwind CSS 类

2. **更新核心组件**
   - Box 组件 (已有部分支持，需扩展)
   - Flex 组件
   - Grid 组件
   - Stack 组件
   - Text 组件
   - Heading 组件
   - 其他布局组件

3. **值映射规则**
   - 数字值映射到 Tailwind spacing scale (0-16)
   - 颜色值映射到主题颜色 (primary, secondary, success, warning, danger, info, gray)
   - 尺寸值支持 Tailwind 预设 (xs, sm, md, lg, xl, 2xl, full)

#### 示例用法

```blade
{{-- 间距 --}}
<x-box p="4" m="2">Content</x-box>
<x-box px="6" py="4">Content</x-box>

{{-- 颜色 --}}
<x-box bg="primary" color="white">Content</x-box>

{{-- 边框 --}}
<x-box border="2" borderColor="gray" rounded="md">Content</x-box>

{{-- 组合使用 --}}
<x-box 
    p="6" 
    m="4" 
    bg="blue.500" 
    rounded="lg" 
    shadow="md"
>
    Content
</x-box>
```

### 任务 2: 文档规范化

修正所有组件文档中未使用 Flowblade 组件的示例，将 HTML 标签替换为对应的 Flowblade 组件。

#### 替换规则

| HTML 标签 | Flowblade 组件 | 说明 |
|-----------|---------------|------|
| `<div>` | `<x-box>` | 通用容器 |
| `<span>` | `<x-text as="span">` | 行内文本 |
| `<p>` | `<x-text>` | 段落文本 |
| `<h1>` - `<h6>` | `<x-heading>` | 标题 |
| `<section>` | `<x-box as="section">` | 区块容器 |
| `<article>` | `<x-box as="article">` | 文章容器 |
| `<header>` | `<x-box as="header">` | 头部容器 |
| `<footer>` | `<x-footer>` | 页脚容器 |
| `<ul>`, `<ol>` | `<x-list-group>` | 列表 |
| `<button>` | `<x-button>` | 按钮 |
| `<a>` | `<x-button variant="link">` | 链接按钮 |
| `<img>` | 保持 `<img>` | 图片标签保持原样 |
| `<input>` | `<x-input>` | 输入框 |
| `<textarea>` | `<x-textarea>` | 文本域 |
| `<select>` | `<x-select>` | 选择框 |

#### 需要检查的文档

所有 `docs/components/` 目录下的 `.md` 文件，共约 80+ 个文档文件。

#### 优先级

1. **高优先级** (核心布局组件文档)
   - Layout 组件文档 (19 个)
   - Typography 组件文档 (2 个)
   - Button 组件文档 (4 个)

2. **中优先级** (常用组件文档)
   - Forms 组件文档 (20+ 个)
   - Data Display 组件文档 (10+ 个)
   - Navigation 组件文档 (8 个)

3. **低优先级** (其他组件文档)
   - Overlay 组件文档 (6 个)
   - Feedback 组件文档 (9 个)
   - Media 组件文档 (4 个)
   - Disclosure 组件文档 (2 个)

## 工作阶段

### Phase 1: Style Props 实现 (预计 2-3 个会话)

**目标**: 实现核心 Style Props 功能

- [ ] 1.1 创建 HasStyleProps Trait
  - [ ] 定义 style props 属性列表
  - [ ] 实现 props 到 Tailwind 类的转换逻辑
  - [ ] 支持响应式值 (如: `p={{ base: '4', md: '6' }}`)
  - [ ] 添加完整的英文注释

- [ ] 1.2 更新 Box 组件
  - [ ] 集成 HasStyleProps Trait
  - [ ] 扩展现有的 style props 支持
  - [ ] 更新组件文档
  - [ ] 添加使用示例

- [ ] 1.3 更新其他布局组件
  - [ ] Flex 组件
  - [ ] Grid 组件
  - [ ] Stack (HStack, VStack) 组件
  - [ ] Container 组件
  - [ ] Center 组件

- [ ] 1.4 更新文字组件
  - [ ] Text 组件
  - [ ] Heading 组件

- [ ] 1.5 测试与优化
  - [ ] 创建测试示例页面
  - [ ] 验证所有 props 正常工作
  - [ ] 性能优化
  - [ ] 代码格式化 (php-cs-fixer)

### Phase 2: 文档规范化 - 布局组件 (预计 1-2 个会话)

**目标**: 修正所有布局组件文档

- [ ] 2.1 Box 组件文档
- [ ] 2.2 Container 组件文档
- [ ] 2.3 Flex 组件文档
- [ ] 2.4 Grid 组件文档
- [ ] 2.5 Stack 组件文档
- [ ] 2.6 HStack 组件文档
- [ ] 2.7 VStack 组件文档
- [ ] 2.8 Center 组件文档
- [ ] 2.9 其他布局组件文档 (11 个)

### Phase 3: 文档规范化 - 其他组件 (预计 2-3 个会话)

**目标**: 修正所有其他组件文档

- [ ] 3.1 Typography 组件文档 (2 个)
- [ ] 3.2 Button 组件文档 (4 个)
- [ ] 3.3 Forms 组件文档 (20+ 个)
- [ ] 3.4 Data Display 组件文档 (10+ 个)
- [ ] 3.5 Navigation 组件文档 (8 个)
- [ ] 3.6 Overlay 组件文档 (6 个)
- [ ] 3.7 Feedback 组件文档 (9 个)
- [ ] 3.8 Media 组件文档 (4 个)
- [ ] 3.9 Disclosure 组件文档 (2 个)

## 工作原则

1. **质量优先**: 宁愿进度慢，也要确保实现质量和文档准确性
2. **细致全面**: 每个组件和文档都要仔细检查
3. **及时测试**: 实现功能后立即测试验证
4. **文档同步**: 修改代码后立即更新相关文档
5. **提交规范**: 每完成一个阶段提交一次代码
6. **英文注释**: 所有代码注释使用英文
7. **中文计划**: 工作计划文档使用中文

## 技术要点

### Style Props 实现参考

```php
// HasStyleProps Trait 示例结构
trait HasStyleProps
{
    protected function parseStyleProps(array $props): string
    {
        $classes = [];
        
        // Spacing
        if (isset($props['p'])) {
            $classes[] = "p-{$props['p']}";
        }
        
        // Colors
        if (isset($props['bg'])) {
            $classes[] = $this->mapBackgroundColor($props['bg']);
        }
        
        // ... more mappings
        
        return implode(' ', $classes);
    }
}
```

### 文档替换示例

```blade
<!-- 修改前 -->
<div class="flex items-center gap-4">
    <div class="text-lg font-bold">Title</div>
    <span class="text-gray-500">Subtitle</span>
</div>

<!-- 修改后 -->
<x-flex align="center" gap="4">
    <x-text fontSize="lg" fontWeight="bold">Title</x-text>
    <x-text as="span" color="gray.500">Subtitle</x-text>
</x-flex>
```

## 下一步行动

开始 Phase 1.1: 创建 HasStyleProps Trait

