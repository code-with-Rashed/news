<?php

namespace App\Livewire\AdminPanel\Category;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("AdminPanel.index")]
#[Title("Category Management")]

class Categories extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.category.categories');
    }
}
