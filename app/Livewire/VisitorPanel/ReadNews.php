<?php

namespace App\Livewire\VisitorPanel;

use App\Models\News;
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
    }

    public function render()
    {
        $read_news = $this->read_news;
        $related_news = News::select(['id', 'category_id', 'title', 'image', 'created_at'])->where('category_id', $read_news->category_id)->orderByDesc('id')->paginate(5);
        return view('livewire.visitor-panel.read-news')->with(compact('read_news', 'related_news'))->title($read_news->title);
    }
}
