<?php

namespace Flowblade\Components\Typography;

use Illuminate\View\Component;

class Strong extends Component
{
    public function classes(): string
    {
        return 'font-bold';
    }

    public function render()
    {
        return view('flowblade::components.typography.strong');
    }
}

