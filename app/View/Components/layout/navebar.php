<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class navebar extends Component
{

    public $navItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navItems = [
            [
                "label" => "Home",
                "href" => "#home",
            ],
            [
                "label" => "Our Clients",
                "href" => "#ourClients",
            ],
            [
                "label" => "About Us",
                "href" => "#aboutUs",
            ],
            [
                "label" => "Plans",
                "href" => "#plans",
            ],
            [
                "label" => "Contact Us",
                "href" => "#contactUs",
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navebar');
    }
}
