<?php

namespace App\Livewire\AdminPanel\News;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
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

    public $id, $category_id, $image, $current_image, $title, $news, $edit_news;

    public function add_news()
    {
        $this->validate([
            "category_id" => "required|exists:categories,id",
            "image" => "required|image|mimes:png,jpg,jpeg,webp",
            "title" => "required|max:255",
            "news" => "required"
        ]);

        // save new news
        $news = new News();
        $news->category_id = $this->category_id;
        $news->writer_id = session('admin')['id'];
        $news->title = $this->title;
        $news->news = $this->news;
        $image_name = $this->image->store("public/media/news");
        $image = basename($image_name);
        $news->image = $image;
        $news->save();

        $this->resetProperties();

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

    // edit news
    public function edit($id)
    {
        $news = News::find($id);
        $this->id = $news->id;
        $this->category_id = $news->category_id;
        $this->current_image = $news->image;
        $this->title = $news->title;
        $this->edit_news = $news->news;
        $this->dispatch(
            "boot-ck-editor"
        );
    }

    // update news
    public function update($id)
    {
        $this->validate([
            "category_id" => "required|exists:categories,id",
            "image" => "nullable|image|mimes:png,jpg,jpeg,webp",
            "title" => "required|max:255",
            "edit_news" => "required"
        ]);

        // update news
        $news = News::find($id);
        if (is_null($news)) {
            return redirect()->route('admin.news-list');
            die;
        }
        $news->category_id = $this->category_id;
        $news->writer_id = session('admin')['id'];
        $news->title = $this->title;
        $news->news = $this->edit_news;

        // if chosed another news. then save new image & delete old image
        if ($this->image) {
            $image_name = $this->image->store("public/media/news");
            $image = basename($image_name);
            $news->image = $image;

            if (Storage::exists("public/media/news/" . $this->current_image)) {
                Storage::delete("public/media/news/" . $this->current_image);
            }
        }
        $news->update();

        $this->resetProperties();

        $this->dispatch(
            "bs-modal-hide",
            name: "editNewsModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "News successfully updated."
        );
    }

    // change news publish or un-publish status
    public function status($id)
    {
        $news = News::find($id);
        $status = $news->status ? 0 : 1;
        $news->status = $status;
        $news->update();

        $this->dispatch(
            "alert",
            type: $status ? "success" : "error",
            title: $status ? "News is published." : "News is un-published!!"
        );
    }

    // reset public properties
    public function resetProperties()
    {
        $this->reset(["category_id", "image", "title", "news", "id", "current_image", "edit_news"]);
    }

    public function render()
    {
        $categories = Category::all();
        $news_list = News::with('category')->with('writer')->latest()->paginate(5);
        return view('livewire.admin-panel.news.news-list')->with(compact('categories', 'news_list'));
    }
}
