<?php

declare(strict_types=1);

namespace Flowblade\Traits;

/**
 * HasStyleProps Trait
 *
 * Provides style props functionality similar to Chakra UI's style props system.
 * Converts component props to Tailwind CSS classes for consistent styling.
 *
 * Supported style props categories:
 * - Spacing (padding, margin)
 * - Sizing (width, height, min/max)
 * - Colors (background, text, border)
 * - Borders (width, radius, style)
 * - Layout (display, position, z-index, overflow)
 * - Typography (font size, weight, alignment, etc.)
 * - Flexbox (direction, wrap, align, justify, gap)
 * - Grid (template, span, gap)
 * - Others (opacity, cursor, transition, transform, visibility)
 *
 * @property-read null|string $p Padding all sides (0-96)
 * @property-read null|string $px Padding left & right (0-96)
 * @property-read null|string $py Padding top & bottom (0-96)
 * @property-read null|string $pt Padding top (0-96)
 * @property-read null|string $pr Padding right (0-96)
 * @property-read null|string $pb Padding bottom (0-96)
 * @property-read null|string $pl Padding left (0-96)
 * @property-read null|string $m Margin all sides (0-96)
 * @property-read null|string $mx Margin left & right (0-96)
 * @property-read null|string $my Margin top & bottom (0-96)
 * @property-read null|string $mt Margin top (0-96)
 * @property-read null|string $mr Margin right (0-96)
 * @property-read null|string $mb Margin bottom (0-96)
 * @property-read null|string $ml Margin left (0-96)
 * @property-read null|string $w Width (e.g., 'full', '1/2', '96')
 * @property-read null|string $h Height (e.g., 'full', 'screen', '64')
 * @property-read null|string $minW Min width
 * @property-read null|string $maxW Max width (e.g., 'xs', 'sm', 'md', 'lg', 'xl', '2xl', 'full')
 * @property-read null|string $minH Min height
 * @property-read null|string $maxH Max height
 * @property-read null|string $bg Background color (e.g., 'primary', 'blue.500')
 * @property-read null|string $color Text color (e.g., 'white', 'gray.700')
 * @property-read null|string $borderColor Border color
 * @property-read null|string $border Border width (0-8)
 * @property-read null|string $borderTop Border top width
 * @property-read null|string $borderRight Border right width
 * @property-read null|string $borderBottom Border bottom width
 * @property-read null|string $borderLeft Border left width
 * @property-read null|string $rounded Border radius (none, sm, md, lg, xl, 2xl, 3xl, full)
 * @property-read null|string $borderRadius Border radius (alias)
 * @property-read null|string $roundedTop Border radius top
 * @property-read null|string $roundedRight Border radius right
 * @property-read null|string $roundedBottom Border radius bottom
 * @property-read null|string $roundedLeft Border radius left
 * @property-read null|string $shadow Shadow size (none, sm, md, lg, xl, 2xl)
 * @property-read null|string $display Display property (block, inline-block, flex, grid, etc.)
 * @property-read null|string $position Position property (relative, absolute, fixed, sticky)
 * @property-read null|string $zIndex Z-index value
 * @property-read null|string $z Z-index value (alias)
 * @property-read null|string $overflow Overflow property (auto, hidden, visible, scroll)
 * @property-read null|string $overflowX Overflow X axis
 * @property-read null|string $overflowY Overflow Y axis
 * @property-read null|string $fontSize Font size (xs, sm, base, lg, xl, 2xl, etc.)
 * @property-read null|string $fontWeight Font weight (thin, light, normal, medium, semibold, bold, etc.)
 * @property-read null|string $textAlign Text alignment (left, center, right, justify)
 * @property-read null|string $lineHeight Line height
 * @property-read null|string $letterSpacing Letter spacing
 * @property-read null|string $textTransform Text transform (uppercase, lowercase, capitalize)
 * @property-read null|string $textDecoration Text decoration (underline, line-through, none)
 * @property-read null|string $flex Flex property
 * @property-read null|string $flexDirection Flex direction (row, col, row-reverse, col-reverse)
 * @property-read null|string $direction Flex direction (alias)
 * @property-read null|string $flexWrap Flex wrap (wrap, nowrap, wrap-reverse)
 * @property-read null|string $wrap Flex wrap (alias)
 * @property-read null|string $alignItems Align items (start, center, end, stretch, baseline)
 * @property-read null|string $align Align items (alias)
 * @property-read null|string $justifyContent Justify content (start, center, end, between, around, evenly)
 * @property-read null|string $justify Justify content (alias)
 * @property-read null|string $alignSelf Align self
 * @property-read null|string $flexGrow Flex grow
 * @property-read null|string $grow Flex grow (alias)
 * @property-read null|string $flexShrink Flex shrink
 * @property-read null|string $shrink Flex shrink (alias)
 * @property-read null|string $gap Gap between items (0-96)
 * @property-read null|string $gapX Gap between items horizontally (0-96)
 * @property-read null|string $gapY Gap between items vertically (0-96)
 * @property-read null|string $gridTemplateColumns Grid template columns
 * @property-read null|string $templateColumns Grid template columns (alias)
 * @property-read null|string $gridTemplateRows Grid template rows
 * @property-read null|string $templateRows Grid template rows (alias)
 * @property-read null|string $gridColumn Grid column span
 * @property-read null|string $colSpan Grid column span (alias)
 * @property-read null|string $gridRow Grid row span
 * @property-read null|string $rowSpan Grid row span (alias)
 * @property-read null|string $gridGap Grid gap
 * @property-read null|string $opacity Opacity (0-100)
 * @property-read null|string $cursor Cursor style (pointer, default, not-allowed, etc.)
 * @property-read null|string $transition Transition property
 * @property-read null|string $transform Transform property
 * @property-read null|string $visibility Visibility property (visible, invisible)
 */
