<?php

namespace App\Livewire\AdminPanel\News;

use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use App\Models\NewsSummary;
use Illuminate\Support\Facades\File;
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

    public $id, $category_id, $image, $current_image, $title, $news, $edit_news, $details_image, $details_news, $category_name, $writer_name, $created_at, $comments, $news_summary;

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
        $image_name = $this->image->store("media/news", "public_disk");
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
            $image_name = $this->image->store("media/news", "public_disk");
            $image = basename($image_name);
            $news->image = $image;

            if (File::exists(public_path("storage/media/news/" . $this->current_image))) {
                File::delete(public_path("storage/media/news/" . $this->current_image));
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

    // confirmation for delete news
    public function confirmation($id)
    {
        $this->id = $id;
    }

    // Delete news
    public function delete($id)
    {
        $news = News::find($id);
        if (!is_null($news)) {

            if (File::exists(public_path("storage/media/news/" . $news->image))) {
                File::delete(public_path("storage/media/news/" . $news->image));
            }

            $news->delete();

            $this->dispatch(
                "alert",
                type: "success",
                title: "This news related all data successfully deleted."
            );
        }
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
        $this->reset(["category_id", "image", "title", "news", "id", "current_image", "edit_news", "details_image", "details_news", "category_name", "writer_name", "created_at", "comments", "news_summary"]);
    }

    // details news
    public function details($id)
    {
        $news = News::with('category')->with('writer')->find($id);
        $this->title = $news->title;
        $this->details_image = $news->image;
        $this->details_news = $news->news;
        $this->created_at = $news->created_at;
        $this->category_name = $news->category->name;
        $this->writer_name = $news->writer->name;

        // get news summary
        $news_summaries = NewsSummary::where('news_id', $id)->get();
        if (count($news_summaries) > 0) {
            $this->news_summary = $news_summaries->toArray()[0];
        }

        // find comments
        $comment_details = Comment::with('user')->where('news_id', $id)->get();
        $this->comments = $comment_details;
    }

    // change comment status
    public function change_comment_status($id)
    {
        $comment = Comment::find($id);
        $status = $comment->status ? '0' : '1';
        $comment->status = $status;
        $comment->update();

        $this->dispatch(
            "bs-modal-hide",
            name: "detailNewsModal"
        );

        $this->dispatch(
            "alert",
            type: $status ? "success" : "error",
            title: $status ? "Comment is public." : "Comment is un-public!!"
        );
    }

    // Delete Comment
    public function delete_comment($id)
    {
        $comment = Comment::find($id);
        if (!is_null($comment)) {
            // update total comment
            $news_summary = NewsSummary::where('news_id', $comment->news_id)->first();
            $total_comments = $news_summary->total_comments - 1;
            NewsSummary::where('news_id', $news_summary->news_id)->update(['total_comments' => $total_comments]);

            $comment->delete();
        }

        $this->dispatch(
            "bs-modal-hide",
            name: "detailNewsModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "The Comment is Delete."
        );
    }

    public function render()
    {
        $categories = Category::all();
        $role = session()->get("admin")["role"];
        if ($role == "admin" || $role == "moderator") {
            $news_list = News::with('category')->with('writer')->latest()->paginate(5);
        } else if ($role == "writer") {
            $news_list = News::with('category')->withWhereHas('writer', function ($query) {
                $query->where('id', session()->get("admin")["id"]);
            })->latest()->paginate(5);
        }
        return view('livewire.admin-panel.news.news-list')->with(compact('categories', 'news_list'));
    }
}
