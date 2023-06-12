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
    public $category;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $body, $id, $category)
    {
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
