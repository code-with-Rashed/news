<?php

namespace App\Livewire\AdminPanel\Writers;

use App\Models\Comment;
use App\Models\News;
use App\Models\NewsSummary;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Writer;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

#[Layout("AdminPanel.index")]
#[Title("Writers Management")]

class WriterList extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $id, $name, $email, $role, $password, $password_confirmation, $writer_details;
    public $title, $details_image, $details_news, $category_name, $writer_name, $created_at, $comments, $news_summary;

    // add writer
    public function add_writer()
    {

        $this->validate([
            "name" => "required|string|max:100",
            "email" => "required|email|max:100|unique:writers,email",
            "role" => "required|string|in:admin,moderator,writer",
            "password" => "required|min:5|max:100|confirmed",
            "password_confirmation" => "required|min:5|max:100|"
        ]);

        $writer = new Writer();
        $writer->name = $this->name;
        $writer->email = $this->email;
        $writer->role = $this->role;
        $writer->password = Hash::make($this->password);
        $writer->save();

        $this->reset(["name", "email", "role", "password"]);

        $this->dispatch(
            "bs-modal-hide",
            name: "addWriterModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "New Writer Added."
        );
    }

    // open writer modal for edit writer information
    public function open_editable_writer_modal($id)
    {
        $writer = Writer::find($id);
        $this->id = $writer->id;
        $this->name = $writer->name;
        $this->email = $writer->email;
        $this->role = $writer->role;
    }

    // update writer information
    public function edit_writer($id)
    {
        $this->validate([
            "name" => "required|string|max:100",
            "email" => "required|email|max:100|unique:writers,email,$id",
            "role" => "required|string|in:admin,moderator,writer"
        ]);

        $writer = Writer::find($id);
        if (!is_null($writer)) {
            $writer->name = $this->name;
            $writer->email = $this->email;
            $writer->role = $this->role;
            $writer->update();
        }

        $this->reset(["name", "email", "role"]);

        $this->dispatch(
            "bs-modal-hide",
            name: "editWriterModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Writer Updated."
        );
    }

    // confirmation for writer delete 
    public function open_confirmed_deletable_writer_modal($id)
    {
        $this->id = $id;
    }

    // delete writer
    public function delete($id)
    {
        $writer = Writer::withCount('news')->find($id);
        if (!is_null($writer)) {
            if ($writer->news_count < 1) {
                $writer->delete();
                $this->dispatch(
                    "alert",
                    type: "success",
                    title: "Writer Deleted."
                );
            } else {
                $this->dispatch(
                    "alert",
                    type: "error",
                    title: "Sorry ! Writer wise news exist."
                );
            }
        }
        $this->reset("id");
    }

    // change writer status
    public function status($id)
    {
        $writer = Writer::find($id);
        if (!is_null($writer)) {
            $status = $writer->status ? 0 : 1;
            $writer->status = $status;
            $writer->update();

            $this->dispatch(
                "alert",
                type: $status ? "success" : "error",
                title: $status ? "Writer is Active." : "writer is In-Active."
            );
        }
    }

    // writer details
    public function details($id)
    {
        $writer = Writer::withCount('news')->find($id);
        $this->writer_details = $writer;
    }

    // writer news details
    public function writer_news_details($id)
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

    // reset public properties
    public function resetProperties()
    {
        $this->reset(["title", "details_image", "details_news", "category_name", "writer_name", "created_at", "comments", "news_summary"]);
    }

    // render component
    public function render()
    {
        $writers = Writer::withCount('news')->paginate(4);
        return view('livewire.admin-panel.writers.writer-list')->with(compact("writers"));
    }
}
