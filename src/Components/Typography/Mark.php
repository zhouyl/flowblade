<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * Mark Component
 *
 * Text highlighting component for emphasizing important content.
 * Uses colored backgrounds to draw attention to specific text.
 */
class Mark extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param null|string $color         Highlight color: 'primary', 'secondary', 'success', 'warning', 'danger', 'info', 'gray'
     * @param mixed       ...$styleProps All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public ?string $color = 'warning',
        ...$styleProps
    ) {
        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = ['px-1'];

        // Color
        $colorMap = [
            'primary' => 'bg-blue-200',
            'secondary' => 'bg-gray-200',
            'success' => 'bg-green-200',
            'warning' => 'bg-yellow-200',
            'danger' => 'bg-red-200',
            'info' => 'bg-cyan-200',
            'gray' => 'bg-gray-200',
        ];

        if ($this->color && isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.mark');
    }
}
