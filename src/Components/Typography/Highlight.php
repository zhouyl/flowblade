<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Highlight Component
 *
 * Text highlighting component with automatic query matching.
 * Highlights matching text within content with colored background.
 */
class Highlight extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|string $query Search query to highlight within text
     * @param null|string $color Highlight color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     */
    public function __construct(
        public ?string $query = null,
        public ?string $color = 'warning',
    ) {
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = ['px-1', 'rounded'];

        // Color
        $colorMap = [
            'primary' => 'bg-blue-200 text-blue-900',
            'secondary' => 'bg-gray-200 text-gray-900',
            'success' => 'bg-green-200 text-green-900',
            'warning' => 'bg-yellow-200 text-yellow-900',
            'danger' => 'bg-red-200 text-red-900',
            'info' => 'bg-cyan-200 text-cyan-900',
            'gray' => 'bg-gray-200 text-gray-900',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the highlighted text with query matches wrapped in mark tags
     */
    public function highlightedText(): string
    {
        if (!$this->query || !$this->slot) {
            return (string) $this->slot;
        }

        $text = (string) $this->slot;
        $query = preg_quote($this->query, '/');

        return preg_replace(
            "/($query)/i",
            '<mark class="'.$this->classes().'">$1</mark>',
            $text
        );
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.highlight');
    }
}