trait HasStyleProps
{
    /**
     * Style props data storage
     *
     * @var array<string, mixed>
     */
    protected array $stylePropsData = [];

    /**
     * Magic getter for style props
     *
     * @param string $name Property name
     *
     * @return mixed Property value or null
     */
    public function __get(string $name): mixed
    {
        return $this->stylePropsData[$name] ?? null;
    }

    /**
     * Magic setter for style props
     *
     * @param string $name  Property name
     * @param mixed  $value Property value
     */
    public function __set(string $name, mixed $value): void
    {
        $this->stylePropsData[$name] = $value;
    }

    /**
     * Magic isset for style props
     *
     * @param string $name Property name
     *
     * @return bool True if property is set
     */
    public function __isset(string $name): bool
    {
        return isset($this->stylePropsData[$name]);
    }

    /**
     * Set style props from array
     *
     * @param array<string, mixed> $props Style props to set
     *
     * @return void
     */
    protected function setStyleProps(array $props): void
    {
        $this->stylePropsData = $props;
    }

    /**
     * Parse style props and convert to Tailwind CSS classes
     *
     * @return string Generated Tailwind CSS classes
     */
    protected function parseStyleProps(): string
    {
        $classes = [];

        // Spacing - Padding
        $classes[] = $this->parsePadding();
        $classes[] = $this->parseMargin();

        // Sizing
        $classes[] = $this->parseSizing();

        // Colors
        $classes[] = $this->parseColors();

        // Borders
        $classes[] = $this->parseBorders();

        // Layout
        $classes[] = $this->parseLayout();

        // Typography
        $classes[] = $this->parseTypography();

        // Flexbox
        $classes[] = $this->parseFlexbox();

        // Grid
        $classes[] = $this->parseGrid();

        // Others
        $classes[] = $this->parseOthers();

        return trim(implode(' ', array_filter($classes)));
    }

