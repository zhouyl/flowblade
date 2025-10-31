<?php

namespace Flowblade\Support;

class ComponentHelper
{
    /**
     * Get configuration value with fallback.
     */
    public static function config(string $key, mixed $default = null): mixed
    {
        return config("flowblade.{$key}", $default);
    }

    /**
     * Get color classes for a given color scheme and type.
     */
    public static function getColorClasses(string $color, string $type = 'bg'): string
    {
        $colors = self::config('colors', []);

        if (!isset($colors[$color])) {
            $color = self::config('default_color', 'primary');
        }

        return $colors[$color][$type] ?? '';
    }

    /**
     * Get size classes for a component.
     */
    public static function getSizeClasses(string $component, string $size): string
    {
        $sizes = self::config("sizes.{$component}", []);

        if (!isset($sizes[$size])) {
            $size = self::config('default_size', 'md');
        }

        return $sizes[$size] ?? '';
    }

    /**
     * Get rounded classes.
     */
    public static function getRoundedClass(string $rounded): string
    {
        $roundedOptions = self::config('rounded', []);

        return $roundedOptions[$rounded] ?? 'rounded-md';
    }

    /**
     * Get shadow classes.
     */
    public static function getShadowClass(string $shadow): string
    {
        $shadowOptions = self::config('shadows', []);

        return $shadowOptions[$shadow] ?? '';
    }

    /**
     * Merge classes with proper handling of duplicates.
     */
    public static function mergeClasses(string ...$classes): string
    {
        $merged = [];

        foreach ($classes as $class) {
            if (empty($class)) {
                continue;
            }

            $parts = explode(' ', $class);

            foreach ($parts as $part) {
                $part = trim($part);

                if (!empty($part)) {
                    $merged[$part] = true;
                }
            }
        }

        return implode(' ', array_keys($merged));
    }

    /**
     * Check if Alpine.js is enabled.
     */
    public static function isAlpineEnabled(): bool
    {
        return self::config('alpine_enabled', true);
    }

    /**
     * Check if Iconify is enabled.
     */
    public static function isIconifyEnabled(): bool
    {
        return self::config('iconify.enabled', true);
    }

    /**
     * Get Iconify CDN URL.
     */
    public static function getIconifyCdn(): string
    {
        return self::config('iconify.cdn', 'https://cdn.jsdelivr.net/npm/@iconify/iconify@latest/dist/iconify.min.js');
    }

    /**
     * Parse variant prop (e.g., 'solid', 'outline', 'ghost').
     */
    public static function parseVariant(string $variant, string $default = 'solid'): string
    {
        $validVariants = ['solid', 'outline', 'ghost', 'link', 'subtle'];

        return in_array($variant, $validVariants) ? $variant : $default;
    }

    /**
     * Generate component ID if not provided.
     */
    public static function generateId(string $prefix = 'fb'): string
    {
        return $prefix.'-'.uniqid();
    }

    /**
     * Extract wire attributes from attributes bag.
     */
    public static function extractWireAttributes(object $attributes): array
    {
        $wireAttrs = [];

        foreach ($attributes->getAttributes() as $key => $value) {
            if (str_starts_with($key, 'wire:')) {
                $wireAttrs[$key] = $value;
            }
        }

        return $wireAttrs;
    }

    /**
     * Get focus event classes.
     */
    public static function getFocusClasses(string $type = 'default'): string
    {
        $focusConfig = self::config('events.focus', []);

        return match ($type) {
            'input' => self::mergeClasses(
                $focusConfig['outline'] ?? 'focus:outline-none',
                $focusConfig['ring'] ?? 'focus:ring-2',
                $focusConfig['ring_offset'] ?? 'focus:ring-offset-0',
                $focusConfig['ring_color'] ?? 'focus:ring-blue-500'
            ),
            'button' => self::mergeClasses(
                $focusConfig['outline'] ?? 'focus:outline-none',
                'focus:ring-4',
                $focusConfig['ring_color'] ?? 'focus:ring-blue-500'
            ),
            default => self::mergeClasses(
                $focusConfig['outline'] ?? 'focus:outline-none',
                $focusConfig['ring'] ?? 'focus:ring-2',
                $focusConfig['ring_offset'] ?? 'focus:ring-offset-0',
                $focusConfig['ring_color'] ?? 'focus:ring-blue-500'
            ),
        };
    }

    /**
     * Get hover event classes.
     */
    public static function getHoverClasses(string $type = 'default'): string
    {
        $hoverConfig = self::config('events.hover', []);

        return match ($type) {
            'opacity' => $hoverConfig['opacity'] ?? 'hover:opacity-90',
            'bg_opacity' => $hoverConfig['bg_opacity'] ?? 'hover:bg-opacity-90',
            default => $hoverConfig['opacity'] ?? 'hover:opacity-90',
        };
    }

    /**
     * Get active event classes.
     */
    public static function getActiveClasses(string $type = 'default'): string
    {
        $activeConfig = self::config('events.active', []);

        return match ($type) {
            'opacity' => $activeConfig['opacity'] ?? 'active:opacity-75',
            'scale' => $activeConfig['scale'] ?? 'active:scale-95',
            default => self::mergeClasses(
                $activeConfig['opacity'] ?? 'active:opacity-75',
                $activeConfig['scale'] ?? 'active:scale-95'
            ),
        };
    }

    /**
     * Build classes for button variants.
     */
    public static function getButtonVariantClasses(string $color, string $variant): string
    {
        $baseClasses = 'font-medium ' . self::getFocusClasses('button') . ' transition-colors duration-200';

        return match ($variant) {
            'solid' => self::mergeClasses(
                $baseClasses,
                'text-white',
                self::getColorClasses($color, 'bg'),
                self::getColorClasses($color, 'hover'),
                self::getColorClasses($color, 'focus')
            ),
            'outline' => self::mergeClasses(
                $baseClasses,
                'bg-transparent border-2',
                self::getColorClasses($color, 'text'),
                self::getColorClasses($color, 'border'),
                'hover:bg-opacity-10',
                self::getColorClasses($color, 'focus')
            ),
            'ghost' => self::mergeClasses(
                $baseClasses,
                'bg-transparent',
                self::getColorClasses($color, 'text'),
                'hover:bg-gray-100',
                self::getColorClasses($color, 'focus')
            ),
            'link' => self::mergeClasses(
                'font-medium underline-offset-4 hover:underline',
                self::getColorClasses($color, 'text')
            ),
            'subtle' => self::mergeClasses(
                $baseClasses,
                'bg-opacity-10',
                self::getColorClasses($color, 'bg'),
                self::getColorClasses($color, 'text'),
                'hover:bg-opacity-20',
                self::getColorClasses($color, 'focus')
            ),
            default => $baseClasses,
        };
    }
}
