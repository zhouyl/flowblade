<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Container Component
 *
 * Responsive container that centers content and applies max-width constraints.
 * Commonly used for page layouts and content sections in enterprise applications.
 *
 * @see HasStyleProps For all available style props
 */
class Container extends Component
{
    use HasStyleProps;

    /**
     * Maximum width
     *
     * @var string
     */
    public string $maxWidth = '7xl';

    /**
     * Whether to center content horizontally
     *
     * @var bool
     */
    public bool $centerContent = true;

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param null|string $maxWidth      Maximum width (sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full)
     * @param bool        $centerContent Whether to center content horizontally with mx-auto
     * @param mixed       ...$styleProps Style props including:
     *                                   - px: Horizontal padding (0-96)
     *                                   - py: Vertical padding (0-96)
     *                                   - And all other style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        ?string $maxWidth = null,
        bool $centerContent = true,
        ...$styleProps
    ) {
        $this->maxWidth = $maxWidth ?? '7xl';
        $this->centerContent = $centerContent;

        // Set default px if not provided
        if (!isset($styleProps['px']) && !isset($styleProps['p'])) {
            $styleProps['px'] = '4';
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

        // Container base
        if ($this->centerContent) {
            $classes[] = 'mx-auto';
        }

        // Max width
        $maxWidthMap = [
            'sm' => 'max-w-screen-sm',
            'md' => 'max-w-screen-md',
            'lg' => 'max-w-screen-lg',
            'xl' => 'max-w-screen-xl',
            '2xl' => 'max-w-screen-2xl',
            '3xl' => 'max-w-7xl',
            '4xl' => 'max-w-full',
            '5xl' => 'max-w-full',
            '6xl' => 'max-w-full',
            '7xl' => 'max-w-7xl',
            'full' => 'max-w-full',
        ];

        if (isset($maxWidthMap[$this->maxWidth])) {
            $classes[] = $maxWidthMap[$this->maxWidth];
        }

        // Add style props classes
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.container');
    }
}
