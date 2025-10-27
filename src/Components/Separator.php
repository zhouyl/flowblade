<?php

namespace Flowblade\Components;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

/**
 * Separator Component
 * 
 * A visual separator / divider line.
 */
class Separator extends Component
{
    public string $orientation;
    public ?string $color;
    public ?string $thickness;
    public ?string $length;
    
    /**
     * Create a new component instance.
     *
     * @param string $orientation Orientation (horizontal, vertical)
     * @param string|null $color Border color
     * @param string|null $thickness Border thickness (1, 2, 4, 8)
     * @param string|null $length Length (for vertical separators)
     */
    public function __construct(
        string $orientation = 'horizontal',
        ?string $color = null,
        ?string $thickness = null,
        ?string $length = null,
    ) {
        $this->orientation = $orientation;
        $this->color = $color ?? 'gray';
        $this->thickness = $thickness ?? '1';
        $this->length = $length;
    }
    
    /**
     * Get the component classes.
     */
    public function classes(): string
    {
        $classes = [];
        
        if ($this->orientation === 'vertical') {
            $classes[] = 'inline-block';
            $classes[] = "border-l-{$this->thickness}";
            
            if ($this->length) {
                $classes[] = "h-{$this->length}";
            } else {
                $classes[] = 'h-full';
            }
        } else {
            $classes[] = 'w-full';
            $classes[] = "border-t-{$this->thickness}";
        }
        
        // Color
        $colorMap = [
            'primary' => 'border-blue-600',
            'secondary' => 'border-gray-600',
            'success' => 'border-green-600',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-600',
            'info' => 'border-cyan-600',
            'gray' => 'border-gray-200',
        ];
        
        if (isset($colorMap[$this->color])) {
            $classes[] = $colorMap[$this->color];
        }
        
        return ComponentHelper::mergeClasses(...$classes);
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('flowblade::components.separator');
    }
}

