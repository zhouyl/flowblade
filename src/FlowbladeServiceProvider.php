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
            'absolute-center' => \Flowblade\Components\AbsoluteCenter::class,
            'flex' => \Flowblade\Components\Flex::class,
            'grid' => \Flowblade\Components\Grid::class,
            'simple-grid' => \Flowblade\Components\SimpleGrid::class,
            'stack' => \Flowblade\Components\Stack::class,
            'hstack' => \Flowblade\Components\HStack::class,
            'vstack' => \Flowblade\Components\VStack::class,
            'wrap' => \Flowblade\Components\Wrap::class,
            'separator' => \Flowblade\Components\Separator::class,
            'spacer' => \Flowblade\Components\Spacer::class,
            'group' => \Flowblade\Components\Group::class,
            'aspect-ratio' => \Flowblade\Components\AspectRatio::class,
            'scroll-area' => \Flowblade\Components\ScrollArea::class,

            // Button Components
            'button' => \Flowblade\Components\Button::class,

            // Data Display Components
            'icon' => \Flowblade\Components\Icon::class,
        ];
    }
}

