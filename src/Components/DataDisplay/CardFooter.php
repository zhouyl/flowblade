<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\DataDisplay;

use Illuminate\View\Component;

/**
 * CardFooter Component
 *
 * Card footer component for actions or additional info
 */
class CardFooter extends Component
{
    /**
     * Create a new component instance
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.data-display.card-footer');
    }
}
