<?php

namespace App\Livewire\VisitorPanel;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
class Category extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $category_news = News::with('category')->where('category_id', $this->id)->latest()->paginate(3);
        $title = '';
        if (count($category_news) > 0) {
            $title = $category_news[0]->category->name ?? $category_news[0]->category->name;
        }
        return view('livewire.visitor-panel.category', ['category_news' => $category_news])->title($title);
    }
}
