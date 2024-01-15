<?php

namespace App\Livewire\AdminPanel\PrivacyPolicy;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Privace Policy Management")]

class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.privacy-policy.privacy-policy');
    }
}
