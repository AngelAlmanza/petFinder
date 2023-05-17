<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardDashboard extends Component
{
    public $title;
    public $image;
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$image,$description)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-dashboard');
    }
}
