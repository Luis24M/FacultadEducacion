<?php

<<<<<<< HEAD
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class dropDownButton extends Component
=======
class DropDownButton extends Component
>>>>>>> 75cf832 (institucional y reseña de ciencias de la comunicacion)
{
    public $title;
    public $urlElemento;
    public $urlSubelemento;
    public $list;

    public function __construct($title, $urlElemento,$urlSubelemento , $list)
    {
        $this->title = $title;
<<<<<<< HEAD
=======
        $this->urlElemento = $urlElemento;
        $this->urlSubelemento = $urlSubelemento;
>>>>>>> 75cf832 (institucional y reseña de ciencias de la comunicacion)
        $this->list = $list;
    }

    public function render(): View|Closure|string
    {
        return view('components.drop-down-button');
    }
<<<<<<< HEAD
}

=======
}
>>>>>>> 75cf832 (institucional y reseña de ciencias de la comunicacion)
