<?php

namespace App\Livewire\UsersPanel;

use App\Models\Category;
use App\Models\Dislike;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Disliked News")]
class DislikedNews extends Component
{
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }

    public function remove_disliked_news($id)
    {
        Dislike::where('id', $id)->where('users_id', $this->logedin_user_id())->delete();
        $this->redirectRoute('user.disliked-news');
    }
    
    public function render()
    {
        $disliked_news = Dislike::with('news')->where('users_id', $this->logedin_user_id())->latest()->paginate(3);
        $category_id = [];
        foreach ($disliked_news as $key => $value) {
            $category_id[] = $value->news->category_id;
        }
        $category = Category::whereIn('id', $category_id)->get();
        return view('livewire.users-panel.disliked-news')->with(compact('disliked_news', 'category'));
    }
}
