<?php

namespace App\Livewire\UsersPanel;

use App\Models\InterestedCategory;
use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("News Feed")]
class NewsFeed extends Component
{
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }
    public function render()
    {
        $news_feed = [];
        $category = InterestedCategory::where('user_id', $this->logedin_user_id())->pluck('category_id');
        foreach ($category as $value) {
            $news = News::with('category')->where('category_id', $value)->get()->last();
            array_push($news_feed,$news->toArray());
        }
        return view('livewire.users-panel.news-feed', compact('news_feed'));
    }
}
