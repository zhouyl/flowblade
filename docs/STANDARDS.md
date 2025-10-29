# Flowblade Component Development Standards

## Overview

Flowblade is a comprehensive Laravel Blade component library built with Tailwind CSS and Flowbite. This document defines the standards for component development, code quality, and documentation.

## Component Structure

### File Organization

```
src/Components/
├── [Category]/
│   ├── ComponentName.php          # Component class
│   └── [SubComponent].php         # Sub-components (if needed)
```

### Component Categories

- **Buttons**: Button, IconButton, ButtonGroup, CloseButton
- **DataDisplay**: Badge, Tag, Avatar, Card, Icon, Table, etc.
- **Disclosure**: Accordion, Collapsible
- **Feedback**: Alert, Banner, Toast, Spinner, Progress, etc.
- **Forms**: Input, Textarea, Select, Checkbox, Radio, etc.
- **Layout**: Box, Flex, Grid, Stack, Container, etc.
- **Media**: Carousel, Gallery, QRCode, Video
- **Navigation**: Breadcrumb, Tabs, Navbar, Sidebar, etc.
- **Overlay**: Modal, Drawer, Tooltip, Popover, Menu
- **Typography**: Text, Heading, Link, Code, etc.

## Component Development Standards

### 1. PHP Class Requirements

```php
<?php

declare(strict_types=1);

namespace Flowblade\Components\[Category];

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * ComponentName Component
 *
 * Brief description of the component.
 * Supports all common styling options via style props.
 *
 * @see HasStyleProps For all available style props
 */
class ComponentName extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param [parameters with descriptions]
     * @param mixed ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        [parameters],
        ...$styleProps
    ) {
        // Initialize properties
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            // Base classes
        ];

        // Add conditional classes

        // Style props
        $styleClasses = $this->parseStyleProps();
        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.[category].[component]');
    }
}
```

### 2. Style Props Integration

All components should support style props for flexible styling:

- **Spacing**: p, px, py, pt, pr, pb, pl, m, mx, my, mt, mr, mb, ml
- **Sizing**: w, h, minW, maxW, minH, maxH
- **Colors**: bg, color, borderColor
- **Borders**: border, rounded, borderRadius, etc.
- **Layout**: display, position, zIndex, overflow, etc.
- **Typography**: fontSize, fontWeight, textAlign, etc.
- **Flexbox**: flex, flexDirection, alignItems, justifyContent, gap, etc.
- **Grid**: gridTemplateColumns, gridColumn, gap, etc.
- **Others**: shadow, opacity, cursor, transition, etc.

### 3. Blade Template Requirements

- Use semantic HTML elements
- Avoid direct component calls like `<x-icon>` - use dynamic components instead
- Prioritize Flowbite design patterns and styles
- Use Tailwind CSS classes for styling
- Support component slots for flexible content

### 4. Code Quality Standards

- **PHP Version**: PHP 8.3+
- **Laravel Version**: Laravel 11+
- **Code Style**: PSR-12 (enforced by php-cs-fixer)
- **Type Hints**: Use strict types and proper type hints
- **Comments**: Use English for all code comments
- **Documentation**: Use PHPDoc for all public methods

### 5. Component Documentation

Each component should have documentation at `docs/components/[category]/[component].md`:

- Component description and use cases
- Props documentation with types and defaults
- Style props support
- Usage examples with Flowblade components
- Accessibility notes (if applicable)

## Code Review Checklist

### Phase 1: Component Implementation Review
- [ ] Component class follows standards
- [ ] Style props properly integrated
- [ ] Blade template uses semantic HTML
- [ ] No direct component calls (use dynamic components)
- [ ] Flowbite patterns prioritized
- [ ] Code passes php-cs-fixer

### Phase 2: Documentation Review
- [ ] Documentation file exists
- [ ] All props documented
- [ ] Examples use Flowblade components
- [ ] No hardcoded HTML in examples
- [ ] Accessibility notes included

### Phase 3: Integration Review
- [ ] Component works with other components
- [ ] Style props work correctly
- [ ] No console errors or warnings
- [ ] Responsive design verified

## Best Practices

1. **Reusability**: Design components to be composable and reusable
2. **Consistency**: Follow Flowbite design patterns
3. **Accessibility**: Ensure components are accessible (ARIA labels, semantic HTML)
4. **Performance**: Minimize unnecessary rendering and DOM operations
5. **Documentation**: Keep documentation up-to-date with code changes
6. **Testing**: Verify components work in various scenarios

## File Naming Conventions

- **Component Classes**: PascalCase (e.g., `Button.php`, `IconButton.php`)
- **Blade Templates**: kebab-case (e.g., `button.blade.php`, `icon-button.blade.php`)
- **Documentation**: kebab-case (e.g., `button.md`, `icon-button.md`)

## Commit Message Format

```
[Type] [Category] - [Description]

Types: ✨ (feature), 🐛 (fix), 📝 (docs), 🔧 (refactor), ⚡ (perf)
Categories: Button, Form, Layout, etc.
```

Example: `✨ Forms - Add Style Props Support to Input Component`

