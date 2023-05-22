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
    public $chart;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$image,$description,$chart)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->chart = $chart;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-dashboard');
    }
}
