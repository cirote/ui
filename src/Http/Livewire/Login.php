<?php

namespace Cirote\Ui\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $message = 'Hola desde Livewire en un paquete!';

    public function render()
    {
        return view('ui::login')->layout('ui::blank');
    }
}