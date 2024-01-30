<?php

namespace App\Livewire\AdminPanel\News;

use App\Models\Category;
use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

#[Layout("AdminPanel.index")]
#[Title("News Management")]

class NewsList extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = "bootstrap";

    public $category_id, $image, $title, $news;

    public function add_news()
    {
        $this->validate([
            "category_id" => "required|exists:categories,id",
            "image" => "required|image|mimes:png,jpg,jpeg,webp",
            "title" => "required|max:255",
            "news" => "required"
        ]);

        $news = new News();
        $news->category_id = $this->category_id;
        $news->writer_id = session('admin')['id'];
        $news->title = $this->title;
        $news->news = $this->news;
        $image_name = $this->image->store("public/media/news");
        $image = basename($image_name);
        $news->image = $image;
        $news->save();

        $this->reset(["category_id", "image", "title", "news"]);

        $this->dispatch(
            "bs-modal-hide",
            name: "addNewsModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "New News Added."
        );
    }

    public function render()
    {
        $categories = Category::all();
        $news_list = News::latest()->paginate(5);
        return view('livewire.admin-panel.news.news-list')->with(compact('categories', 'news_list'));
    }
}
