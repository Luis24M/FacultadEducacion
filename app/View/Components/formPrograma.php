<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formPrograma extends Component
{
    /**
     * Create a new component instance.
     */

    public $programa;
    public $color;
    
    public function __construct(String $programa, String $color)
    {
        $this->programa = $programa;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-programa');
    }
}
