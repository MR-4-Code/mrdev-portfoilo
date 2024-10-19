<?php

namespace App\View\Components\home\clients;

use Illuminate\View\Component;

class clientItem extends Component
{
    public $client;
    public $isActive;

    public function __construct($client, $isActive)
    {
        $this->client = $client;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.clients.client-item');
    }
}
