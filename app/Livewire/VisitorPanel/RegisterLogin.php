<?php

namespace App\Livewire\VisitorPanel;

use Livewire\Component;

class RegisterLogin extends Component
{
    public $name, $email, $password, $password_confirmation;

    // login here
    public function login()
    {
        $this->validate([
            "email" => "required|max:60|email",
            "password" => "required|min:5|max:50"
        ]);
    }

    // register here
    public function register()
    {
        $this->validate([
            "name" => "required|max:50",
            "email" => "required|max:60|email",
            "password" => "required|min:5|max:50|confirmed",
            "password_confirmation" => "required|min:5|max:50"
        ]);
    }

    // reset public properties
    public function resetProperties()
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }
    
    public function render()
    {
        return view('livewire.visitor-panel.register-login');
    }
}
