<?php

namespace App\View\Components\home\clients;

use Illuminate\View\Component;

class ourClients extends Component
{
    public $clients = [];
    public $img_path = '';

    public function __construct()
    {
        $this->img_path = '';
        $this->clients = [
            [
                "img" => "img/clients/divisionco.png",
                "title" => "Divisionco",
                "desc" => "DivisioncoDivisioncoDivisioncoDivisioncoDivisioncoDivisionco",
                "link" => "https://divisionco.com/",

            ],
            [
                "img" => "img/clients/zawlni-logo.png",
                "title" => "zawlni",
                "desc" => "zawlnizawlnizawlnizawlnizawlnizawlnizawlnizawlni",
                "link" => "http://83.244.71.247/zawlni/",

            ],
            [
                "img" => "img/clients/pal-store.png",
                "title" => "PalSotre",
                "desc" => "PalSotrePalSotrePalSotrePalSotrePalSotrePalSotrePalSotrePalSotre",
                "link" => "https://play.google.com/store/apps/details?id=com.mrDev.mobile.palStore",

            ],
            [
                "img" => "img/clients/starshop.png",
                "title" => "Star Shop",
                "desc" => "Star Shop Star Shop Star Shop Star Shop Star Shop Star Shop Star Shop Star Shop ",
                "link" => "http://83.244.71.247/login",
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
        return view('components.home.clients.our-clients');
    }
}
