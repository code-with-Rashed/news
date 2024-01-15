<?php

namespace App\Livewire\AdminPanel\Profile;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Profile Management")]

class Profile extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.profile.profile');
    }
}
