<?php

namespace Cirote\Ui\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $nombre = '';

    public $email = '';

    public $password = '';

    public $password_2 = '';

    public $agree = false;

    protected $rules = [
        'nombre'     => 'required|min:5|max:255',
        'email'      => 'required|email|unique:users',
        'password'   => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
        'password_2' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
        'agree'      => 'boolean:true',
    ];

    public function messages()
    {
        return [
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña debe tener al menos 8 caracteres.',
            'password.regex'    => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store()
    {
        // dd('Hola');
        // $this->validate();

        $user = User::create([
            'name' => $this->nombre,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }

    public function render()
    {
        return view('ui::register')->layout('ui::blank');
    }
}