<?php

namespace App\Livewire\UsersPanel;

use App\Models\Bookmark;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("UsersPanel.index")]
#[Title("Bookmarked News")]
class BookmarkedNews extends Component
{
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }
    public function remove_bookmark_item($id)
    {
        Bookmark::where('id', $id)->where('user_id', $this->logedin_user_id())->delete();
        return redirect()->route('user.bookmarked-news');
    }
    public function render()
    {
        $bookmark_news = Bookmark::with('news')->where('user_id', $this->logedin_user_id())->latest()->paginate(3);
        $category_id = [];
        foreach ($bookmark_news as $key => $value) {
            $category_id[] = $value->news->category_id;
        }
        $category = Category::whereIn('id', $category_id)->get();
        return view('livewire.users-panel.bookmarked-news')->with(compact('bookmark_news', 'category'));
    }
}
