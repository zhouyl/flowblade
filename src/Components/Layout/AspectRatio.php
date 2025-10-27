<?php

namespace Flowblade\Components\Layout;

use Flowblade\Support\ComponentHelper;
use Illuminate\View\Component;

class AspectRatio extends Component
{
    public function __construct(
        public string|float $ratio = '16/9', // e.g., '16/9', '4/3', '1/1', or numeric like 1.5
    ) {}

    public function classes(): string
    {
        $classes = ['relative', 'w-full'];

        // Map common ratios to Tailwind classes
        $ratioMap = [
            '1/1' => 'aspect-square',
            'square' => 'aspect-square',
            '16/9' => 'aspect-video',
            'video' => 'aspect-video',
            '4/3' => 'aspect-4/3',
            '21/9' => 'aspect-21/9',
        ];

        $ratioKey = is_string($this->ratio) ? $this->ratio : null;

        if ($ratioKey && isset($ratioMap[$ratioKey])) {
            $classes[] = $ratioMap[$ratioKey];
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    public function styles(): ?string
    {
        // If ratio is not a predefined Tailwind class, use custom padding-bottom
        $ratioMap = [
            '1/1' => null,
            'square' => null,
            '16/9' => null,
            'video' => null,
            '4/3' => null,
            '21/9' => null,
        ];

        $ratioKey = is_string($this->ratio) ? $this->ratio : null;

        if ($ratioKey && isset($ratioMap[$ratioKey])) {
            return null;
        }

        // Calculate padding-bottom percentage for custom ratios
        if (is_numeric($this->ratio)) {
            $percentage = (1 / floatval($this->ratio)) * 100;
            return "padding-bottom: {$percentage}%;";
        }

        // Handle ratio strings like "3/2"
        if (is_string($this->ratio) && str_contains($this->ratio, '/')) {
            [$width, $height] = explode('/', $this->ratio);
            $percentage = (floatval($height) / floatval($width)) * 100;
            return "padding-bottom: {$percentage}%;";
        }

        return null;
    }

    public function render()
    {
        return view('flowblade::components.layout.aspect-ratio');
    }
}

