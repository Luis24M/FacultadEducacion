<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class dropDownButton extends Component
{
    public $title;
    public $url;
    public $list;

    public function __construct($title, $url, $list = [])
    {
        $this->title = $title;
        $this->url = $url;
        $this->list = $list;
    }

    public function render(): View|Closure|string
    {
        return view('components.drop-down-button');
    }
}

