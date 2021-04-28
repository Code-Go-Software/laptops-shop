<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LaptopCard extends Component
{
    public $laptop;
    public $role;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($laptop, $role)
    {
        $this->laptop = $laptop;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laptop-card');
    }
}
