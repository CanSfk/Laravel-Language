<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public $title;
    public $description;
    public $color;
    public $time;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $color, $time)
    {
        $this->title = $title;
        $this->description = $description;
        $this->color = $color;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-post');
    }
}
