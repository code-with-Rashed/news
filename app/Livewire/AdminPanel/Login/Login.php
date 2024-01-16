<?php

namespace App\Livewire\AdminPanel\Login;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.login")]

class Login extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.login.login');
    }
}
