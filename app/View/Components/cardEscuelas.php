<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardEscuelas extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $img;
    public $url;

    public function __construct($name, $img, $url)
    {
        $this->url = $url;
        $this->name = $name;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-escuelas');
    }
}
