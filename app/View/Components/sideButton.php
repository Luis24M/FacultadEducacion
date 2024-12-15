<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideButton extends Component
{
    public $icon;
    public $title;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($icon, $title, $route)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-button');
    }
}
