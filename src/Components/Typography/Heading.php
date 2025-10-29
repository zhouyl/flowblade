<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Heading Component
 *
 * Semantic heading component with comprehensive style props support.
 * Provides automatic sizing based on heading level with support for custom sizes,
 * weights, and colors for flexible typography.
 *
 * @see HasStyleProps For all available style props
 */
class Heading extends Component
{
    use HasStyleProps;

    /**
     * HTML heading element to render
     *
     * @var string
     */
    public string $as = 'h2';

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string $as            HTML heading element: 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
     * @param mixed  ...$styleProps Style props including:
     *                              - fontSize/size: Custom size ('xs', 'sm', 'base', 'lg', 'xl', '2xl', '3xl', '4xl')
     *                              - fontWeight/weight: Font weight ('normal', 'medium', 'semibold', 'bold', 'extrabold')
     *                              - color: Text color
     *                              - And all other style props (p, m, bg, w, h, etc.)
     */
    public function __construct(
        string $as = 'h2',
        ...$styleProps
    ) {
        $this->as = $as;

        // Map 'size' to 'fontSize', 'weight' to 'fontWeight' if provided
        if (isset($styleProps['size'])) {
            $styleProps['fontSize'] = $styleProps['size'];
            unset($styleProps['size']);
        }

        if (isset($styleProps['weight'])) {
            $styleProps['fontWeight'] = $styleProps['weight'];
            unset($styleProps['weight']);
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     *
     * @return string Generated CSS classes
     */
    public function classes(): string
    {
        $classes = [];

        // Check if fontSize is set via style props
        $hasFontSize = isset($this->fontSize) || isset($this->size);

        // Default sizes based on heading level (if no fontSize provided)
        if (!$hasFontSize) {
            $defaultSizes = [
                'h1' => 'text-4xl',
                'h2' => 'text-3xl',
                'h3' => 'text-2xl',
                'h4' => 'text-xl',
                'h5' => 'text-lg',
                'h6' => 'text-base',
            ];

            if (isset($defaultSizes[$this->as])) {
                $classes[] = $defaultSizes[$this->as];
            }
        }

        // Check if fontWeight is set via style props
        $hasFontWeight = isset($this->fontWeight) || isset($this->weight);

        // Default weight (if no fontWeight provided)
        if (!$hasFontWeight) {
            $classes[] = 'font-bold';
        }

        // Add style props classes (includes fontSize, fontWeight, color)
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.heading');
    }
}
