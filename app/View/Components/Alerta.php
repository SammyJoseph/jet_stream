<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alerta extends Component
{
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'red') //color por defecto si no recibe una variable
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alerta');
    }
    public function metodo1(){
        if($this->color == "green"){
            return "Esta es una alerta que indica éxito.";
        }
    }
}
