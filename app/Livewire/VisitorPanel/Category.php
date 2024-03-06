<?php

namespace App\Livewire\VisitorPanel;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('VisitorPanel.index')]
class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $category_news = News::with('category')->where('category_id', $this->id)->orderByDesc('id')->get();
        $title = '';
        if (count($category_news) > 0) {
            $title = $category_news[0]->category->name ?? $category_news[0]->category->name;
        }
        return view('livewire.visitor-panel.category', ['category_news' => $category_news])->title($title);
    }
}
