<?php

declare(strict_types=1);

namespace Flowblade\Components\Typography;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Text Component
 *
 * Versatile text component with comprehensive style props support.
 * Perfect for body text, descriptions, and content paragraphs with support for
 * sizing, alignment, truncation, and line clamping.
 *
 * @see HasStyleProps For all available style props
 */
class Text extends Component
{
    use HasStyleProps;

    /**
     * HTML element to render
     *
     * @var string
     */
    public string $as = 'p';

    /**
     * Whether to truncate text with ellipsis
     *
     * @var bool
     */
    public bool $truncate = false;

    /**
     * Number of lines to clamp
     *
     * @var null|string
     */
    public ?string $lineClamp = null;

    /**
     * Create a new component instance
     *
     * All style props are dynamically handled by HasStyleProps trait.
     *
     * @param string      $as            HTML element: 'p', 'span', 'div', etc
     * @param bool        $truncate      Whether to truncate text with ellipsis
     * @param null|string $lineClamp     Number of lines to clamp: '1', '2', '3', '4', '5', '6'
     * @param mixed       ...$styleProps Style props including:
     *                                   - fontSize/size: Text size ('xs', 'sm', 'base', 'lg', 'xl', '2xl', etc.)
     *                                   - fontWeight/weight: Font weight ('normal', 'medium', 'semibold', 'bold')
     *                                   - color: Text color
     *                                   - textAlign/align: Text alignment ('left', 'center', 'right', 'justify')
     *                                   - And all other style props (p, m, bg, w, h, etc.)
     */
    public function __construct(
        string $as = 'p',
        bool $truncate = false,
        ?string $lineClamp = null,
        ...$styleProps
    ) {
        $this->as = $as;
        $this->truncate = $truncate;
        $this->lineClamp = $lineClamp;

        // Map 'size' to 'fontSize', 'weight' to 'fontWeight', 'align' to 'textAlign' if provided
        if (isset($styleProps['size'])) {
            $styleProps['fontSize'] = $styleProps['size'];
            unset($styleProps['size']);
        }

        if (isset($styleProps['weight'])) {
            $styleProps['fontWeight'] = $styleProps['weight'];
            unset($styleProps['weight']);
        }

        if (isset($styleProps['align'])) {
            $styleProps['textAlign'] = $styleProps['align'];
            unset($styleProps['align']);
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

        // Truncate
        if ($this->truncate) {
            $classes[] = 'truncate';
        }

        // Line clamp
        if ($this->lineClamp) {
            $clampMap = [
                '1' => 'line-clamp-1',
                '2' => 'line-clamp-2',
                '3' => 'line-clamp-3',
                '4' => 'line-clamp-4',
                '5' => 'line-clamp-5',
                '6' => 'line-clamp-6',
            ];

            if (isset($clampMap[$this->lineClamp])) {
                $classes[] = $clampMap[$this->lineClamp];
            }
        }

        // Add style props classes (includes fontSize, fontWeight, color, textAlign)
        $styleClasses = $this->parseStyleProps();

        return trim(implode(' ', $classes).' '.$styleClasses);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.typography.text');
    }
}
