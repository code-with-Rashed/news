<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionFour extends Component
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
        $category = Category::all();
        if (!is_null($category) && count($category) >= 4) {
            $category_name = $category[3]['name'];
            $section_four_first_news = News::with('category')->where('category_id', $category[3]['id'])->orderByDesc('id')->first();
            $section_four_news = News::with('category')->where('category_id', $category[3]['id'])->orderByDesc('id')->paginate(4);
            return view('components.section-four')->with(compact('category_name', 'section_four_first_news', 'section_four_news'));
        }
        return false;
    }
}
