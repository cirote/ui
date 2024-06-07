<?php

namespace Cirote\Ui\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $message = 'Hola desde Livewire en un paquete!';

    public function render()
    {
        return view('ui::register')->layout('ui::blank');
    }
}