    /**
     * Parse padding props
     *
     * @return string Padding classes
     */
    protected function parsePadding(): string
    {
        $classes = [];

        if (isset($this->p)) {
            $classes[] = "p-{$this->p}";
        }

        if (isset($this->px)) {
            $classes[] = "px-{$this->px}";
        }

        if (isset($this->py)) {
            $classes[] = "py-{$this->py}";
        }

        if (isset($this->pt)) {
            $classes[] = "pt-{$this->pt}";
        }

        if (isset($this->pr)) {
            $classes[] = "pr-{$this->pr}";
        }

        if (isset($this->pb)) {
            $classes[] = "pb-{$this->pb}";
        }

        if (isset($this->pl)) {
            $classes[] = "pl-{$this->pl}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse margin props
     *
     * @return string Margin classes
     */
    protected function parseMargin(): string
    {
        $classes = [];

        if (isset($this->m)) {
            $classes[] = "m-{$this->m}";
        }

        if (isset($this->mx)) {
            $classes[] = "mx-{$this->mx}";
        }

        if (isset($this->my)) {
            $classes[] = "my-{$this->my}";
        }

        if (isset($this->mt)) {
            $classes[] = "mt-{$this->mt}";
        }

        if (isset($this->mr)) {
            $classes[] = "mr-{$this->mr}";
        }

        if (isset($this->mb)) {
            $classes[] = "mb-{$this->mb}";
        }

        if (isset($this->ml)) {
            $classes[] = "ml-{$this->ml}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse sizing props (width, height, min/max)
     *
     * @return string Sizing classes
     */
    protected function parseSizing(): string
    {
        $classes = [];

        if (isset($this->w)) {
            $classes[] = "w-{$this->w}";
        }

        if (isset($this->h)) {
            $classes[] = "h-{$this->h}";
        }

        if (isset($this->minW)) {
            $classes[] = "min-w-{$this->minW}";
        }

        if (isset($this->maxW)) {
            $classes[] = "max-w-{$this->maxW}";
        }

        if (isset($this->minH)) {
            $classes[] = "min-h-{$this->minH}";
        }

        if (isset($this->maxH)) {
            $classes[] = "max-h-{$this->maxH}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse color props (background, text, border)
     *
     * @return string Color classes
     */
    protected function parseColors(): string
    {
        $classes = [];

        if (isset($this->bg)) {
            $classes[] = $this->mapBackgroundColor($this->bg);
        }

        if (isset($this->color)) {
            $classes[] = $this->mapTextColor($this->color);
        }

        if (isset($this->borderColor)) {
            $classes[] = $this->mapBorderColor($this->borderColor);
        }

        return implode(' ', $classes);
    }

    /**
     * Parse border props
     *
     * @return string Border classes
     */
    protected function parseBorders(): string
    {
        $classes = [];

        if (isset($this->border)) {
            $classes[] = is_numeric($this->border) ? "border-{$this->border}" : 'border';
        }

        if (isset($this->borderTop)) {
            $classes[] = "border-t-{$this->borderTop}";
        }

        if (isset($this->borderRight)) {
            $classes[] = "border-r-{$this->borderRight}";
        }

        if (isset($this->borderBottom)) {
            $classes[] = "border-b-{$this->borderBottom}";
        }

        if (isset($this->borderLeft)) {
            $classes[] = "border-l-{$this->borderLeft}";
        }

        // Border radius
        $rounded = $this->rounded ?? $this->borderRadius ?? null;

        if ($rounded) {
            $classes[] = "rounded-{$rounded}";
        }

        if (isset($this->roundedTop)) {
            $classes[] = "rounded-t-{$this->roundedTop}";
        }

        if (isset($this->roundedRight)) {
            $classes[] = "rounded-r-{$this->roundedRight}";
        }

        if (isset($this->roundedBottom)) {
            $classes[] = "rounded-b-{$this->roundedBottom}";
        }

        if (isset($this->roundedLeft)) {
            $classes[] = "rounded-l-{$this->roundedLeft}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse layout props
     *
     * @return string Layout classes
     */
    protected function parseLayout(): string
    {
        $classes = [];

        if (isset($this->display)) {
            $classes[] = $this->display;
        }

        if (isset($this->position)) {
            $classes[] = $this->position;
        }

        if (isset($this->top)) {
            $classes[] = "top-{$this->top}";
        }

        if (isset($this->right)) {
            $classes[] = "right-{$this->right}";
        }

        if (isset($this->bottom)) {
            $classes[] = "bottom-{$this->bottom}";
        }

        if (isset($this->left)) {
            $classes[] = "left-{$this->left}";
        }

        $zIndex = $this->zIndex ?? $this->z ?? null;

        if ($zIndex) {
            $classes[] = "z-{$zIndex}";
        }

        if (isset($this->overflow)) {
            $classes[] = "overflow-{$this->overflow}";
        }

        if (isset($this->overflowX)) {
            $classes[] = "overflow-x-{$this->overflowX}";
        }

        if (isset($this->overflowY)) {
            $classes[] = "overflow-y-{$this->overflowY}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse typography props
     *
     * @return string Typography classes
     */
    protected function parseTypography(): string
    {
        $classes = [];

        if (isset($this->fontSize)) {
            $classes[] = "text-{$this->fontSize}";
        }

        if (isset($this->fontWeight)) {
            $classes[] = "font-{$this->fontWeight}";
        }

        if (isset($this->textAlign)) {
            $classes[] = "text-{$this->textAlign}";
        }

        if (isset($this->lineHeight)) {
            $classes[] = "leading-{$this->lineHeight}";
        }

        if (isset($this->letterSpacing)) {
            $classes[] = "tracking-{$this->letterSpacing}";
        }

        if (isset($this->textTransform)) {
            $classes[] = $this->textTransform;
        }

        if (isset($this->textDecoration)) {
            $classes[] = $this->textDecoration;
        }

        return implode(' ', $classes);
    }

    /**
     * Parse flexbox props
     *
     * @return string Flexbox classes
     */
    protected function parseFlexbox(): string
    {
        $classes = [];

        if (isset($this->flex)) {
            $classes[] = "flex-{$this->flex}";
        }

        $direction = $this->flexDirection ?? $this->direction ?? null;

        if ($direction) {
            $classes[] = "flex-{$direction}";
        }

        $wrap = $this->flexWrap ?? $this->wrap ?? null;

        if ($wrap) {
            $classes[] = "flex-{$wrap}";
        }

        $align = $this->alignItems ?? $this->align ?? null;

        if ($align) {
            $classes[] = "items-{$align}";
        }

        $justify = $this->justifyContent ?? $this->justify ?? null;

        if ($justify) {
            $classes[] = "justify-{$justify}";
        }

        if (isset($this->alignSelf)) {
            $classes[] = "self-{$this->alignSelf}";
        }

        $grow = $this->flexGrow ?? $this->grow ?? null;

        if ($grow !== null) {
            $classes[] = "grow-{$grow}";
        }

        $shrink = $this->flexShrink ?? $this->shrink ?? null;

        if ($shrink !== null) {
            $classes[] = "shrink-{$shrink}";
        }

        if (isset($this->gap)) {
            $classes[] = "gap-{$this->gap}";
        }

        if (isset($this->gapX)) {
            $classes[] = "gap-x-{$this->gapX}";
        }

        if (isset($this->gapY)) {
            $classes[] = "gap-y-{$this->gapY}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse grid props
     *
     * @return string Grid classes
     */
    protected function parseGrid(): string
    {
        $classes = [];

        $templateColumns = $this->gridTemplateColumns ?? $this->templateColumns ?? null;

        if ($templateColumns) {
            $classes[] = "grid-cols-{$templateColumns}";
        }

        $templateRows = $this->gridTemplateRows ?? $this->templateRows ?? null;

        if ($templateRows) {
            $classes[] = "grid-rows-{$templateRows}";
        }

        $colSpan = $this->gridColumn ?? $this->colSpan ?? null;

        if ($colSpan) {
            $classes[] = "col-span-{$colSpan}";
        }

        $rowSpan = $this->gridRow ?? $this->rowSpan ?? null;

        if ($rowSpan) {
            $classes[] = "row-span-{$rowSpan}";
        }

        $gridGap = $this->gridGap ?? null;

        if ($gridGap && !isset($this->gap)) {
            $classes[] = "gap-{$gridGap}";
        }

        return implode(' ', $classes);
    }

    /**
     * Parse other props (opacity, cursor, etc.)
     *
     * @return string Other classes
     */
    protected function parseOthers(): string
    {
        $classes = [];

        if (isset($this->shadow)) {
            $classes[] = "shadow-{$this->shadow}";
        }

        if (isset($this->opacity)) {
            $classes[] = "opacity-{$this->opacity}";
        }

        if (isset($this->cursor)) {
            $classes[] = "cursor-{$this->cursor}";
        }

        if (isset($this->transition)) {
            $classes[] = "transition-{$this->transition}";
        }

        if (isset($this->transform)) {
            $classes[] = $this->transform;
        }

        if (isset($this->visibility)) {
            $classes[] = $this->visibility;
        }

        return implode(' ', $classes);
    }

    /**
     * Map background color to Tailwind class
     *
     * @param string $color Color value
     *
     * @return string Tailwind background color class
     */
    protected function mapBackgroundColor(string $color): string
    {
        // If color contains dot notation (e.g., 'blue.500'), convert to Tailwind format
        if (str_contains($color, '.')) {
            [$colorName, $shade] = explode('.', $color, 2);

            return "bg-{$colorName}-{$shade}";
        }

        // Map semantic colors
        $colorMap = [
            'primary' => 'bg-blue-600',
            'secondary' => 'bg-gray-600',
            'success' => 'bg-green-600',
            'warning' => 'bg-yellow-500',
            'danger' => 'bg-red-600',
            'info' => 'bg-cyan-600',
        ];

        return $colorMap[$color] ?? "bg-{$color}";
    }

    /**
     * Map text color to Tailwind class
     *
     * @param string $color Color value
     *
     * @return string Tailwind text color class
     */
    protected function mapTextColor(string $color): string
    {
        // If color contains dot notation (e.g., 'gray.500'), convert to Tailwind format
        if (str_contains($color, '.')) {
            [$colorName, $shade] = explode('.', $color, 2);

            return "text-{$colorName}-{$shade}";
        }

        // Map semantic colors
        $colorMap = [
            'primary' => 'text-blue-600',
            'secondary' => 'text-gray-600',
            'success' => 'text-green-600',
            'warning' => 'text-yellow-500',
            'danger' => 'text-red-600',
            'info' => 'text-cyan-600',
        ];

        return $colorMap[$color] ?? "text-{$color}";
    }

    /**
     * Map border color to Tailwind class
     *
     * @param string $color Color value
     *
     * @return string Tailwind border color class
     */
    protected function mapBorderColor(string $color): string
    {
        // If color contains dot notation (e.g., 'gray.300'), convert to Tailwind format
        if (str_contains($color, '.')) {
            [$colorName, $shade] = explode('.', $color, 2);

            return "border-{$colorName}-{$shade}";
        }

        // Map semantic colors
        $colorMap = [
            'primary' => 'border-blue-600',
            'secondary' => 'border-gray-600',
            'success' => 'border-green-600',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-600',
            'info' => 'border-cyan-600',
        ];

        return $colorMap[$color] ?? "border-{$color}";
    }
}
