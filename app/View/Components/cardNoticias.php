<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardNoticias extends Component
{
    /**
     * Create a new component instance.
     */

    public $imagen;
    public $titulo;
    public $descripcion;
    public $fecha;
    
    public function __construct($imagen, $titulo, $descripcion, $fecha)
    {
        $this->imagen = $imagen;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-noticias');
    }
}
