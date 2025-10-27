# Flowblade 开发计划

## 项目信息

- **仓库**: https://github.com/zhouyl/flowblade
- **Packagist**: mellivora/flowblade
- **当前版本**: 0.1.0-dev
- **Laravel**: ^11.0
- **PHP**: ^8.3

---

## 开发进度

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

### Phase 2: 布局组件 (18个) - 进行中

- [x] Container - 容器
- [x] Center - 居中容器
- [ ] AbsoluteCenter - 绝对居中
- [x] Flex - 弹性布局
- [x] Grid - 网格布局
- [ ] SimpleGrid - 简单网格
- [x] Stack - 堆叠布局
- [x] HStack - 水平堆叠
- [x] VStack - 垂直堆叠
- [ ] Wrap - 自动换行
- [x] Separator - 分隔线
- [x] Spacer - 空白占位
- [ ] Group - 分组
- [ ] Bleed - 溢出布局
- [ ] Float - 浮动
- [ ] AspectRatio - 宽高比
- [ ] ScrollArea - 滚动区域
- [ ] Portal - 传送门

### Phase 3: 排版组件 (12个)

- [ ] Heading - 标题
- [ ] Text - 文本
- [ ] Link - 链接
- [ ] Code - 代码
- [ ] CodeBlock - 代码块
- [ ] Kbd - 键盘按键
- [ ] Mark - 标记
- [ ] Em - 强调
- [ ] Strong - 加粗
- [ ] Blockquote - 引用
- [ ] Highlight - 高亮
- [ ] List - 列表

### Phase 4: 按钮组件 (4个)

- [x] Button - 按钮
- [ ] IconButton - 图标按钮
- [ ] CloseButton - 关闭按钮
- [ ] ButtonGroup - 按钮组

### Phase 5: 表单组件 Part 1 (9个)

- [ ] Input - 输入框
- [ ] Textarea - 多行文本
- [ ] Checkbox - 复选框
- [ ] Radio - 单选框
- [ ] Switch - 开关
- [ ] Select - 下拉选择
- [ ] NativeSelect - 原生选择
- [ ] PinInput - PIN 输入
- [ ] NumberInput - 数字输入

### Phase 6: 表单组件 Part 2 (11个)

- [ ] Slider - 滑块
- [ ] RangeSlider - 范围滑块
- [ ] Field - 表单字段
- [ ] Fieldset - 字段集
- [ ] InputGroup - 输入组
- [ ] InputAddon - 输入附加
- [ ] InputElement - 输入元素
- [ ] FileUpload - 文件上传
- [ ] Editable - 可编辑
- [ ] PasswordInput - 密码输入
- [ ] SearchInput - 搜索输入

### Phase 7: 集合组件 (4个)

- [ ] Table - 表格
- [ ] DataList - 数据列表
- [ ] Timeline - 时间线
- [ ] TreeView - 树形视图

### Phase 8: 覆盖层组件 (7个)

- [ ] Modal/Dialog - 模态框
- [ ] Drawer - 抽屉
- [ ] Popover - 弹出框
- [ ] Tooltip - 提示
- [ ] Menu - 菜单
- [ ] HoverCard - 悬停卡片
- [ ] ContextMenu - 右键菜单

### Phase 9: 反馈组件 (8个)

- [ ] Alert - 警告
- [ ] Toast - 提示消息
- [ ] Progress - 进度条
- [ ] ProgressCircle - 圆形进度
- [ ] Spinner - 加载动画
- [ ] Skeleton - 骨架屏
- [ ] EmptyState - 空状态
- [ ] Status - 状态指示

### Phase 10: 数据展示组件 (11个)

- [ ] Avatar - 头像
- [ ] Badge - 徽章
- [ ] Card - 卡片
- [x] Icon - 图标
- [ ] Tag - 标签
- [ ] TagsInput - 标签输入
- [ ] Stat - 统计
- [ ] QrCode - 二维码
- [ ] Rating - 评分
- [ ] ColorSwatch - 色块
- [ ] ColorPicker - 颜色选择器

### Phase 11: 展开组件 (6个)

- [ ] Accordion - 手风琴
- [ ] Tabs - 标签页
- [ ] Breadcrumb - 面包屑
- [ ] Pagination - 分页
- [ ] Steps - 步骤条
- [ ] Collapsible - 可折叠

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

---

## 更新日志

### 2025-10-27

**Phase 1 完成**:
- ✅ 完成项目基础架构
- ✅ 创建 Button, Icon, Box 组件
- ✅ 扩展尺寸系统到 9 个级别 (2xs ~ 4xl)
- ✅ 修改包名为 mellivora/flowblade
- ✅ 重新组织文档结构到 docs/
- ✅ 清理临时文件
- ✅ 初始化 Git 仓库并推送到 GitHub

**Phase 2 Part 1 完成**:
- ✅ Container - 响应式容器组件
- ✅ Center - 居中布局组件
- ✅ Flex - 弹性布局组件
- ✅ Grid - 网格布局组件
- ✅ Stack - 堆叠布局组件
- ✅ HStack - 水平堆叠快捷组件
- ✅ VStack - 垂直堆叠快捷组件
- ✅ Separator - 分隔线组件
- ✅ Spacer - 弹性空白组件

**当前进度**: 12/60+ 组件 (20%)

---

**最后更新**: 2025-10-27

