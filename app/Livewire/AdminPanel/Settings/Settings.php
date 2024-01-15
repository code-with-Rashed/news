<?php

namespace App\Livewire\AdminPanel\Settings;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Settings Management")]

class Settings extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.settings.settings');
    }
}
