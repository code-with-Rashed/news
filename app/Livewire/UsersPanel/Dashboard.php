<?php

namespace App\Livewire\UsersPanel;

use App\Models\Bookmark;
use App\Models\Dislike;
use App\Models\InterestedCategory;
use App\Models\Like;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Dashboard")]
class Dashboard extends Component
{
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }
    
    public function render()
    {
        $bookmark_news = Bookmark::where('user_id', $this->logedin_user_id())->count();
        $disliked_news = Dislike::where('users_id', $this->logedin_user_id())->count();
        $interested_category = InterestedCategory::where('user_id', $this->logedin_user_id())->count();
        $liked_news = Like::where('users_id', $this->logedin_user_id())->count();

        return view('livewire.users-panel.dashboard')->with(compact('bookmark_news', 'disliked_news', 'interested_category', 'liked_news'));
    }
}
