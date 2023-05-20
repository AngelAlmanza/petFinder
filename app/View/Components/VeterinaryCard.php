<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VeterinaryCard extends Component
{
    public $name;
    public $location;
    public $schedule;
    public $type;
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $location, $schedule, $type, $id)
    {
        $this->name = $name;
        $this->location = $location;
        $this->schedule = $schedule;
        $this->type = $type;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.veterinary-card');
    }
}
