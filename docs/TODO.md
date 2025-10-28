# Flowblade 开发计划

## 项目信息

- **仓库**: https://github.com/zhouyl/flowblade
- **Packagist**: mellivora/flowblade
- **当前版本**: 0.1.0-dev
- **Laravel**: ^11.0|^12.0
- **PHP**: ^8.3|^8.4

---

## 开发进度

**当前状态**: 129/60+ 组件 (215%)

**最近更新**: 2025-10-28
- 完成 Phase 14 高级表单组件（8个）✅
- 完成 Phase 16 媒体与展示组件（4个）✅
- 进行 Phase 17 特殊用途组件（2/4个）

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

### Phase 5: 表单组件 Part 1 (9个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-28

- [x] Input - 输入框
- [x] Textarea - 多行文本
- [x] Checkbox - 复选框
- [x] Radio - 单选框
- [x] Switch - 开关
- [x] Select - 下拉选择（支持搜索、多选、自定义样式，需要 Alpine.js）
- [x] NativeSelect - 原生选择
- [x] PinInput - PIN 输入
- [x] NumberInput - 数字输入

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

**组件进度**: 126/60+ (210%)

### Phase 7: 集合组件 (4个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-27

- [x] Table - 表格
- [x] DataList - 数据列表
- [x] Timeline - 时间线
- [x] TreeView - 树形视图

### Phase 8: 覆盖层组件 (6个) - 已完成 ✅

**开始时间**: 2025-10-28
**完成时间**: 2025-10-28

- [x] Modal - 模态框（支持 10 种尺寸，9 种位置，static/dynamic backdrop，可配置关闭行为，支持 header/body/footer 插槽）
- [x] Drawer - 抽屉（支持 4 种位置，7 种宽度/高度，backdrop 控制，body scrolling，edge 模式，支持 header/body/footer 插槽）
- [x] Popover - 弹出框（支持 top/right/bottom/left 位置，hover/click 触发，5种宽度，可选标题/箭头，支持富文本内容）
- [x] Tooltip - 提示（支持 top/right/bottom/left 位置，hover/click 触发，dark/light 样式，可选箭头）
- [x] Menu - 菜单（包含 Menu, MenuItem, MenuDivider, MenuHeader，支持 12 种位置，click/hover 触发，6 种宽度，图标支持，状态管理）
- [x] HoverCard - 悬停卡片（专为 hover 交互设计，支持 4 种位置，5 种宽度，可配置延迟，支持富文本内容）

### Phase 9: 反馈组件 (7个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-28

- [x] Alert - 警告（支持 info/success/warning/danger 状态，solid/subtle/left-accent/top-accent 四种模式）
- [x] Toast - 提示消息（支持自动消失、手动关闭、6种位置、Alpine.js 交互）
- [x] Progress - 进度条（支持 default/striped/animated 三种模式，indeterminate 状态）
- [x] ProgressCircle - 圆形进度（支持 SVG 圆形进度，indeterminate 状态，可自定义粗细）
- [x] Spinner - 加载动画（支持 spinner/dots/pulse/ring 四种模式）
- [x] EmptyState - 空状态（支持图标、标题、描述、操作按钮，三种尺寸）
- [x] Status - 状态指示（支持 dot/badge/pill 三种模式，8种状态类型，pulse 动画）

### Phase 10: 数据展示组件 (9个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-28

- [x] Avatar - 头像
- [x] Badge - 徽章
- [x] Card - 卡片（含 CardHeader, CardBody, CardFooter）
- [x] Icon - 图标
- [x] Stat - 统计
- [x] Tag - 标签
- [x] TagsInput - 标签输入（支持键盘操作，自动分隔符，最大标签数，防重复，7种颜色，4种尺寸）
- [x] Rating - 评分（支持只读和交互模式，半星显示，8种颜色，5种尺寸）
- [x] ColorSwatch - 色块（支持多种颜色格式，可复制，方形/圆形变体，5种尺寸）

### Phase 11: 展开组件 (6个) - 已完成 ✅

**开始时间**: 2025-10-27
**完成时间**: 2025-10-27

