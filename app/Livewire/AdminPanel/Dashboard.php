<?php

namespace App\Livewire\AdminPanel;

use App\Models\Category;
use App\Models\Message;
use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Dashboard")]

class Dashboard extends Component
{
    public function render()
    {
        $categories = Category::count();
        $published_news = News::where('status',1)->count();
        $un_published_news = News::where('status',0)->count();
        $messages = Message::where('status',0)->count();

        return view('livewire.admin-panel.dashboard.dashboard')->with(compact('categories','published_news','un_published_news','messages'));
    }
}
