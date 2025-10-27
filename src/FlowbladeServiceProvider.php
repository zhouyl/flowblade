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
            __DIR__ . '/../config/flowblade.php',
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
            __DIR__ . '/../config/flowblade.php' => config_path('flowblade.php'),
        ], 'flowblade-config');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flowblade');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/flowblade'),
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
            'box' => \Flowblade\Components\Box::class,
            'container' => \Flowblade\Components\Container::class,
            'center' => \Flowblade\Components\Center::class,
            'flex' => \Flowblade\Components\Flex::class,
            'grid' => \Flowblade\Components\Grid::class,
            'stack' => \Flowblade\Components\Stack::class,
            'hstack' => \Flowblade\Components\HStack::class,
            'vstack' => \Flowblade\Components\VStack::class,
            'wrap' => \Flowblade\Components\Wrap::class,
            'separator' => \Flowblade\Components\Separator::class,
            'spacer' => \Flowblade\Components\Spacer::class,
            
            // Typography Components
            'heading' => \Flowblade\Components\Heading::class,
            'text' => \Flowblade\Components\Text::class,
            'link' => \Flowblade\Components\Link::class,
            'code' => \Flowblade\Components\Code::class,
            'kbd' => \Flowblade\Components\Kbd::class,
            'mark' => \Flowblade\Components\Mark::class,
            'em' => \Flowblade\Components\Em::class,
            'strong' => \Flowblade\Components\Strong::class,
            
            // Button Components
            'button' => \Flowblade\Components\Button::class,
            'icon-button' => \Flowblade\Components\IconButton::class,
            'close-button' => \Flowblade\Components\CloseButton::class,
            
            // Form Components
            'input' => \Flowblade\Components\Input::class,
            'textarea' => \Flowblade\Components\Textarea::class,
            'checkbox' => \Flowblade\Components\Checkbox::class,
            'radio' => \Flowblade\Components\Radio::class,
            'switch' => \Flowblade\Components\SwitchComponent::class,
            'select' => \Flowblade\Components\Select::class,
            'field' => \Flowblade\Components\Field::class,
            'fieldset' => \Flowblade\Components\Fieldset::class,
            
            // Overlay Components
            'modal' => \Flowblade\Components\Modal::class,
            'drawer' => \Flowblade\Components\Drawer::class,
            'popover' => \Flowblade\Components\Popover::class,
            'tooltip' => \Flowblade\Components\Tooltip::class,
            'menu' => \Flowblade\Components\Menu::class,
            
            // Feedback Components
            'alert' => \Flowblade\Components\Alert::class,
            'toast' => \Flowblade\Components\Toast::class,
            'progress' => \Flowblade\Components\Progress::class,
            'spinner' => \Flowblade\Components\Spinner::class,
            'skeleton' => \Flowblade\Components\Skeleton::class,
            
            // Data Display Components
            'avatar' => \Flowblade\Components\Avatar::class,
            'badge' => \Flowblade\Components\Badge::class,
            'card' => \Flowblade\Components\Card::class,
            'icon' => \Flowblade\Components\Icon::class,
            'tag' => \Flowblade\Components\Tag::class,
            
            // Disclosure Components
            'accordion' => \Flowblade\Components\Accordion::class,
            'tabs' => \Flowblade\Components\Tabs::class,
            'breadcrumb' => \Flowblade\Components\Breadcrumb::class,
        ];
    }
}

