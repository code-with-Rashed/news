<?php

namespace App\Livewire\VisitorPanel;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.visitor-panel.home');
    }
}
