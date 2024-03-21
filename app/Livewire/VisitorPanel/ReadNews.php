<?php

namespace App\Livewire\VisitorPanel;

use App\Models\News;
use App\Models\NewsSummary;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
class ReadNews extends Component
{
    protected $id;
    protected $read_news;
    protected $news_summaries;

    public function mount($id)
    {
        $this->id = $id;
        $this->read_news = News::with('category')->find($this->id);
        if (is_null($this->read_news)) {
            return redirect()->route('home-page');
        }

        $this->news_summaries = NewsSummary::where('news_id', $this->id)->get();

        $this->increment_views();
    }

    public function increment_views()
    {
        if (count($this->news_summaries)) {
            $total_views = $this->news_summaries[0]->total_views + 1;
            NewsSummary::where('news_id', $this->id)->update(['total_views' => $total_views]);
        } else {
            $news_summaries = new NewsSummary();
            $news_summaries->news_id = $this->id;
            $news_summaries->total_views = 1;
            $news_summaries->save();
        }
    }

    public function render()
    {
        $related_news = News::select(['id', 'category_id', 'title', 'image', 'created_at'])->where('category_id', $this->read_news->category_id)->orderByDesc('id')->paginate(5);
        return view('livewire.visitor-panel.read-news', ['read_news' => $this->read_news, 'related_news' => $related_news, 'news_summaries' => $this->news_summaries])->title($this->read_news->title);
    }
}
