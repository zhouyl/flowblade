# Flowblade 组件问题追踪

## 说明

本文档用于记录在代码 Review 过程中发现的问题，包括：
- 无法立即解决的技术问题
- 需要重大重构的组件
- 设计缺陷或功能不足
- 文档严重缺失或错误
- 需要进一步讨论的设计决策

## 问题分类

### 🔴 严重问题 (Critical)
影响组件核心功能或导致无法使用的问题

### 🟡 重要问题 (Important)
影响用户体验或不符合企业级标准的问题

### 🟢 改进建议 (Enhancement)
可以提升质量但不影响基本使用的改进建议

---

## 当前问题列表

### 🔴 大规模缺少 Style Props 支持 (Critical)

**发现时间**: Code Review Phase 2
**优先级**: 高
**状态**: 待修复

**问题描述**:
- 大量组件没有集成 HasStyleProps trait
- 这些组件类继承自 `Illuminate\View\Component` 而不是 `Flowblade\Components\Component`
- 无法使用 style props (p, m, bg, color, w, h 等)
- 不符合开发规范

**受影响的组件类别**:

#### DataDisplay (约 15 个组件)
- Badge, Avatar, Icon, Tag, Card, Table, Rating
- ChatBubble, Stat, Timeline, TreeView, ListGroup
- ColorSwatch, DataList, Indicator

#### Navigation (约 17 个组件)
- Navbar, Breadcrumb, Tabs, Pagination, Sidebar
- Steps, SpeedDial, MegaMenu 及其子组件

#### Feedback (9 个组件)
- Alert, Banner, Toast, Spinner, Progress
- ProgressCircle, Skeleton, EmptyState, Status

#### Overlay (8 个组件)
- Modal, Drawer, Tooltip, Popover, Menu
- HoverCard 及其子组件

#### Disclosure (3 个组件)
- Accordion, Collapsible 及其子组件

**修复方案**:
1. 更新组件类继承 `Flowblade\Components\Component`
2. 添加 `use HasStyleProps;` trait
3. 添加 `classes()` 方法来处理样式
4. 在构造函数中添加 `...$styleProps` 参数
5. 调用 `$this->setStyleProps($styleProps);`
6. 运行 `composer phpcs-fix` 进行代码格式化

**预期完成**: 多个会话（按优先级逐步修复）

**修复优先级**:
1. DataDisplay 组件 (最常用)
2. Navigation 组件
3. Feedback 组件
4. Overlay 组件
5. Disclosure 组件

## 已解决问题

### ✅ Switch 组件文件缺失 (已解决)

**组件**: SwitchInput (Forms)
**发现时间**: Phase 4 Review
**解决时间**: Phase 4 Review
**问题描述**:
- 最初认为 Switch 组件文件不存在
- 实际上组件命名为 SwitchInput

**解决方案**:
- 确认组件文件存在于 `src/Components/Forms/SwitchInput.php`
- 修复了命名空间错误（Mellivora\Flowblade -> Flowblade）
- 改进了类和参数文档

---

## 已解决问题

_暂无已解决问题_
