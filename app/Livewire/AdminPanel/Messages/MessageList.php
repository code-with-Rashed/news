<?php

namespace App\Livewire\AdminPanel\Messages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Message Management")]

class MessageList extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.messages.message-list');
    }
}
