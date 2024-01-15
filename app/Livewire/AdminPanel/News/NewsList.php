<?php

namespace App\Livewire\AdminPanel\News;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("News Management")]

class NewsList extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.news.news-list');
    }
}
