<?php

namespace App\Livewire\AdminPanel\Messages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]
class MessageManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.messages.message-management');
    }
}
