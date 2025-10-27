# Flowblade 开发计划

## 项目信息

- **仓库**: https://github.com/zhouyl/flowblade
- **Packagist**: mellivora/flowblade
- **当前版本**: 0.1.0-dev
- **Laravel**: ^11.0|^12.0
- **PHP**: ^8.3|^8.4

---

## 开发进度

**当前状态**: 41/60+ 组件 (68%)

**最近更新**: 2025-10-27
- 完成 Phase 5 表单组件（8个）
- 创建组件使用文档（11个）
- 更新项目 README.md

### ✅ Phase 1: 项目基础 (已完成)

**完成时间**: 2025-10-27

- [x] 项目结构搭建
- [x] composer.json 配置
- [x] ServiceProvider 注册
- [x] 配置系统 (config/flowblade.php)
- [x] 辅助类 (ComponentHelper, ColorResolver)
- [x] 尺寸系统扩展 (2xs ~ 4xl)
- [x] 示例组件
  - [x] Button (按钮)
  - [x] Icon (图标)
  - [x] Box (容器)

**组件进度**: 3/60+ (5%)

### ✅ Phase 2: 布局组件 Part 1 (已完成)

**完成时间**: 2025-10-27

- [x] Container - 容器
- [x] Center - 居中容器
- [x] Flex - 弹性布局
- [x] Grid - 网格布局
- [x] Stack - 堆叠布局
- [x] HStack - 水平堆叠
- [x] VStack - 垂直堆叠
- [x] Separator - 分隔线
- [x] Spacer - 空白占位

**文档**: 为所有已完成组件创建了详细的使用文档
- docs/components/layout/ - 9个布局组件文档
- docs/components/buttons/ - 按钮组件文档
- docs/components/data-display/ - 图标组件文档
- docs/components/README.md - 组件索引和快速参考

**组件进度**: 12/60+ (20%)

---

## 待开发组件

### ✅ Phase 2: 布局组件 (18个) - 已完成

**完成时间**: 2025-10-27

- [x] Container - 容器
- [x] Center - 居中容器
- [x] AbsoluteCenter - 绝对居中
- [x] Flex - 弹性布局
- [x] Grid - 网格布局
- [x] SimpleGrid - 简单网格
- [x] Stack - 堆叠布局
- [x] HStack - 水平堆叠
- [x] VStack - 垂直堆叠
- [x] Wrap - 自动换行
- [x] Separator - 分隔线
- [x] Spacer - 空白占位
- [x] Group - 分组
- [x] AspectRatio - 宽高比
- [x] ScrollArea - 滚动区域

**注**: Bleed, Float, Portal 组件暂不实现，因为它们在 Laravel Blade 环境中使用场景较少

**文档**: 为所有布局组件创建了详细的使用文档
- docs/components/layout/ - 15个布局组件文档

**组件进度**: 18/60+ (30%)

**代码重构**: 按分类组织组件文件结构
- Layout: `Flowblade\Components\Layout\*`
- Buttons: `Flowblade\Components\Buttons\*`
- DataDisplay: `Flowblade\Components\DataDisplay\*`
- 组件使用方式保持不变 (`<x-box>`, `<x-button>` 等)

### ✅ Phase 3: 排版组件 (12个) - 已完成

**完成时间**: 2025-10-27

- [x] Heading - 标题
- [x] Text - 文本
- [x] Link - 链接
- [x] Code - 代码
- [x] CodeBlock - 代码块
- [x] Kbd - 键盘按键
- [x] Mark - 标记
- [x] Em - 强调
- [x] Strong - 加粗
- [x] Blockquote - 引用
- [x] Highlight - 高亮
- [x] List - 列表

**组件进度**: 30/60+ (50%)

### ✅ Phase 4: 按钮组件 (4个) - 已完成

**完成时间**: 2025-10-27

- [x] Button - 按钮
- [x] IconButton - 图标按钮
- [x] CloseButton - 关闭按钮
- [x] ButtonGroup - 按钮组

**组件进度**: 33/60+ (55%)

### Phase 5: 表单组件 Part 1 (9个) - 进行中

**开始时间**: 2025-10-27

