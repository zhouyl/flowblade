<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * Clipboard Component
 *
 * Copy-to-clipboard button with visual feedback and tooltip support.
 * Integrates with Flowbite's clipboard functionality.
 */
class Clipboard extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $target      Target element ID to copy content from
     * @param string $contentType Content type to copy: 'input' (value), 'innerHTML', or 'textContent'
     * @param bool   $showIcon    Whether to display copy icon
     * @param bool   $showTooltip Whether to show success tooltip
     * @param string $buttonText  Button text when not using icon
     * @param string $size        Button size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param string $variant     Button variant: 'primary', 'secondary', 'outline'
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
