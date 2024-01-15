<?php

namespace App\Livewire\AdminPanel\Writers;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Writers Management")]

class WriterList extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.writers.writer-list');
    }
}
