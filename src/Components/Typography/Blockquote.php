<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Blockquote Component
 *
 * Styled blockquote component for displaying quoted content.
 * Features colored left border and italic text styling.
 */
class Blockquote extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $color Border color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     */
    public function __construct(
        public ?string $color = 'gray',
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [
            'border-l-4',
            'pl-4',
            'py-2',
            'italic',
        ];

        // Border color
        $colorMap = [
            'primary' => 'border-blue-500',
            'secondary' => 'border-gray-500',
            'success' => 'border-green-500',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-500',
            'info' => 'border-cyan-500',
            'gray' => 'border-gray-400',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.blockquote');
    }
}
