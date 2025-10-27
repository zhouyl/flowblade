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
            'box' => \Flowblade\Components\Layout\Box::class,
            'container' => \Flowblade\Components\Layout\Container::class,
            'center' => \Flowblade\Components\Layout\Center::class,
            'absolute-center' => \Flowblade\Components\Layout\AbsoluteCenter::class,
            'flex' => \Flowblade\Components\Layout\Flex::class,
            'grid' => \Flowblade\Components\Layout\Grid::class,
            'simple-grid' => \Flowblade\Components\Layout\SimpleGrid::class,
            'stack' => \Flowblade\Components\Layout\Stack::class,
            'hstack' => \Flowblade\Components\Layout\HStack::class,
            'vstack' => \Flowblade\Components\Layout\VStack::class,
            'wrap' => \Flowblade\Components\Layout\Wrap::class,
            'separator' => \Flowblade\Components\Layout\Separator::class,
            'spacer' => \Flowblade\Components\Layout\Spacer::class,
            'group' => \Flowblade\Components\Layout\Group::class,
            'aspect-ratio' => \Flowblade\Components\Layout\AspectRatio::class,
            'scroll-area' => \Flowblade\Components\Layout\ScrollArea::class,

            // Button Components
            'button' => \Flowblade\Components\Buttons\Button::class,

            // Data Display Components
            'icon' => \Flowblade\Components\DataDisplay\Icon::class,
        ];
    }
}

