<?php

namespace App\View\Components;

use App\Models\Pet;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PetAdoptionPostCard extends Component
{
    public $title;
    public $description;
    public $petId;
    public $postId;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $petId, $postId)
    {
        $this->title = $title;
        $this->description = $description;
        $this->petId = $petId;
        $this->postId = $postId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pet-adoption-post-card');
    }
}
