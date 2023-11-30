<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navlink extends Component
{
    public $text;
    public $url;
    /**
     * Create a new component instance.
     */
    public function __construct($text, $url)
    {
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navlink');
    }
}
