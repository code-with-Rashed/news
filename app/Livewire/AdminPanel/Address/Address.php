<?php

namespace App\Livewire\AdminPanel\Address;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Address Management")]

class Address extends Component
{

    public function render()
    {
        return view('livewire.admin-panel.address.addresses');
    }
}
