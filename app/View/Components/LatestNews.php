<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\News;

class LatestNews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $latest_news = News::with('category')->orderByDesc('id')->paginate(5);
        return view('components.latest-news')->with(compact('latest_news'));
    }
}
