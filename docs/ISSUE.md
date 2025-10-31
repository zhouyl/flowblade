# Flowblade 项目问题追踪

## 当前问题

### 1. 组件命名优化 (Task 14.13) - 已完成

**问题**: list-group 和 empty-state 组件的命名不够简洁

**解决方案** (已实现):
- **list-group**: 重命名为 `<x-list>`
  - 类名：`List_`（因为 List 是 PHP 保留字）
  - 子组件类名：`ListItem`（ListGroupItem → ListItem）
  - 已更新：ServiceProvider、类文件

- **empty-state**: 重命名为 `<x-empty>`
  - 类名：`Empty_`（因为 empty 是 PHP 保留字）
  - 已更新：ServiceProvider、类文件

- **switch**: 修改类名为 `Switch_`（因为 switch 是 PHP 保留字）
  - 原类名：`SwitchInput` → 改为 `Switch_`
  - 组件注册保持：`<x-switch>`
  - 已更新：类文件、ServiceProvider

**完成时间**: 本会话

**待完成**: 更新文档和 Blade 文件

---

### 2. 组件合并分析 (Task 14.14) - 已取消

**问题**: absolute-center 和 center 两个组件是否需要合并

**决策**: 取消此任务，保持两个组件分离

**原因**:
- **Center 组件**: 使用 flexbox 实现居中（`flex items-center justify-center`）
  - 支持 `inline` 参数切换 `inline-flex`
  - 适用于相对定位的容器

- **AbsoluteCenter 组件**: 使用绝对定位实现居中（`absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2`）
  - 支持 `axis` 参数控制居中方向（horizontal、vertical、both）
  - 适用于绝对定位的容器

- 两个组件功能不同，保持分离更符合单一职责原则

**优先级**: 无（已取消）

---

### 3. Dialog 组件设计分析 (Task 14.15) - 已确认

**问题**: 需要新增 Dialog 组件，提供多种对话框类型

**确认方案**:
- **Modal 组件现状**:
  - 支持标题、大小、位置、背景等参数
  - 使用 Flowbite 样式
  - 支持动态/静态背景
  - 支持 ESC 关闭和背景点击关闭

- **Dialog 组件设计**:
  - 基于 Modal 组件设计，但更简化
  - 提供 5 种类型：info、warning、error、success、confirm
  - 每种类型使用对应的图标和颜色
  - 支持标题（可选）、内容、操作按钮
  - 使用 Alpine.js 处理交互（显示/隐藏、按钮点击）

- **技术方案** (已确认可行):
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
