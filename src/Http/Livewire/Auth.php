<?php

namespace Cirote\Ui\Http\Livewire;

use Livewire\Component;

class Auth extends Component
{
    public $message = 'Hola desde Livewire en un paquete!';

    public function render()
    {
        return view('ui::auth')->layout('ui::blank');
    }
}