<?php

namespace App\Livewire\AdminPanel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Dashboard")]

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.dashboard');
    }
}
