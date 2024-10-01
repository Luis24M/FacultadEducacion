<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dropDownButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $list;

    public function __construct($title, $list = [])
    {
        $this->title = $title;
        $this->list= $list;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.drop-down-button');
    }
}