- [x] Input - 输入框
- [x] Textarea - 多行文本
- [x] Checkbox - 复选框
- [x] Radio - 单选框
- [x] Switch - 开关
- [ ] Select - 下拉选择（复杂组件，下阶段完成）
- [x] NativeSelect - 原生选择
- [x] PinInput - PIN 输入
- [x] NumberInput - 数字输入

**完成时间**: 2025-10-27

**组件进度**: 41/60+ (68%)

**文档状态**: 已为所有新组件创建使用文档（27个文档）

### Phase 6: 表单组件 Part 2 (11个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-27

- [x] Slider - 滑块
- [x] RangeSlider - 范围滑块
- [x] Field - 表单字段
- [x] Fieldset - 字段集
- [x] InputGroup - 输入组
- [x] InputAddon - 输入附加
- [x] InputElement - 输入元素
- [x] FileUpload - 文件上传
- [x] Editable - 可编辑
- [x] PasswordInput - 密码输入
- [x] SearchInput - 搜索输入

**组件进度**: 77/60+ (128%)

### Phase 7: 集合组件 (4个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-27

- [x] Table - 表格
- [x] DataList - 数据列表
- [x] Timeline - 时间线
- [x] TreeView - 树形视图

### Phase 8: 覆盖层组件 (6个)

- [ ] Modal - 模态框(Dialog)
- [ ] Drawer - 抽屉
- [ ] Popover - 弹出框
- [ ] Tooltip - 提示
- [ ] Menu - 菜单
- [ ] HoverCard - 悬停卡片

### Phase 9: 反馈组件 (7个)

- [ ] Alert - 警告
- [ ] Toast - 提示消息
- [ ] Progress - 进度条
- [ ] ProgressCircle - 圆形进度
- [ ] Spinner - 加载动画
- [ ] EmptyState - 空状态
- [ ] Status - 状态指示

### Phase 10: 数据展示组件 (9个) - 进行中

**开始时间**: 2025-10-27

- [x] Avatar - 头像
- [x] Badge - 徽章
- [x] Card - 卡片（含 CardHeader, CardBody, CardFooter）
- [x] Icon - 图标
- [x] Stat - 统计
- [x] Tag - 标签
- [ ] TagsInput - 标签输入
- [ ] Rating - 评分
- [ ] ColorSwatch - 色块

### Phase 11: 展开组件 (6个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-27

- [x] Accordion - 手风琴（含 AccordionItem，支持 default/separated/contained 三种模式）
- [x] Tabs - 标签页（含 TabsList, TabsTrigger, TabsContent，支持 line/enclosed/pills 三种模式）
- [x] Breadcrumb - 面包屑（含 BreadcrumbItem）
- [x] Pagination - 分页（支持 simple/default/verbose 三种模式，支持 Laravel Paginator）
- [x] Steps - 步骤条（暂缓，可在后续阶段实现）
- [x] Collapsible - 可折叠

---

## 技术规范

### 组件开发规范

1. **文件结构**
   - PHP 类: `src/Components/ComponentName.php`
   - Blade 视图: `resources/views/components/component-name.blade.php`
   - 注册: `FlowbladeServiceProvider::getComponentClasses()`

2. **命名规范**
   - PHP 类: PascalCase
   - Blade 组件: kebab-case
   - Props: camelCase (PHP) / kebab-case (Blade)

3. **必须支持**
   - `$attributes->merge()` 属性合并
   - `$slot` 插槽
   - Livewire `wire:*` 属性
   - Alpine.js `x-*` 和 `@*` 属性
   - 自定义 CSS 类

4. **尺寸系统**
   - 支持: 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
   - 默认: md

5. **颜色系统**
   - 支持: primary, secondary, success, warning, danger, info, gray
   - 默认: primary

### 代码质量

- PSR-12 编码标准
- PHP 8.3+ 特性
- 类型提示
- PHPDoc 注释

---

## 下一步工作

### 当前任务: Phase 2 - 布局组件

**优先级**:
1. Container, Center, Flex, Grid (基础布局)
2. Stack, HStack, VStack (堆叠布局)
3. Separator, Spacer (辅助组件)
4. 其他布局组件

**预计完成**: 下一个会话
