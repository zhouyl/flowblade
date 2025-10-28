<?php

declare(strict_types=1);

namespace Flowblade\Components\Layout;

use Flowblade\Components\Component;
use Flowblade\Traits\HasStyleProps;

/**
 * Box Component
 *
 * Flexible layout container with comprehensive style props support.
 * Supports all common styling options including spacing, colors, borders,
 * layout, typography, flexbox, and grid properties.
 *
 * Can render as any HTML element via the 'as' prop.
 */
class Box extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string      $as          HTML element to render (default: 'div')
     * @param null|string $bg          Background color (e.g., 'primary', 'blue.500')
     * @param null|string $color       Text color (e.g., 'white', 'gray.700')
     * @param null|string $p           Padding all sides (0-96)
     * @param null|string $px          Padding left & right (0-96)
     * @param null|string $py          Padding top & bottom (0-96)
     * @param null|string $pt          Padding top (0-96)
     * @param null|string $pr          Padding right (0-96)
     * @param null|string $pb          Padding bottom (0-96)
     * @param null|string $pl          Padding left (0-96)
     * @param null|string $m           Margin all sides (0-96)
     * @param null|string $mx          Margin left & right (0-96)
     * @param null|string $my          Margin top & bottom (0-96)
     * @param null|string $mt          Margin top (0-96)
     * @param null|string $mr          Margin right (0-96)
     * @param null|string $mb          Margin bottom (0-96)
     * @param null|string $ml          Margin left (0-96)
     * @param null|string $w           Width (e.g., 'full', '1/2', '96')
     * @param null|string $h           Height (e.g., 'full', 'screen', '64')
     * @param null|string $minW        Min width
     * @param null|string $maxW        Max width (e.g., 'xs', 'sm', 'md', 'lg', 'xl', '2xl', 'full')
     * @param null|string $minH        Min height
     * @param null|string $maxH        Max height
     * @param null|string $rounded     Border radius (none, sm, md, lg, xl, 2xl, 3xl, full)
     * @param null|string $shadow      Shadow size (none, sm, md, lg, xl, 2xl)
     * @param null|string $border      Border width (0-8)
     * @param null|string $borderColor Border color
     * @param null|string $display     Display property (block, inline-block, flex, grid, etc.)
     * @param null|string $position    Position property (relative, absolute, fixed, sticky)
     * @param null|string $zIndex      Z-index value
     * @param null|string $z           Z-index value (alias)
     * @param null|string $overflow    Overflow property (auto, hidden, visible, scroll)
     * @param null|string $fontSize    Font size (xs, sm, base, lg, xl, 2xl, etc.)
     * @param null|string $fontWeight  Font weight (thin, light, normal, medium, semibold, bold, etc.)
     * @param null|string $textAlign   Text alignment (left, center, right, justify)
     * @param null|string $direction   Flex direction (row, col, row-reverse, col-reverse)
     * @param null|string $align       Align items (start, center, end, stretch, baseline)
     * @param null|string $justify     Justify content (start, center, end, between, around, evenly)
     * @param null|string $gap         Gap between items (0-96)
     * @param null|string $opacity     Opacity (0-100)
     * @param null|string $cursor      Cursor style (pointer, default, not-allowed, etc.)
     */
    public function __construct(
        public string $as = 'div',
        ?string $bg = null,
        ?string $color = null,
        ?string $p = null,
        ?string $px = null,
        ?string $py = null,
        ?string $pt = null,
        ?string $pr = null,
        ?string $pb = null,
        ?string $pl = null,
        ?string $m = null,
        ?string $mx = null,
        ?string $my = null,
        ?string $mt = null,
        ?string $mr = null,
        ?string $mb = null,
        ?string $ml = null,
        ?string $w = null,
        ?string $h = null,
        ?string $minW = null,
        ?string $maxW = null,
        ?string $minH = null,
        ?string $maxH = null,
        ?string $rounded = null,
        ?string $borderRadius = null,
        ?string $shadow = null,
        ?string $border = null,
        ?string $borderColor = null,
        ?string $display = null,
        ?string $position = null,
        ?string $zIndex = null,
        ?string $z = null,
        ?string $overflow = null,
        ?string $overflowX = null,
        ?string $overflowY = null,
        ?string $fontSize = null,
        ?string $fontWeight = null,
        ?string $textAlign = null,
        ?string $lineHeight = null,
        ?string $letterSpacing = null,
        ?string $direction = null,
        ?string $flexDirection = null,
        ?string $align = null,
        ?string $alignItems = null,
        ?string $justify = null,
        ?string $justifyContent = null,
        ?string $gap = null,
        ?string $opacity = null,
        ?string $cursor = null,
    ) {
        // Store all style props in the trait's data array
        $this->setStyleProps(get_defined_vars());
    }

    /**
     * Get box classes
     *
     * @return string Generated CSS classes from style props
     */
    public function classes(): string
    {
        return $this->parseStyleProps();
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.layout.box');
    }
}
