<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Category;

class Categories
{
    public function all_category()
    {
        $categories = Category::all();
        return $categories;
    }
}
