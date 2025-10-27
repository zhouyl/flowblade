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

            // Button Components
            'button' => Components\Buttons\Button::class,
            'icon-button' => Components\Buttons\IconButton::class,
            'close-button' => Components\Buttons\CloseButton::class,
            'button-group' => Components\Buttons\ButtonGroup::class,

            // Data Display Components
            'icon' => Components\DataDisplay\Icon::class,

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
            'native-select' => Components\Forms\NativeSelect::class,
            'pin-input' => Components\Forms\PinInput::class,
            'number-input' => Components\Forms\NumberInput::class,
            'field' => Components\Forms\Field::class,
            'password-input' => Components\Forms\PasswordInput::class,
            'search-input' => Components\Forms\SearchInput::class,
            'input-group' => Components\Forms\InputGroup::class,
            'input-addon' => Components\Forms\InputAddon::class,
            'input-element' => Components\Forms\InputElement::class,
        ];
    }
}
