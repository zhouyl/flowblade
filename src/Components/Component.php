<?php

declare(strict_types=1);

namespace Flowblade\Components;

use Illuminate\View\Component as BaseComponent;

/**
 * Base Component Class
 *
 * Base class for all Flowblade components providing common functionality
 * and extensibility for future enhancements.
 *
 * All Flowblade components should extend this class instead of Laravel's
 * base Component class to ensure consistent behavior and easy maintenance.
 */
abstract class Component extends BaseComponent
{
    /**
     * Additional CSS classes to be merged with component classes
     *
     * @var string
     */
    public string $class = '';

    /**
     * Get the merged CSS classes for the component
     *
     * Merges component-specific classes with user-provided classes.
     *
     * @param string $componentClasses Component's default CSS classes
     *
     * @return string Merged CSS classes
     */
    protected function mergeClasses(string $componentClasses): string
    {
        if (empty($this->class)) {
            return $componentClasses;
        }

        return trim($componentClasses.' '.$this->class);
    }

    /**
     * Get attributes array excluding specific keys
     *
     * Useful for passing through attributes while excluding component props.
     *
     * @param array $exclude Array of attribute keys to exclude
     *
     * @return array Filtered attributes
     */
    protected function getAttributesExcept(array $exclude = []): array
    {
        $attributes = $this->attributes->getAttributes();

        foreach ($exclude as $key) {
            unset($attributes[$key]);
        }

        return $attributes;
    }

    /**
     * Check if a slot is filled
     *
     * @param string $slotName Name of the slot to check
     *
     * @return bool True if slot has content
     */
    protected function hasSlot(string $slotName): bool
    {
        return isset($this->{$slotName}) && !empty($this->{$slotName});
    }

    /**
     * Get slot content or default value
     *
     * @param string $slotName Name of the slot
     * @param mixed  $default  Default value if slot is empty
     *
     * @return mixed Slot content or default value
     */
    protected function getSlot(string $slotName, mixed $default = null): mixed
    {
        return $this->hasSlot($slotName) ? $this->{$slotName} : $default;
    }
}
