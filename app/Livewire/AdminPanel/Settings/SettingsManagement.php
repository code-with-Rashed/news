<?php

namespace App\Livewire\AdminPanel\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class SettingsManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.settings.settings-management');
    }
}
