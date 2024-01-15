<?php

namespace App\Livewire\AdminPanel\Writers;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class WritersManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.writers.writers-management');
    }
}