- [x] Accordion - 手风琴（含 AccordionItem，支持 default/separated/contained 三种模式）
- [x] Tabs - 标签页（含 TabsList, TabsTrigger, TabsContent，支持 line/enclosed/pills 三种模式）
- [x] Breadcrumb - 面包屑（含 BreadcrumbItem）
- [x] Pagination - 分页（支持 simple/default/verbose 三种模式，支持 Laravel Paginator）
- [x] Steps - 步骤条（暂缓，可在后续阶段实现）
- [x] Collapsible - 可折叠

### Phase 12: 其他实用组件 (已完成 ✅)

**开始时间**: 2025-10-28
**完成时间**: 2025-10-28

- [x] Select - 增强下拉选择（支持搜索、多选、自定义样式，需要 Alpine.js）
- [x] Skeleton - 骨架屏（8 种预设类型：text/image/video/card/avatar/button/circle/rectangle，支持自定义尺寸和动画）
- [x] QRCode - 二维码（支持 simple-qrcode 集成、自定义内容、6 种尺寸、4 种纠错级别、SVG/PNG 格式）
- [x] Steps - 步骤条（包含 Steps 和 StepItem 两个组件，4 种变体：default/progress/detailed/breadcrumb，支持水平/垂直布局）

### Phase 13: 导航与布局组件 (已完成 ✅)

**开始时间**: 2025-10-28
**完成时间**: 2025-10-28

- [x] Navbar - 导航栏（包含 Navbar, NavbarBrand, NavbarToggle, NavbarCollapse, NavbarLink 五个组件，支持响应式移动菜单，Flowbite Collapse 集成）
- [x] Sidebar - 侧边栏（包含 Sidebar, SidebarItem, SidebarGroup, SidebarToggle 四个组件，支持固定/抽屉模式、多级菜单、图标徽章，Flowbite Drawer 和 Collapse 集成）
- [x] Footer - 页脚（支持默认/固定模式、版权声明、链接、Logo、社交媒体图标）
- [x] Banner - 横幅/公告栏（支持顶部/底部定位、可关闭、营销/新闻订阅/信息横幅变体，Flowbite Dismiss 集成）

### Phase 14: 高级表单组件 (已完成) ✅

**开始时间**: 2025-10-28
**完成时间**: 2025-10-28

- [x] Clipboard - 剪贴板（复制到剪贴板功能，支持输入框、代码块、文本内容，Flowbite Clipboard 集成，支持成功反馈，多种尺寸和变体）
- [x] FloatingLabel - 浮动标签（Material Design 风格的浮动标签输入框，支持 input/textarea/select，4 种变体，3 种尺寸，错误状态，辅助文本）
- [x] Datepicker - 日期选择器（Flowbite Datepicker 集成，支持单日期、日期范围、内联模式、自动隐藏、日期格式、最小/最大日期、方向、标题）
- [x] Timepicker - 时间选择器（原生 HTML5 time input 增强，支持最小/最大时间、步长、时钟图标）

**说明**：
- Clipboard 已完成，需要 Flowbite JS 的 CopyClipboard 组件
- FloatingLabel 已完成（包含 FloatingLabel、FloatingTextarea、FloatingSelect 三个组件）
- Datepicker 已完成（包含 Datepicker、DateRangePicker、InlineDatepicker 三个组件）
- Timepicker 已完成，基于原生 HTML5 time input

### Phase 15: 高级交互组件 (计划中)

**预计开始时间**: 待定

- [ ] SpeedDial - 快速拨号（浮动操作按钮组，支持 4 种位置，展开/收起动画，图标和文本支持）
- [ ] MegaMenu - 超级菜单（大型下拉菜单，支持多列布局、图标、描述、分组，适用于复杂导航）
- [ ] BottomNavigation - 底部导航（移动端底部导航栏，支持图标、文本、徽章，适用于移动应用）

**说明**：
- Clipboard 需要 Flowbite JS 的 CopyClipboard 组件
- SpeedDial 适用于移动端和桌面端的快速操作
- MegaMenu 适用于大型网站的复杂导航
- BottomNavigation 专为移动端设计

### Phase 16: 媒体与展示组件 (已完成) ✅

**开始时间**: 2025-10-28
**完成时间**: 2025-10-28

