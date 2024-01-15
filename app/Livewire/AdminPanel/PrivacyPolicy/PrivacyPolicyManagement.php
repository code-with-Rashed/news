<?php

namespace App\Livewire\AdminPanel\PrivacyPolicy;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class PrivacyPolicyManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.privacy-policy.privacy-policy-management');
    }
}
