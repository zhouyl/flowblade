<?php

namespace Flowblade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FlowbladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/flowblade.php',
            'flowblade'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/flowblade.php' => config_path('flowblade.php'),
        ], 'flowblade-config');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flowblade');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/flowblade'),
        ], 'flowblade-views');

        // Register components
        $this->registerComponents();
    }

    /**
     * Register Blade components.
     */
    protected function registerComponents(): void
    {
        $prefix = config('flowblade.prefix', '');

        // Get all component classes
        $components = $this->getComponentClasses();

        foreach ($components as $alias => $class) {
            $componentName = $prefix ? "{$prefix}.{$alias}" : $alias;
            Blade::component($class, $componentName);
        }
    }

    /**
     * Get all component classes.
     */
    protected function getComponentClasses(): array
    {
        return [
            // Layout Components
            'box' => Components\Layout\Box::class,
            'container' => Components\Layout\Container::class,
            'center' => Components\Layout\Center::class,
            'absolute-center' => Components\Layout\AbsoluteCenter::class,
            'flex' => Components\Layout\Flex::class,
            'grid' => Components\Layout\Grid::class,
            'simple-grid' => Components\Layout\SimpleGrid::class,
            'stack' => Components\Layout\Stack::class,
            'hstack' => Components\Layout\HStack::class,
            'vstack' => Components\Layout\VStack::class,
            'wrap' => Components\Layout\Wrap::class,
            'separator' => Components\Layout\Separator::class,
            'spacer' => Components\Layout\Spacer::class,
            'group' => Components\Layout\Group::class,
            'aspect-ratio' => Components\Layout\AspectRatio::class,
            'scroll-area' => Components\Layout\ScrollArea::class,
            'footer' => Components\Layout\Footer::class,

            // Button Components
            'button' => Components\Buttons\Button::class,
            'icon-button' => Components\Buttons\IconButton::class,
            'close-button' => Components\Buttons\CloseButton::class,
            'button-group' => Components\Buttons\ButtonGroup::class,

            // Data Display Components
            'icon' => Components\DataDisplay\Icon::class,
            'avatar' => Components\DataDisplay\Avatar::class,
            'badge' => Components\DataDisplay\Badge::class,
            'card' => Components\DataDisplay\Card::class,
            'card-header' => Components\DataDisplay\CardHeader::class,
            'card-body' => Components\DataDisplay\CardBody::class,
            'card-footer' => Components\DataDisplay\CardFooter::class,
            'data-list' => Components\DataDisplay\DataList::class,
            'data-list-item' => Components\DataDisplay\DataListItem::class,
            'stat' => Components\DataDisplay\Stat::class,
            'tag' => Components\DataDisplay\Tag::class,
            'rating' => Components\DataDisplay\Rating::class,
            'color-swatch' => Components\DataDisplay\ColorSwatch::class,
            'tags-input' => Components\DataDisplay\TagsInput::class,
            'timeline' => Components\DataDisplay\Timeline::class,
            'timeline-item' => Components\DataDisplay\TimelineItem::class,
            'table' => Components\DataDisplay\Table::class,
            'tree-view' => Components\DataDisplay\TreeView::class,
            'tree-view-item' => Components\DataDisplay\TreeViewItem::class,

            // Navigation Components
            'breadcrumb' => Components\Navigation\Breadcrumb::class,
            'breadcrumb-item' => Components\Navigation\BreadcrumbItem::class,
            'pagination' => Components\Navigation\Pagination::class,
            'tabs' => Components\Navigation\Tabs::class,
            'tabs-list' => Components\Navigation\TabsList::class,
            'tabs-trigger' => Components\Navigation\TabsTrigger::class,
            'tabs-content' => Components\Navigation\TabsContent::class,
            'steps' => Components\Navigation\Steps::class,
            'step-item' => Components\Navigation\StepItem::class,
            'navbar' => Components\Navigation\Navbar::class,
            'navbar-brand' => Components\Navigation\NavbarBrand::class,
            'navbar-toggle' => Components\Navigation\NavbarToggle::class,
            'navbar-collapse' => Components\Navigation\NavbarCollapse::class,
            'navbar-link' => Components\Navigation\NavbarLink::class,
            'sidebar' => Components\Navigation\Sidebar::class,
            'sidebar-item' => Components\Navigation\SidebarItem::class,
            'sidebar-group' => Components\Navigation\SidebarGroup::class,
            'sidebar-toggle' => Components\Navigation\SidebarToggle::class,

            // Disclosure Components
            'accordion' => Components\Disclosure\Accordion::class,
            'accordion-item' => Components\Disclosure\AccordionItem::class,
            'collapsible' => Components\Disclosure\Collapsible::class,

            // Overlay Components
            'tooltip' => Components\Overlay\Tooltip::class,
            'popover' => Components\Overlay\Popover::class,
            'hover-card' => Components\Overlay\HoverCard::class,
            'modal' => Components\Overlay\Modal::class,
            'drawer' => Components\Overlay\Drawer::class,
            'menu' => Components\Overlay\Menu::class,
            'menu-item' => Components\Overlay\MenuItem::class,
            'menu-divider' => Components\Overlay\MenuDivider::class,
            'menu-header' => Components\Overlay\MenuHeader::class,

            // Feedback Components
            'alert' => Components\Feedback\Alert::class,
            'spinner' => Components\Feedback\Spinner::class,
            'progress' => Components\Feedback\Progress::class,
            'progress-circle' => Components\Feedback\ProgressCircle::class,
            'status' => Components\Feedback\Status::class,
            'empty-state' => Components\Feedback\EmptyState::class,
            'toast' => Components\Feedback\Toast::class,
            'skeleton' => Components\Feedback\Skeleton::class,
            'banner' => Components\Feedback\Banner::class,

            // Media Components
            'qrcode' => Components\Media\QRCode::class,

            // Typography Components
            'heading' => Components\Typography\Heading::class,
            'text' => Components\Typography\Text::class,
            'link' => Components\Typography\Link::class,
            'code' => Components\Typography\Code::class,
            'code-block' => Components\Typography\CodeBlock::class,
            'kbd' => Components\Typography\Kbd::class,
            'mark' => Components\Typography\Mark::class,
            'em' => Components\Typography\Em::class,
            'strong' => Components\Typography\Strong::class,
            'blockquote' => Components\Typography\Blockquote::class,
            'highlight' => Components\Typography\Highlight::class,
            'list' => Components\Typography\ListComponent::class,

            // Form Components
            'input' => Components\Forms\Input::class,
            'textarea' => Components\Forms\Textarea::class,
            'checkbox' => Components\Forms\Checkbox::class,
            'radio' => Components\Forms\Radio::class,
            'switch' => Components\Forms\SwitchInput::class,
            'select' => Components\Forms\Select::class,
            'native-select' => Components\Forms\NativeSelect::class,
            'pin-input' => Components\Forms\PinInput::class,
            'number-input' => Components\Forms\NumberInput::class,
            'field' => Components\Forms\Field::class,
            'fieldset' => Components\Forms\Fieldset::class,
            'password-input' => Components\Forms\PasswordInput::class,
            'search-input' => Components\Forms\SearchInput::class,
            'input-group' => Components\Forms\InputGroup::class,
            'input-addon' => Components\Forms\InputAddon::class,
            'input-element' => Components\Forms\InputElement::class,
            'editable' => Components\Forms\Editable::class,
            'file-upload' => Components\Forms\FileUpload::class,
            'slider' => Components\Forms\Slider::class,
            'range-slider' => Components\Forms\RangeSlider::class,
            'clipboard' => Components\Forms\Clipboard::class,
            'floating-label' => Components\Forms\FloatingLabel::class,
            'floating-textarea' => Components\Forms\FloatingTextarea::class,
            'floating-select' => Components\Forms\FloatingSelect::class,
        ];
    }
}
