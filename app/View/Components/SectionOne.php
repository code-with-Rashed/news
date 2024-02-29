<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionOne extends Component
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
        $category = Category::first();
        $first_news = News::with('category')->where('category_id', $category->id)->first();
        $section_one_news = News::with('category')->where('category_id', $category->id)->orderByDesc('id')->paginate(6);
        return view('components.section-one')->with(compact('category', 'first_news', 'section_one_news'));
    }
}
