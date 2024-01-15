<?php

namespace App\Livewire\AdminPanel\TermsConditions;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Terms & Conditions Management")]

class TermsConditions extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.terms-conditions.terms-conditions');
    }
}
