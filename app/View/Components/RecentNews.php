<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentNews extends Component
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
        $recent_news = [];
        $category = Category::all();
        foreach ($category as $key => $value) {
            $news = News::where('category_id', $value->id)->orderByDesc('id')->first(['id', 'category_id', 'image', 'title', 'created_at']);
            if (!is_null($news)) {
                $recent_news[] = $news->toArray();
                $recent_news[$key]['category_name'] = $value->name;
            }
        }
        return view('components.recent-news')->with(compact('recent_news'));
    }
}
