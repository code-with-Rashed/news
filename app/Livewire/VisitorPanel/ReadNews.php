<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Dislike;
use App\Models\Like;
use App\Models\News;
use App\Models\NewsSummary;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
class ReadNews extends Component
{
    protected $id;
    protected $read_news;
    protected $related_news;
    protected $news_summaries;
    public $comment;
    public $comments = [];

    public function mount($id)
    {
        $this->id = $id;
        $this->read_news = News::with('category')->find($this->id);
        if (is_null($this->read_news)) {
            return redirect()->route('home-page');
        }

        $this->related_news = News::select(['id', 'category_id', 'title', 'image', 'created_at'])->where('category_id', $this->read_news->category_id)->orderByDesc('id')->paginate(5);
        $this->news_summaries = NewsSummary::where('news_id', $this->id)->first();

        $this->increment_views();
    }

    public function increment_views()
    {
        if (!is_null($this->news_summaries)) {
            $total_views = $this->news_summaries->total_views + 1;
            NewsSummary::where('news_id', $this->id)->update(['total_views' => $total_views]);
        } else {
            $news_summaries = new NewsSummary();
            $news_summaries->news_id = $this->id;
            $news_summaries->total_views = 1;
            $news_summaries->save();
        }
    }

    // handle user like
    public function like($id)
    {
        $this->mount($id);
        if (!$this->is_user_login()) {
            $this->dispatch(
                "alert",
                type: "error",
                title: "<strong>Like this news ?</strong><br><p>Sign in to make your opinion count.</p>"
            );
            return false;
        }

        $like = Like::where('news_id', $this->id)->where('users_id', $this->logedin_user_id())->first();

        if (is_null($like)) {
            Like::insert(['news_id' => $this->id, 'users_id' => $this->logedin_user_id()]);
            $total_likes = $this->news_summaries->total_likes + 1;
            NewsSummary::where('news_id', $this->id)->update(['total_likes' => $total_likes]);
            $this->dispatch(
                "alert",
                type: "success",
                title: "Thanks for like ."
            );
        } else {
            $like->delete();
            $total_likes = $this->news_summaries->total_likes - 1;
            NewsSummary::where('news_id', $this->id)->update(['total_likes' => $total_likes]);
            $this->dispatch(
                "alert",
                type: "error",
                title: "Like has been removed ."
            );
        }
    }

    // handle user dislike
    public function dislike($id)
    {
        $this->mount($id);

        if (!$this->is_user_login()) {
            $this->dispatch(
                "alert",
                type: "error",
                title: "<strong>Don't like this news ?</strong><br><p>Sign in to make your opinion count.</p>"
            );
            return false;
        }

        $dislike = Dislike::where('news_id', $this->id)->where('users_id', $this->logedin_user_id())->first();

        if (is_null($dislike)) {
            Dislike::insert(['news_id' => $this->id, 'users_id' => $this->logedin_user_id()]);
            $total_dislikes = $this->news_summaries->total_dislikes + 1;
            NewsSummary::where('news_id', $this->id)->update(['total_dislikes' => $total_dislikes]);
            $this->dispatch(
                "alert",
                type: "success",
                title: "Thanks for dislike ."
            );
        } else {
            $dislike->delete();
            $total_dislikes = $this->news_summaries->total_dislikes - 1;
            NewsSummary::where('news_id', $this->id)->update(['total_dislikes' => $total_dislikes]);
            $this->dispatch(
                "alert",
                type: "error",
                title: "Disike has been removed ."
            );
        }
    }

    // handle news bookmark
    public function bookmark($id)
    {
        $this->mount($id);

        if (!$this->is_user_login()) {
            $this->dispatch(
                "alert",
                type: "error",
                title: "Please login to save the article"
            );
            return false;
        }

        Bookmark::updateOrCreate([
            "user_id" => $this->logedin_user_id(),
            "news_id" => $this->id
        ]);

        $this->dispatch(
            "alert",
            type: "success",
            title: "The article is bookmarked ."
        );
    }

    // check is user is login
    public function is_user_login()
    {
        return session()->has('user');
    }

    // save comment
    public function save_comment($id)
    {
        $this->mount($id);
        $this->validate([
            "comment" => "required|string|max:255"
        ]);

        if (!$this->is_user_login()) {
            $this->dispatch(
                "alert",
                type: "error",
                title: "Please login then write your comment."
            );
            return false;
        }

        $comment = new Comment();
        $comment->user_id = $this->logedin_user_id();
        $comment->news_id = $this->id;
        $comment->comment = $this->comment;
        $comment->save();

        // update total comment
        $total_comments = $this->news_summaries->total_comments + 1;
        NewsSummary::where('news_id', $this->id)->update(['total_comments' => $total_comments]);

        $this->reset('comment');

        $this->dispatch(
            "alert",
            type: "success",
            title: "Thanks for your comment"
        );
    }

    // show comments
    public function show_comments($id)
    {
        $this->mount($id);
        $this->comments = Comment::with('user')->where('news_id', $this->id)->where('status', 1)->get();
    }
    // delete comment
    public function delete_comment($news_id, $comment_id)
    {
        $this->mount($news_id);
        Comment::find($comment_id)->delete();

        // update total comment
        $total_comments = $this->news_summaries->total_comments - 1;
        NewsSummary::where('news_id', $this->id)->update(['total_comments' => $total_comments]);

        $this->dispatch(
            "alert",
            type: "success",
            title: "Your comment is delete."
        );
    }

    // get user id
    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }

    public function render()
    {
        return view('livewire.visitor-panel.read-news', ['read_news' => $this->read_news, 'related_news' => $this->related_news, 'news_summaries' => $this->news_summaries])->title($this->read_news->title);
    }
}
