<?php

namespace Flowblade\Support;

class ColorResolver
{
    /**
     * Resolve color scheme to Tailwind classes.
     */
    public static function resolve(string $color, array $types = ['bg', 'hover', 'text']): array
    {
        $resolved = [];

        foreach ($types as $type) {
            $resolved[$type] = ComponentHelper::getColorClasses($color, $type);
        }

        return $resolved;
    }

    /**
     * Get all color classes as a single string.
     */
    public static function resolveToString(string $color, array $types = ['bg', 'hover']): string
    {
        $classes = self::resolve($color, $types);

        return implode(' ', array_filter($classes));
    }

    /**
     * Get text color class.
     */
    public static function text(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'text');
    }

    /**
     * Get background color class.
     */
    public static function bg(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'bg');
    }

    /**
     * Get hover color class.
     */
    public static function hover(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'hover');
    }

    /**
     * Get border color class.
     */
    public static function border(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'border');
    }

    /**
     * Get ring color class.
     */
    public static function ring(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'ring');
    }

    /**
     * Get focus ring color class.
     */
    public static function focus(string $color): string
    {
        return ComponentHelper::getColorClasses($color, 'focus');
    }

    /**
     * Check if color is valid.
     */
    public static function isValid(string $color): bool
    {
        $colors = ComponentHelper::config('colors', []);

        return isset($colors[$color]);
    }

    /**
     * Get default color.
     */
    public static function default(): string
    {
        return ComponentHelper::config('default_color', 'primary');
    }

    /**
     * Get all available colors.
     */
    public static function available(): array
    {
        return array_keys(ComponentHelper::config('colors', []));
    }
}
