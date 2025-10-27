<?php

namespace Flowblade\Components\Typography;

use Illuminate\View\Component;

class Em extends Component
{
    public function classes(): string
    {
        return 'italic';
    }

    public function render()
    {
        return view('flowblade::components.typography.em');
    }
}
