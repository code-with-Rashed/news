<?php

namespace App\Livewire\AdminPanel\TermsConditions;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class TermsConditionsManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.terms-conditions.terms-conditions-management');
    }
}
