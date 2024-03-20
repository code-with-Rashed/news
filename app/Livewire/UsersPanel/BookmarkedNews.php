<?php

namespace App\Livewire\UsersPanel;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Bookmarked News")]
class BookmarkedNews extends Component
{
    public function render()
    {
        return view('livewire.users-panel.bookmarked-news');
    }
}
