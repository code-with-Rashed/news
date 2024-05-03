<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionTwo extends Component
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
        if (!is_null($category) && count($category) >= 2) {
            $category_name = $category[1]['name'];
            $section_two_news = News::with('category')->where('category_id', $category[1]['id'])->orderByDesc('id')->paginate(6);
            return view('components.section-two')->with(compact('section_two_news', 'category_name'));
        }
        return false;
    }
}
