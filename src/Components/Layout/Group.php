<?php

namespace Flowblade\Components\Layout;

use Illuminate\View\Component;

class Group extends Component
{
    public function __construct(
        public string $as = 'div',
    ) {
    }

    public function classes(): string
    {
        return 'group';
    }

    public function render()
    {
        return view('flowblade::components.layout.group');
    }
}
