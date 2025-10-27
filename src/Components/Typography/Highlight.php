<?php

namespace Flowblade\Components\Typography;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class Highlight extends Component
{
    public function __construct(
        public ?string $query = null,
        public ?string $color = 'warning',
    ) {}

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

    public function highlightedText(): string
    {
        if (!$this->query || !$this->slot) {
            return (string) $this->slot;
        }

        $text = (string) $this->slot;
        $query = preg_quote($this->query, '/');
        
        return preg_replace(
            "/($query)/i",
            '<mark class="' . $this->classes() . '">$1</mark>',
            $text
        );
    }

    public function render()
    {
        return view('flowblade::components.typography.highlight');
    }
}

