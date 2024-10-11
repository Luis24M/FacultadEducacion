<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropDownButton extends Component
{
    public $title;
    public $list;

    public function __construct($title, $list)
    {
        $this->title = $title;
        $this->list = $list;
    }

    public function render()
    {
        return view('components.drop-down-button');
    }
}