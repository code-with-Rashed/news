<?php

namespace App\Livewire\VisitorPanel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
#[Title('Home Page')]

class Home extends Component
{
    public function render()
    {
        return view('livewire.visitor-panel.home');
    }
}