- [x] Gallery - 图片画廊（图片网格展示，支持响应式列数、自定义间距、Lightbox 集成）
- [x] Carousel - 轮播图（图片/内容轮播，支持自动播放、指示器、导航按钮、Flowbite JS 集成）
- [x] Video - 视频播放器（HTML5 视频播放器增强，支持自动播放、循环、静音、海报图、预加载、多源、字幕、响应式）
- [x] DeviceMockup - 设备模型（展示应用界面的设备框架，支持 mobile/tablet/laptop/desktop，横竖屏切换，纯 CSS 实现）

**说明**：
- Gallery 已完成（包含 Gallery、GalleryItem 两个组件）
- Carousel 已完成（包含 Carousel、CarouselItem 两个组件，需要 Flowbite JS）
- Video 已完成（基于 HTML5 video 元素，支持多种视频格式、字幕、响应式设计）
- DeviceMockup 已完成（纯 CSS 实现，支持 4 种设备类型，横竖屏切换，深色模式）

### Phase 17: 特殊用途组件 (进行中)

**开始时间**: 2025-10-28

- [x] Jumbotron - 巨幕（大型展示区域，适用于首页 Hero 区域，支持背景图、渐变、CTA 按钮、4 种尺寸、3 种对齐方式、全宽模式）
- [x] ListGroup - 列表组（交互式列表，支持链接、按钮、徽章、图标，可选中状态）
- [ ] Indicators - 指示器（状态指示器，支持在线/离线、通知数量、活动状态）
- [ ] ChatBubble - 聊天气泡（聊天界面消息气泡，支持左右对齐、头像、时间戳、已读状态）

**说明**：
- Jumbotron 已完成（适用于营销页面和首页，支持背景图、渐变、覆盖层）
- ListGroup 已完成（包含 ListGroup、ListGroupItem 两个组件）
- Indicators 与现有 Status 组件类似但更专注于特定场景
- ChatBubble 适用于聊天应用和客服系统

---

## 组件优先级分析

### 高优先级（建议优先实现）

1. ~~**Clipboard**~~ - 已完成 ✅
2. ~~**FloatingLabel**~~ - 已完成 ✅
3. ~~**Datepicker**~~ - 已完成 ✅
4. ~~**Timepicker**~~ - 已完成 ✅
5. ~~**ListGroup**~~ - 已完成 ✅
6. ~~**Gallery**~~ - 已完成 ✅
7. ~~**Carousel**~~ - 已完成 ✅
8. ~~**Video**~~ - 已完成 ✅
9. ~~**DeviceMockup**~~ - 已完成 ✅
10. ~~**Jumbotron**~~ - 已完成 ✅

### 中优先级（可选实现）

1. **Carousel** - 轮播图常用但可用第三方库替代
2. **SpeedDial** - 移动端常用但非必需
3. **MegaMenu** - 大型网站需要但小型项目用不到
4. **Timepicker** - 可用原生 HTML5 time input
5. **PhoneInput** - 特定场景需要

### 低优先级（可暂缓）

1. **BottomNavigation** - 专为移动端设计，桌面端用不到
2. **DeviceMockup** - 展示用途，非功能性组件
3. **Jumbotron** - 可用现有 Box/Container 组件组合实现
4. **ChatBubble** - 特定场景（聊天应用）才需要
5. **Indicators** - 与现有 Status/Badge 组件功能重叠

### 不建议实现的组件

以下 Flowbite 组件已在项目中实现或不适合：

- **Drawer** - 已实现 ✅
- **Dropdown** - 已实现为 Menu 组件 ✅
- **Modal** - 已实现 ✅
- **Navbar** - 已实现 ✅
- **Popover** - 已实现 ✅
- **Progress** - 已实现 ✅
- **Sidebar** - 已实现 ✅
- **Skeleton** - 已实现 ✅
- **Stepper** - 已实现为 Steps 组件 ✅
- **Tables** - 已实现为 Table 组件 ✅
- **Tabs** - 已实现 ✅
- **Toast** - 已实现 ✅
- **Tooltips** - 已实现为 Tooltip 组件 ✅
- **Forms** - 已实现多个表单组件 ✅

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
