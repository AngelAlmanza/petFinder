<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $title; 
    public $body;
    public $id;
    
    /**
     * Create a new component instance.
     */
    public function __construct($title, $body, $id)
    {
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
