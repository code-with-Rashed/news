<?php

namespace App\Livewire\VisitorPanel;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
class Search extends Component
{
    #[Url()]
    public $s = '';
    protected $search_result = [];
    public $result_exist = false;
    public function render()
    {
        $result = News::with('category')->where('title', 'like', '%' . $this->s . '%')->latest()->get();
        if (count($result) > 0) {
            $this->search_result = $result;
            $this->result_exist = true;
        }
        return view('livewire.visitor-panel.search', ['search_result' => $this->search_result])->title($this->s);
    }
}
