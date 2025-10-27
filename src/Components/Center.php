<?php

namespace Flowblade\Components;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Center Component
 * 
 * Centers its child elements using flexbox.
 */
class Center extends Component
{
    public string $as;
    public bool $inline;
    
    /**
     * Create a new component instance.
     *
     * @param string $as HTML element to render
     * @param bool $inline Whether to use inline-flex
     */
    public function __construct(
        string $as = 'div',
        bool $inline = false,
    ) {
        $this->as = $as;
        $this->inline = $inline;
    }
    
    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [
            $this->inline ? 'inline-flex' : 'flex',
            'items-center',
            'justify-center',
        ];
        
        return ComponentHelper::mergeClasses(...$classes);
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.center');
    }
}

