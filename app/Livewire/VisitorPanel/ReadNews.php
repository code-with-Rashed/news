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
    public function mount($id)
    {
        $this->id = $id;
        $this->read_news = News::with('category')->find($this->id);
        if (is_null($this->read_news)) {
            return redirect()->route('home-page');
        }
        $this->increment_views();
    }

    public function increment_views()
    {
        $news_summaries = NewsSummary::where('news_id', $this->id)->get();
        if (count($news_summaries)) {
            $total_views = $news_summaries[0]->total_views + 1;
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
        $read_news = $this->read_news;
        $related_news = News::select(['id', 'category_id', 'title', 'image', 'created_at'])->where('category_id', $read_news->category_id)->orderByDesc('id')->paginate(5);
        return view('livewire.visitor-panel.read-news')->with(compact('read_news', 'related_news'))->title($read_news->title);
    }
}
