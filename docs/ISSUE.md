# Flowblade 项目问题追踪

## 当前问题

### 1. 组件命名优化分析 (Task 14.13)

**问题**: list-group 和 empty-state 组件的命名不够简洁

**分析结果**:
- **list-group**: 当前注册为 `<x-list-group>`，类名为 `ListGroup`，有子组件 `ListGroupItem`
  - 功能：显示一系列项目、按钮或链接的容器
  - 建议重命名为 `<x-list>`，类名保持 `List`
  - 子组件 `ListGroupItem` 应重命名为 `ListItem`
  - 需要更新：ServiceProvider、类文件、Blade 文件、文档、配置

- **empty-state**: 当前注册为 `<x-empty-state>`，类名为 `EmptyState`
  - 功能：显示空状态或无数据状态
  - 建议重命名为 `<x-empty>`，类名保持 `EmptyState`（因为 empty 是 PHP 保留字）
  - 需要更新：ServiceProvider、Blade 文件、文档、配置

**优先级**: 中等（影响 API 兼容性，需要谨慎处理）

---

### 2. 组件合并分析 (Task 14.14)

**问题**: absolute-center 和 center 两个组件是否需要合并

**分析结果**:
- **Center 组件**: 使用 flexbox 实现居中（`flex items-center justify-center`）
  - 支持 `inline` 参数切换 `inline-flex`
  - 适用于相对定位的容器

- **AbsoluteCenter 组件**: 使用绝对定位实现居中（`absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2`）
  - 支持 `axis` 参数控制居中方向（horizontal、vertical、both）
  - 适用于绝对定位的容器

**结论**: 两个组件功能不同，不建议合并
- Center 用于 flexbox 布局
- AbsoluteCenter 用于绝对定位布局
- 保持分离更符合单一职责原则

**优先级**: 低（无需处理）

---

### 3. Dialog 组件设计分析 (Task 14.15)

**问题**: 需要新增 Dialog 组件，提供多种对话框类型

**分析结果**:
- **Modal 组件现状**:
  - 支持标题、大小、位置、背景等参数
  - 使用 Flowbite 样式
  - 支持动态/静态背景
  - 支持 ESC 关闭和背景点击关闭

- **Dialog 组件设计建议**:
  - 可基于 Modal 组件设计，但更简化
  - 提供 5 种类型：info、warning、error、success、confirm
  - 每种类型使用对应的图标和颜色
  - 支持标题（可选）、内容、操作按钮
  - 需要 Alpine.js 处理交互（显示/隐藏、按钮点击）

- **技术方案**:
  - 创建 Dialog 组件类（Overlay 类别）
  - 创建 Blade 模板，支持不同类型
  - 使用 Alpine.js 处理模态框交互
  - 不需要 Livewire（Alpine.js 足够）
  - 使用 Flowbite 的图标和颜色方案

- **功能需求**:
  - **info**: 消息图标 (heroicons:information-circle)，蓝色
  - **warning**: 警告图标 (heroicons:exclamation-triangle)，黄色
  - **error**: 错误图标 (heroicons:x-circle)，红色
  - **success**: 成功图标 (heroicons:check-circle)，绿色
  - **confirm**: 确认图标 (heroicons:question-mark-circle)，紫色

**优先级**: 低（新功能，可在后续会话完成）

## 已解决的问题

### 无

---

## 问题报告模板

如果发现问题，请按以下格式报告：

**问题标题**: [简要描述]

**问题描述**: [详细描述问题]

**重现步骤**:
1. 步骤 1
2. 步骤 2
3. 步骤 3

**预期行为**: [应该发生什么]

**实际行为**: [实际发生了什么]

**环境信息**:
- Laravel 版本: [版本号]
- PHP 版本: [版本号]
- Flowblade 版本: [版本号]

**附加信息**: [任何其他相关信息]
