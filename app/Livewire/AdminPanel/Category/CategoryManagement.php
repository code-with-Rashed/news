<?php

namespace App\Livewire\AdminPanel\Category;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("AdminPanel.index")]

class CategoryManagement extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.category.category-management');
    }
}
