<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class navebarItem extends Component
{
    public $href;
    public function __construct($href)
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navebar-item');
    }
}
