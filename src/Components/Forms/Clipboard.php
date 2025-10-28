<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Clipboard Component
 *
 * Copy to clipboard component with success feedback
 */
class Clipboard extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $target      Target element ID to copy from
     * @param string $contentType Content type: input, innerHTML, textContent
     * @param bool   $showIcon    Whether to show copy icon
     * @param bool   $showTooltip Whether to show tooltip
     * @param string $buttonText  Button text (if not using icon)
     * @param string $size        Button size: xs, sm, md, lg, xl
     * @param string $variant     Button variant: primary, secondary, outline
     */
    public function __construct(
        public string $target,
        public string $contentType = 'input',
        public bool $showIcon = true,
        public bool $showTooltip = true,
        public string $buttonText = 'Copy',
        public string $size = 'md',
        public string $variant = 'primary'
    ) {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.clipboard');
    }
}
