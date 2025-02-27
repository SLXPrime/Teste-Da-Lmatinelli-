<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonComponent extends Component
{
    public $type;
    public $classes;
    public $variant;

    public function __construct($type = 'button', $classes = '', $variant = 'Default')
    {
        $this->type = $type;
        $this->classes = $classes;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.button-component');
    }
}
