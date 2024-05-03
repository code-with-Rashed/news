<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;
use App\Models\News;

class SectionThree extends Component
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
        if (!is_null($category) && count($category) >= 3) {
            $category_name = $category[2]['name'];
            $section_three_news = News::with('category')->where('category_id', $category[2]['id'])->orderByDesc('id')->paginate(2);
            return view('components.section-three')->with(compact('section_three_news', 'category_name'));
        }
        return false;
    }
}
