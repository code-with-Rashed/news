<?php

namespace App\Livewire\AdminPanel\News;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class NewsManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.news.news-management');
    }
}
