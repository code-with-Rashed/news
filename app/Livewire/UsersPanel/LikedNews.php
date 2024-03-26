<?php

namespace App\Livewire\UsersPanel;

use App\Models\Category;
use App\Models\Like;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Liked News")]
class LikedNews extends Component
{
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }

    public function remove_liked_news($id)
    {

        Like::where('id', $id)->where('users_id', $this->logedin_user_id())->delete();
        $this->redirectRoute('user.liked-news');
    }
    
    public function render()
    {

        $liked_news = Like::with('news')->where('users_id', $this->logedin_user_id())->latest()->paginate(3);
        $category_id = [];
        foreach ($liked_news as $key => $value) {
            $category_id[] = $value->news->category_id;
        }
        $category = Category::whereIn('id', $category_id)->get();
        return view('livewire.users-panel.liked-news')->with(compact('liked_news', 'category'));
    }
}
